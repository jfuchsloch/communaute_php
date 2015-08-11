<?php

//include "../Config/config.php";

//var_dump($_POST);

if ( !empty($_POST) == true )   
{
		$erreurs = array();
			

		if (array_key_exists("inputEmail", $_POST) == true)
		{	
			// on peut mettre aussi comme test:  if (empty($_POST["nom"] )
			if (trim($_POST["inputEmail"]) == '')
			{	
				$messageErreur = "You must enter a login! ";
				array_push($erreurs, $messageErreur);  // on peut mettre aussi: $erreurs["nom"]= "blabla"
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



 		//var_dump($erreurs);

		// Tableau erreur non vide
		if (!empty ($erreurs))
		{
			//var_dump($erreurs);

        }
		else
		{
			//die("vous etes connecté");
		
			$sql = "SELECT * FROM utilisateurs WHERE login = :identifiant and password = :idpassword";
			$requete = $connexion->prepare($sql);

			$requete->bindvalue(":identifiant", $_POST["inputEmail"], PDO::PARAM_STR);
			$requete->bindvalue(":idpassword", sha1($_POST["inputPassword"]) , PDO::PARAM_STR);

            //var_dump($sql);
            $success = $requete->execute();

            //var_dump($_POST["inputEmail"]);
            //var_dump($_POST["inputPassword"]);
            //var_dump(sha1($_POST["inputPassword"]));
	
			// Recuperation des resultats dans une variable
			$utilisateur = $requete->fetch(PDO::FETCH_ASSOC);

			if (!empty ($utilisateur))
			{
				//die("connexion");

				$_SESSION["utilisateur"]["login"] = $_POST["inputEmail"];
				$_SESSION["utilisateur"]["password"] = sha1($_POST["inputPassword"]);
                // Mettre à jour le champ connected à 1 en base !!!
                $sql ="UPDATE utilisateurs SET connected = 1 WHERE login = :identifiant and password = :idpassword";
                $requete = $connexion->prepare($sql);

                $requete->bindvalue(":identifiant", $_POST["inputEmail"], PDO::PARAM_STR);
                $requete->bindvalue(":idpassword", sha1($_POST["inputPassword"]) , PDO::PARAM_STR);

                $success = $requete->execute();


                //header('Location: ../index.php?page=Login');

               // header('Location: ../Vue/globals/header.php');
				//die("ok");

                //Recuperation de la liste des membres connectes
                $sql = "SELECT * FROM utilisateurs WHERE connected=1";
                $requete = $connexion->prepare($sql);

                $success = $requete->execute();

                // Recuperation des resultats dans une variable
                $membreConnectes = $requete->fetchAll(PDO::FETCH_ASSOC);

                //var_dump($membreConnectes);
                $sql = "SELECT count(*) as nb FROM utilisateurs WHERE connected=1";
                $requete = $connexion->prepare($sql);

                $success = $requete->execute();

                // Recuperation des resultats dans une variable
                $nbPersConnectes = $requete->fetch(PDO::FETCH_ASSOC);
                //var_dump($nbPersConnectes);

                $tab3=array();
                array_push($tab3, $nbPersConnectes);



                // $tab3bis = "<p>".$tab3."<span class='cust' >connectes</span> </p>";
                $tab3bis="";
                foreach ($tab3[0] as $key=>$value)
                {
                    $tab3bis = $tab3bis.$value;
                }
                $tab3bis = "<p>".$tab3bis."<span class='cust' >connectes</span> </p>";

               // die("ajax avant");

                // Requete AJEX recue en POST
                if(!empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest') {

                   // die("je suis la ajax post");

                    //  die(json_encode("test"));
                    die(json_encode(["var" => $tab3bis]));
                }


             // die("apres ajax");


            }
			else
			{	
				//echo "test";
                $messageErreur="Erreur de connexion! :pseudo or password not correct";

                array_push($erreurs, $messageErreur);
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

    //il faut formater dans la meme variable le tout !!!!!
   // faire membre en ligne et nb connectes et la liste des connectes

    $tab2 = "<p>Members on line</p><ul>";
    foreach ($AllmembreConnectes as $key => $value) {
        $tab2 = $tab2 . "<li>" . $value['login'] . "</li>";
    }
    $tab2 = $tab2 . "</ul>";

    //var_dump($tab2);
    $sql = "SELECT count(*) as nb FROM utilisateurs WHERE connected=1";
    $requete = $connexion->prepare($sql);

    $success = $requete->execute();

    // Recuperation des resultats dans une variable
    $nbPersConnectes = $requete->fetch(PDO::FETCH_ASSOC);
    //var_dump($nbPersConnectes);

    $tab3 = array();
    array_push($tab3, $nbPersConnectes);


    // $tab3bis = "<p>".$tab3."<span class='cust' >connectes</span> </p>";
    $tab3bis = "";
    foreach ($tab3[0] as $key => $value) {
        $tab3bis = $tab3bis . $value;
    }
    $tab3bis = "<p>" . $tab3bis . "<span class='cust' > connected</span> </p>";

    $tab2 = $tab3bis.$tab2;

    // die("ok");
    //var_dump($_POST);
    // Requet AJAX en recue GET
    if (!empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest'
        and (empty($_POST))
    ) {

        //die("ajax get");

        //  die(json_encode("test"));
        die(json_encode(["var" => $tab2]));
    }


   /* if (!empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest'
        and (empty($_POST))
    ) {

        die(json_encode(["var" => $tab3bis]));
    }*/

}

    // die(json_encode(["var" => $AllmembreConnectes]));
    //die(json_encode("test"))