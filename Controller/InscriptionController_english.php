<?php


//var_dump($_POST);

if ( !empty($_POST) == true )
{
    $erreurs = array();


    if (array_key_exists("inputLogin", $_POST) == true)
    {
        // on peut mettre aussi comme test:  if (empty($_POST["nom"] )
        if (trim($_POST["inputLogin"]) == '')
        {
            $messageErreur = "You must enter a login! ";
            array_push($erreurs, $messageErreur);  // on peut mettre aussi: $erreurs["nom"]= "blabla"
        }
    }

    if (array_key_exists("inputEmail", $_POST) == true)
    {

        if (trim($_POST["inputEmail"]) == '' )
        {
            $messageErreur = "You must enter a email! ";
            array_push($erreurs, $messageErreur);
        }

    }

    if (array_key_exists("inputPassword", $_POST) == true)
    {

        if (trim($_POST["inputPassword"]) == '' )
        {
            $messageErreur = "You must enter a password! ";
            array_push($erreurs, $messageErreur);
        }

    }

    if (array_key_exists("inputRegion", $_POST) == true)
    {

        if (trim($_POST["inputRegion"]) == '' )
        {
            $messageErreur = "You must enter an area! ";
            array_push($erreurs, $messageErreur);
        }

    }

    if (array_key_exists("inputVille", $_POST) == true)
    {

        if (trim($_POST["inputVille"]) == '' )
        {
            $messageErreur = "You must enter a city! ";
            array_push($erreurs, $messageErreur);
        }

    }

    if (array_key_exists("inputCodePostal", $_POST) == true)
    {

        if (trim($_POST["inputCodePostal"]) == '' )
        {
            $messageErreur = "You must enter a postal code! ";
            array_push($erreurs, $messageErreur);
        }

    }





   // var_dump($erreurs);

    // Tableau erreur non vide
    if (!empty ($erreurs))
    {
        //var_dump($erreurs);
    }
    else
    {
        //die("inscription en cours");

        $sql = "INSERT INTO utilisateurs (login, password, Email, Pays, Region, Ville, CodePostal)
                VALUES(:identifiant,:idpassword,:email,:pays,:ville,:region,:codepostal )";
        $requete = $connexion->prepare($sql);

        $requete->bindvalue(":identifiant", $_POST["inputLogin"], PDO::PARAM_STR);
        $requete->bindvalue(":idpassword", sha1($_POST["inputPassword"]) , PDO::PARAM_STR);
        $requete->bindvalue(":email", $_POST["inputEmail"], PDO::PARAM_STR);
        $requete->bindvalue(":pays", $_POST["inputPays"], PDO::PARAM_STR);
        $requete->bindvalue(":ville", $_POST["inputVille"], PDO::PARAM_STR);
        $requete->bindvalue(":region", $_POST["inputRegion"], PDO::PARAM_STR);
        $requete->bindvalue(":codepostal", $_POST["inputCodePostal"], PDO::PARAM_STR);

        $success = $requete->execute();


        if ($success)
        {
            //die("insertion utilisateur ok");

            $_SESSION["utilisateur"]["login"] = $_POST["inputLogin"];
            $_SESSION["utilisateur"]["password"] = sha1($_POST["inputPassword"]);

            // Mettre a jour le champ connected a 1 en base
            $sql ="UPDATE utilisateurs SET connected = 1 WHERE login = :identifiant and password = :idpassword";
            $requete = $connexion->prepare($sql);

            $requete->bindvalue(":identifiant", $_POST["inputLogin"], PDO::PARAM_STR);
            $requete->bindvalue(":idpassword", sha1($_POST["inputPassword"]) , PDO::PARAM_STR);

             $success = $requete->execute();

           // echo "insertion utilisateur ok";



            // rediriger vers la page d'accueil


        }
        else
        {
            //die("insertion utilisateur ko");

            $messageErreur = "insert user  ko! ";
            array_push($erreurs, $messageErreur);

            var_dump($erreurs);
        }

    }

}


