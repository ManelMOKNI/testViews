<?php

abstract class Model
{
    private static $_bdd;

    // INSTANCIE LA CONNEXION A LA BASE DE DONNEE
    private static function setBdd()
    {
        try {
            self::$_bdd = new PDO("mysql:host=localhost;dbname=e360", "root", "");
        } catch (PDOException $ex) {
            echo $ex->getMessage();
            exit();
        }
    }

    // RECUPERE LA CONNEXION A LA BASE DE DONNEE
    protected function getBdd()
    {
        if (self::$_bdd == null) {
            self::setBdd();
        }
        return self::$_bdd;
    }

    // RECUPERER TOUT LES DONNEE DANS UNE TABLE
    protected function getALL($table, $obj)
    {
        $var = [];
        $req = $this->getBdd()->prepare('SELECT * FROM ' . $table);
        $req->execute();
        while ($data = $req->fetch(PDO::FETCH_ASSOC)) {
            $var[] = new $obj($data);
        }
        return $var;
        $req->closeCursor();
    }

    // ENREGISTRER UNE NOUVELLE RECLAMATION
    protected function registerClaim($table, $var)
    {
        $userName = $var->getUserName();
        $email = $var->getEmail();
        $phoneNumber = $var->getPhoneNumber();
        $submitDate = $var->getDate();
        $description = $var->getDescription();

        $pdoQuery = 'INSERT INTO ' . $table . ' (user_name, email, phone_number, submit_date, description) values (:userName, :email, :phoneNumber, :submitDate, :description)';
        $req = $this->getBdd()->prepare($pdoQuery);
        $result = $req->execute(array(":userName" => $userName, ":email" => $email, ":phoneNumber" => $phoneNumber, ":submitDate" => $submitDate, ":description" => $description));
        return $result;
        /*if ($result) {
            echo 'Your claim is registered';
        } else {
            echo 'Error when registering your claim';
        }*/
    }
}
