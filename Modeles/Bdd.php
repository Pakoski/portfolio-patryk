<?php

namespace Modeles;
use PDO;
use Modeles\Entites\Projet;
use Modeles\Entites\Msg;

abstract class Bdd {
    public static function pdo(){
        return new PDO("mysql:host=127.0.0.1:3306;dbname=portfolio", "root", "", [PDO::ATTR_ERRMODE => PDO::ERRMODE_SILENT ]);

    }

    public static function select(string $table){
        $pdostatement = self::pdo()->query("SELECT * FROM $table");
        return $pdostatement->fetchAll(PDO::FETCH_CLASS, "Modeles\Entites\\" . ucfirst($table) );       
    }

    public static function selectById(string $table, int $id)
    {
        $pdostatement = self::pdo()->query("SELECT * FROM $table WHERE id = " . $id);
        $pdostatement->setFetchMode(PDO::FETCH_CLASS, "Modeles\Entites\\" . ucfirst($table));
        return $pdostatement->fetch();
    }
    public static function insertProjet(Projet $projet){
        $texteRequete = "INSERT INTO projet (titre, image, description) 
                         VALUES (:titre, :image, :description)";
        $pdostatement = self::pdo()->prepare($texteRequete);
        $pdostatement->bindValue(":titre", $projet->getTitre());
        $pdostatement->bindValue(":description", $projet->getDescription());
        $pdostatement->bindValue(":image", $projet->getImage(), PDO::PARAM_LOB);
    
        return $pdostatement->execute();
    }

    public static function updateProjet(Projet $projet) : bool{
        $texteRequete = "UPDATE projet
        SET titre = :titre, image = :image, description = :description WHERE id = :id";
        $pdostatement = self::pdo()->prepare($texteRequete);
        $pdostatement->bindValue(":titre", $projet->getTitre());
        $pdostatement->bindValue(":image", $projet->getImage(), PDO::PARAM_LOB);
        $pdostatement->bindValue(":description", $projet->getDescription());
        $pdostatement->bindValue(":id", $projet->getId());
        return $pdostatement->execute();
    }

    public static function deleteProjet(Projet $projet){
        return self::pdo()->exec("DELETE FROM projet WHERE id=" . $projet->getId());
    }

    //MESSAGES

    public static function selectMsg(string $table){
        $pdostatement = self::pdo()->query("SELECT * FROM $table");
        return $pdostatement->fetchAll(PDO::FETCH_CLASS, "Modeles\Entites\\" . ucfirst($table) );       
    }

    public static function selectByIdMsg(string $table, int $id)
    {
        $pdostatement = self::pdo()->query("SELECT * FROM $table WHERE id = " . $id);
        $pdostatement->setFetchMode(PDO::FETCH_CLASS, "Modeles\Entites\\" . ucfirst($table));
        return $pdostatement->fetch();
    }
    public static function insertMsg(Msg $msg){
        $texteRequete = "INSERT INTO msg (nom, email, texte) 
                         VALUES (:nom, :email, :texte)";
        //1. je prépare la requête avec des paramètres (mais elle n'est pas exécutée)
        $pdostatement = self::pdo()->prepare($texteRequete);
        //2. je donne une valeur à chaque paramètre de la requête préparée 
        $pdostatement->bindValue(":nom", $msg->getNom());
        $pdostatement->bindValue(":email", $msg->getEmail());
        $pdostatement->bindValue(":texte", $msg->getTexte());
        //3. j'exécute la requête
        return $pdostatement->execute();
        //4. la fonction execute() renvoie un booléen, faux s'il y a eu une erreur SQL
        if ($pdostatement->errorCode() !== '00000') {
            die('Erreur : ' . $pdostatement->errorInfo()[2]);
        }
        
        echo 'Les données ont été enregistrées avec succès.';
    }

    public static function deleteMsg(Msg $msg){
        return self::pdo()->exec("DELETE FROM msg WHERE id=" . $msg->getId());
    }
}