<?php

namespace Controleurs;

use Modeles\Bdd;
use Modeles\Entites\Msg;

class MsgControleur {
    public function liste(){
        $msg = Bdd::select("msg");

        include "vues/header.html.php";
        include "vues/message/table.html.php";
        include "vues/footer.html.php";
    }
    public function ajouterMsg(){
        if( $_POST ){
            $m = new Msg;
            $m->setNom($_POST["nom"]);
            $m->setEmail($_POST["email"]);
            $m->setTexte($_POST["texte"]);
            $resultat = Bdd::insertMsg($m);
            if( $resultat ){
                header("Location: http://localhost/Patryk_folio/#folio_contact");
                exit;
            } else {
                echo "Erreur SQL lors de l'insertion";
            }
        }
        
        $msg = new Msg;
    }

    public function ajouter(){
        if( $_POST ){
            $k = new Msg;
            $k->setNom($_POST["nom"]);
            $k->setEmail($_POST["email"]);
            $k->setTexte($_POST["texte"]);
            $resultat = Bdd::insertMsg($k);
            if( $resultat ){
                redirection(lien("msg"));
                exit;
            } else {
                echo "Erreur SQL lors de l'insertion";
            }
        
        }
        
        $msg = new Msg;
        include "vues/header.html.php";
        include "vues/message/form.html.php";
        include "vues/footer.html.php";
    }
    public function modifier($id){
        $msg = Bdd::selectByIdMsg("msg", $id);

        if($_POST){
        $nom = $_POST["nom"] ?? null;
        $email = $_POST["email"] ?? null;
        $texte = $_POST["texte"] ?? null;

        if( !empty($nom) && !empty($email) ) {
            if( strlen($nom) > 50 ) {
                $erreurs["nom"] = "Le nom ne doit pas dépasser 50 caractères";
            }
            if( strlen($nom) < 4 ) {
                $erreurs["titre"] = "Le nom doit avoir au moins 4 caractères";
            }
        } else {
            $erreurs["generale"] = "Veuillez remplir les champs requis";
        }

        if( empty($erreurs) ){
            $msg->setNom($nom);
            $msg->setEmail($email);
            $msg->setTexte($texte);
            if( Bdd::updateMsg($msg) ){
                redirection(lien("msg"));
            } else {
                $erreurs["generale"] = "Erreur lors de la modification en bdd";
            }
        }
    }
        include "vues/header.html.php";
        include "vues/message/form.html.php";
        include "vues/footer.html.php";
    }
    public function supprimer($id){
        if($id) {
            if( is_numeric($id) ) {
                $msg = Bdd::selectByIdMsg("msg", $id);
                if($msg){
                        if($_SERVER["REQUEST_METHOD"] == "POST"){
                            if( Bdd::deleteMsg($msg) == 1 ) {
                                redirection(lien("msg"));
                        }
                  }
               } else {
                   redirection(lien("msg"));
                }
            }
        }
        affichage("message/suppression.html.php", [ "msg" => $msg ]);
    }
}
