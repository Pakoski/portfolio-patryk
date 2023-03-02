"use strict";

function createParticles(elementId) {
  const canvas = document.getElementById(elementId);
  canvas.width = window.innerWidth;
  canvas.height = window.innerHeight;
  const ctx = canvas.getContext("2d");

  const particles = [];
  const particleCount = 10;
  const shapes = ["triangle"];

  // Generate particle objects
  for (let i = 0; i < particleCount; i++) {
    const particle = {
      x: Math.random() * canvas.width,
      y: Math.random() * canvas.height,
      size: Math.random() * 60 + 25,
      shape: shapes[Math.floor(Math.random() * shapes.length)],
      speedX: (Math.random() - 0.5) * 2,
      speedY: (Math.random() - 0.5) * 2,
      angle: 0,
      angleSpeed: (Math.random() - 0.5) * 0.005,
    };
    particles.push(particle);
  }

  let isDrawing = false;

  function draw() {
    canvas.width = window.innerWidth;
    canvas.height = window.innerHeight;
    ctx.clearRect(0, 0, canvas.width, canvas.height);

    for (let i = 0; i < particles.length; i++) {
      const particle = particles[i];
      ctx.beginPath();
    
       if (particle.shape === "triangle") {
        ctx.save();
        ctx.translate(particle.x, particle.y);
        ctx.rotate(particle.angleSpeed);
        ctx.rotate(particle.angle);
        ctx.rotate(-particle.angleSpeed);
        ctx.translate(-particle.x, -particle.y);
        ctx.moveTo(particle.x, particle.y - particle.size);
        ctx.lineTo(particle.x + particle.size, particle.y + particle.size);
        ctx.lineTo(particle.x - particle.size, particle.y + particle.size);
        ctx.closePath();

        ctx.restore();
      }
    
      ctx.fillStyle = "rgba(52, 45, 82, 0.2)";
      ctx.fill();
    
      particle.x += particle.speedX;
      particle.y += particle.speedY;
      particle.angle += particle.angleSpeed;
    
      // Check if particle is out of bounds
      if (particle.x > canvas.width || particle.x < 0) {
        particle.speedX = -particle.speedX;
        particle.angleSpeed = (Math.random()) * 0.008;
      }
      if (particle.y > canvas.height || particle.y < 0) {
        particle.speedY = -particle.speedY;
        particle.angleSpeed = -(Math.random()) * 0.008;
      }
      ctx.restore(); // restore the previous context state
    }

        if (isDrawing) {
      requestAnimationFrame(draw);
    }
  }

  return {
    start: function() {
      isDrawing = true;
      requestAnimationFrame(draw);
    },
    stop: function() {
      isDrawing = false;
    },
  };
}

const canvas1 = createParticles("canvas1");
const canvas2 = createParticles("canvas2");
const canvas3 = createParticles("canvas3");
const canvas4 = createParticles("canvas4");

canvas1.start();
canvas2.start();
canvas3.start();
canvas4.start();

//menu deroulant mobile

let content = document.querySelector("#hamburger-content"),
    sidebarBody = document.querySelector("#hamburger-sidebar-body"),
    btn = document.querySelector("#hamburger-button"),
    overlay = document.querySelector("#hamburger-overlay"),
    activatedClass = "hamburger-activated";

sidebarBody.innerHTML = content.innerHTML;

btn.addEventListener("click", function () {
    this.parentNode.classList.add(activatedClass);
});

overlay.addEventListener("click", function () {
    this.parentNode.classList.remove(activatedClass);
});

//dark and light mode

const toggleSwitch = document.querySelector('.theme-switch input[type="checkbox"]');
const sections = document.querySelectorAll('section');
const nav = document.querySelector('header')
function switchTheme(e) {
  if (e.target.checked) {
    sections.forEach(section => section.classList.add('dark-mode'));
    nav.classList.add('dark-mode');
    localStorage.setItem('myTheme', 'dark');
  } else {
    sections.forEach(section => section.classList.remove('dark-mode'));
    nav.classList.remove('dark-mode');
    localStorage.setItem('myTheme', 'light');
  }
}

function setInitialTheme() {
  const theme = localStorage.getItem('myTheme');
  if (theme === 'dark') {
    toggleSwitch.checked = true;
    sections.forEach(section => section.classList.add('dark-mode'));
    nav.classList.add('dark-mode');
  } else {
    toggleSwitch.checked = false;
    sections.forEach(section => section.classList.remove('dark-mode'));
    nav.classList.remove('dark-mode');
  }
}

toggleSwitch.addEventListener('change', switchTheme);

window.addEventListener('load', setInitialTheme);