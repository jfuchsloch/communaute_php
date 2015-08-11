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
            $messageErreur = "Vous devez saisir un login! ";
            array_push($erreurs, $messageErreur);  // on peut mettre aussi: $erreurs["nom"]= "blabla"
        }
    }

    if (array_key_exists("inputEmail", $_POST) == true)
    {

        if (trim($_POST["inputEmail"]) == '' )
        {
            $messageErreur = "Vous devez saisir un email! ";
            array_push($erreurs, $messageErreur);
        }

    }

    if (array_key_exists("inputPassword", $_POST) == true)
    {

        if (trim($_POST["inputPassword"]) == '' )
        {
            $messageErreur = "Vous devez saisir un mot de passe! ";
            array_push($erreurs, $messageErreur);
        }

    }

    if (array_key_exists("inputRegion", $_POST) == true)
    {

        if (trim($_POST["inputRegion"]) == '' )
        {
            $messageErreur = "Vous devez saisir une region! ";
            array_push($erreurs, $messageErreur);
        }

    }

    if (array_key_exists("inputVille", $_POST) == true)
    {

        if (trim($_POST["inputVille"]) == '' )
        {
            $messageErreur = "Vous devez saisir une ville! ";
            array_push($erreurs, $messageErreur);
        }

    }

    if (array_key_exists("inputCodePostal", $_POST) == true)
    {

        if (trim($_POST["inputCodePostal"]) == '' )
        {
            $messageErreur = "Vous devez saisir un code postal! ";
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

        $sql = "INSERT INTO utilisateurs (login, password, Email, Pays, Region, Ville, CodePostal, age)
                VALUES(:identifiant,:idpassword,:email,:pays,:ville,:region,:codepostal,:age)";
        $requete = $connexion->prepare($sql);

        $requete->bindvalue(":identifiant", $_POST["inputLogin"], PDO::PARAM_STR);
        $requete->bindvalue(":idpassword", sha1($_POST["inputPassword"]) , PDO::PARAM_STR);
        $requete->bindvalue(":email", $_POST["inputEmail"], PDO::PARAM_STR);
        $requete->bindvalue(":pays", $_POST["inputPays"], PDO::PARAM_STR);
        $requete->bindvalue(":ville", $_POST["inputVille"], PDO::PARAM_STR);
        $requete->bindvalue(":region", $_POST["inputRegion"], PDO::PARAM_STR);
        $requete->bindvalue(":codepostal", $_POST["inputCodePostal"], PDO::PARAM_STR);
        $requete->bindvalue(":age", $_POST["inputAge"], PDO::PARAM_STR);
        
        $success = $requete->execute();


        if ($success)
        {
            //die("insertion utilisateur ok");

            $_SESSION["utilisateur"]["login"] = $_POST["inputLogin"];
            $_SESSION["utilisateur"]["password"] = sha1($_POST["inputPassword"]);
            $_SESSION["utilisateur"]["email"] = $_POST["inputEmail"];

            // Mettre a jour le champ connected a 1 en base
            $sql ="UPDATE utilisateurs SET connected = 1 WHERE login = :identifiant and password = :idpassword";
            $requete = $connexion->prepare($sql);

            $requete->bindvalue(":identifiant", $_POST["inputLogin"], PDO::PARAM_STR);
            $requete->bindvalue(":idpassword", sha1($_POST["inputPassword"]) , PDO::PARAM_STR);

             $success = $requete->execute();

           // echo "insertion utilisateur ok";



            // rediriger vers la page d'accueil

            $sql = "SELECT * FROM utilisateurs WHERE connected=1";
            $requete = $connexion->prepare($sql);

            $success = $requete->execute();

            // Recuperation des resultats dans une variable
            $membreConnectes = $requete->fetchAll(PDO::FETCH_ASSOC);



        }
        else
        {
            //die("insertion utilisateur ko");

            $messageErreur = "insertion utilisateur ko! ";
            array_push($erreurs, $messageErreur);

            var_dump($erreurs);
        }

    }

}
else // Appele par un non POST
{

    $sql = "SELECT * FROM utilisateurs WHERE connected=1";

    $requete = $connexion->prepare($sql);

    $success = $requete->execute();

    // Recuperation des resultats dans une variable
    $AllmembreConnectes = $requete->fetchAll(PDO::FETCH_ASSOC);
    //var_dump($AllmembreConnectes);

   // if(!empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest') {
        // die("je suis en ajax");
        //  die(json_encode("test"));
       // die(json_encode(["var" => $AllmembreConnectes]));
    //}

    // die(json_encode(["var" => $AllmembreConnectes]));
    //die(json_encode("test"));

}




