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
