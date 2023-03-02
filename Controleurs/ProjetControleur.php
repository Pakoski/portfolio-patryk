<?php

namespace Controleurs;

use Modeles\Bdd;
use Modeles\Entites\Projet;

class ProjetControleur {
    public function liste(){
        $projet = Bdd::select("projet");

        include "vues/header.html.php";
        include "vues/projet/table.html.php";
        include "vues/footer.html.php";
    }

    public function ajouter()
    {
        if ($_POST) {
            $projet = new Projet;
            $projet->setTitre($_POST["titre"]);
            $projet->setDescription($_POST["description"]);
    
            if (isset($_FILES['image']) && $_FILES['image']['error'] === UPLOAD_ERR_OK) {
                $showImage = file_get_contents($_FILES["image"]["tmp_name"]);
                $projet->setImage($showImage);
            }
    
            $resultat = Bdd::insertProjet($projet);
            if ($resultat) {
                redirection(lien("projet"));
            } else {
                echo "Erreur SQL lors de l'insertion";
            }
        }
    
        $projet = new Projet;
        include "vues/header.html.php";
        include "vues/projet/form.html.php";
        include "vues/footer.html.php";
    }
    public function modifier($id)
    {
        $projet = Bdd::selectById("projet", $id);

        if($_POST){
            $titre = $_POST["titre"] ?? null;
            $description = $_POST["description"] ?? null;
            
            if (isset($_FILES['image']) && $_FILES['image']['error'] === UPLOAD_ERR_OK) {
                $image_contenu = file_get_contents($_FILES["image"]["tmp_name"]);
                $projet->setImage($image_contenu);
            }
            if( empty($erreurs) ){
                $projet->setTitre($titre);
                $projet->setDescription($description);
                if( Bdd::updateProjet($projet) ){
                    redirection(lien("projet"));
                } else {
                    $erreurs["generale"] = "Erreur lors de la modification en bdd";
                }
            }
        }

        include "vues/header.html.php";
        include "vues/projet/form.html.php";
        include "vues/footer.html.php";
    }
    
    public function supprimer($id){
        if($id) {
            if( is_numeric($id) ) {
                $projet = Bdd::selectById("projet", $id);
                if($projet){
                        if($_SERVER["REQUEST_METHOD"] == "POST"){
                            if( Bdd::deleteProjet($projet) == 1 ) {
                                redirection(lien("projet"));
                        }
                  }
               } else {
                   redirection(lien("projet"));
                }
            }
        }
        affichage("projet/suppression.html.php", [ "projet" => $projet ]);
    }
}
