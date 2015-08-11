<?php


//var_dump($_POST);

if ( !empty($_POST) == true )
{
    $erreurs = array();

    if (array_key_exists("inputRegion", $_POST) == true)
    {

        if (trim($_POST["inputRegion"]) == '' )
        {
            $messageErreur = "You must enter an aera! ";
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


   // var_dump($erreurs);

    // Tableau erreur non vide
    if (!empty ($erreurs))
    {
        //var_dump($erreurs);
    }
    else
    {
       // die("services en cours");

       $sql = "SELECT * FROM utilisateurs where Pays = :idpays AND  age = :idage AND Region = :idregion AND Ville = :idville AND  CONNECTED=1";

        $requete = $connexion->prepare($sql);

        $requete->bindvalue(":idpays", $_POST["inputPays"], PDO::PARAM_STR);
        $requete->bindvalue(":idville", $_POST["inputVille"], PDO::PARAM_STR);
        $requete->bindvalue(":idregion", $_POST["inputRegion"], PDO::PARAM_STR);
        $requete->bindvalue(":idage", $_POST["inputAge"], PDO::PARAM_STR);

        $success = $requete->execute();

        $utilisateur = $requete->fetchAll(PDO::FETCH_ASSOC);
       // var_dump($utilisateur);

        if (!empty ($utilisateur))
        {
            //die("insertion utilisateur ok");

        }
        else
        {
            //die("insertion utilisateur ko");

            $messageErreur = "select user ko! ";
            array_push($erreurs, $messageErreur);

            var_dump($erreurs);
        }

    }

}
else // Appele par un non POST
{

   /* $sql = "SELECT * FROM utilisateurs WHERE connected=1";

    $requete = $connexion->prepare($sql);

    $success = $requete->execute();*/

    // Recuperation des resultats dans une variable
  //  $AllmembreConnectes = $requete->fetchAll(PDO::FETCH_ASSOC);
    //var_dump($AllmembreConnectes);

   // if(!empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest') {
        // die("je suis en ajax");
        //  die(json_encode("test"));
       // die(json_encode(["var" => $AllmembreConnectes]));
    //}

    // die(json_encode(["var" => $AllmembreConnectes]));
    //die(json_encode("test"));

}




