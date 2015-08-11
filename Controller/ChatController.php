<?php

  //phpinfo();     

// Recuperation des messages en base pour affichage dans la vue
       

  if(!empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest') {

               // die("je suis la ajax post");
                $sql="select id_auteur, auteur, contenu, date_message from message order by date_message desc limit 10";
                $requete = $connexion->prepare($sql);

                $success = $requete->execute();

                // Recuperation des resultats dans une variable
                $allMessages = $requete->fetchAll(PDO::FETCH_ASSOC);
                //var_dump($allMessages);
                $tab2="";
                  foreach ($allMessages as $key => $value) {
                    $tab2 = $tab2 . "<li>" . $value['contenu'] ."<br/>". $value['auteur']."|".$value['date_message']."<br/>"."<br/>"."</li>";
                }

                $sql="select nom,description,prix,pseudo,image from article  limit 10";
                $requete = $connexion->prepare($sql);

                $success = $requete->execute();

                $allArticles = $requete->fetchAll(PDO::FETCH_ASSOC);

  

              die(json_encode(["var" => $tab2]));
                
                }




/*var_dump($_GET);

var_dump($_POST);*/

// Test si on passe bien par l'appel en GET du formulaire
if ( (!empty($_GET) == true)  && (array_key_exists("inputAuteur", $_GET) == true) )
{   
    $erreurs = array();


    if (array_key_exists("inputAuteur", $_GET) == true)
    {
        // on peut mettre aussi comme test:  if (empty($_POST["nom"] )
        if (trim($_GET["inputAuteur"]) == '')
        {
            $messageErreur = "Vous devez saisir un auteur! ";
            array_push($erreurs, $messageErreur);  // on peut mettre aussi: $erreurs["nom"]= "blabla"
        }
    }

    if (array_key_exists("inputContenu", $_GET) == true)
    {

        if (trim($_GET["inputContenu"]) == '' )
        {
            $messageErreur = "Vous devez saisir un contenu! ";
            array_push($erreurs, $messageErreur);
        }

    }

    // Tableau erreur non vide
    if (!empty ($erreurs))
    {
        var_dump($erreurs);
    }
    else if (array_key_exists("inputAuteur", $_GET) == true)
    {
    	
      $sql = "INSERT INTO message (auteur, contenu,date_message)
                VALUES(:idauteur,:idcontenu,:date_ajout)";
        
        $requete = $connexion->prepare($sql);

        $requete->bindvalue(":idauteur", $_GET["inputAuteur"], PDO::PARAM_STR);
        $requete->bindvalue(":idcontenu", $_GET["inputContenu"], PDO::PARAM_STR);
        $requete->bindvalue(":date_ajout",date ("Y-m-d H:i:s"),PDO::PARAM_STR);
		
      
        $success = $requete->execute();


        if ($success)
        {
            //die("insertion message ok");

        }
        else
        {
            //die("insertion message ko");

            $messageErreur = "insertion message ko! ";
            array_push($erreurs, $messageErreur);

            var_dump($erreurs);
        }

       
    }

}
else // Appele par un POST
{
        //Test si Requete AJAX type post
                // Test si formulaire appele en type POST
         if ( !empty($_POST['valider']) == true )
        {        //die("je suis en post");

                $erreurs = array();

                if (array_key_exists("inputProduit", $_POST) == true)
                {
                        // on peut mettre aussi comme test:  if (empty($_POST["nom"] )
                    if (trim($_POST["inputProduit"]) == '')
                    {
                        $messageErreur = "Vous devez saisir un produit! ";
                        array_push($erreurs, $messageErreur);  // on peut mettre aussi: $erreurs["nom"]= "blabla"
                    }
                }

                if (array_key_exists("inputEmail", $_POST) == true)
                {
                        // on peut mettre aussi comme test:  if (empty($_POST["nom"] )
                    if (trim($_POST["inputEmail"]) == '')
                    {
                        $messageErreur = "Vous devez saisir un email! ";
                        array_push($erreurs, $messageErreur);  // on peut mettre aussi: $erreurs["nom"]= "blabla"
                    }
                }

                  if (array_key_exists("inputDescProduit", $_POST) == true)
                {
                        // on peut mettre aussi comme test:  if (empty($_POST["nom"] )
                    if (trim($_POST["inputDescProduit"]) == '')
                    {
                        $messageErreur = "Vous devez saisir une description du produit! ";
                        array_push($erreurs, $messageErreur);  // on peut mettre aussi: $erreurs["nom"]= "blabla"
                    }
                }

                 if (array_key_exists("inputPrixProduit", $_POST) == true)
                {
                        // on peut mettre aussi comme test:  if (empty($_POST["nom"] )
                    if (trim($_POST["inputPrixProduit"]) == '')
                    {
                        $messageErreur = "Vous devez saisir un prix du produit! ";
                        array_push($erreurs, $messageErreur);  // on peut mettre aussi: $erreurs["nom"]= "blabla"
                    }
                }

                //var_dump($_FILES);
                if ( empty($_FILES["inputImage"]) || ($_FILES["inputImage"]["error"] != 0) )
                {
                    $erreurs['inputImage'] = "Saisir une image";
                }
                else
                { 
                    $extensionsValides = ["jpeg","jpg","png"];
                    $extensionImage = str_replace("image/", "", $_FILES["inputImage"]["type"]);
         
                    if (!in_array($extensionImage,  $extensionsValides))
                     {
                        $erreurs['inputImage'] = "Saisir uniquement des formats d'image jpeg, png, gif";
                     }
                     else
                     {
                        $nameImage = uniqid().".".$extensionImage;
                     }

                }   

                if (empty($erreurs))
                {
                    //$successMove = move_uploaded_file($_FILES["inputImage"]["tmp_name"], "vue/images/".$_FILES["inputImage"]["name"]);
                    
                    $successMove = move_uploaded_file($_FILES["inputImage"]["tmp_name"], "vue/images/tmp/".$nameImage);
                    if ($successMove)
                    {   

                        
                        $sql = "INSERT INTO article(nom,description,prix,pseudo, email, image)
                        VALUES (:id_nom,:id_description,:id_prix,:id_pseudo,:email,:image)";
            
                        $requete = $connexion->prepare($sql);

                        $requete->bindValue(":id_nom",($_POST["inputProduit"]),PDO::PARAM_STR);
                        $requete->bindValue(":id_description",($_POST["inputDescProduit"]),PDO::PARAM_STR);
                        $requete->bindValue(":id_prix",($_POST["inputPrixProduit"]),PDO::PARAM_STR);        
                        $requete->bindValue(":image",$nameImage,PDO::PARAM_STR);
                        $requete->bindValue(":id_pseudo", $_SESSION["utilisateur"]["login"],PDO::PARAM_STR);
                        $requete->bindValue(":email", $_POST["inputEmail"],PDO::PARAM_STR);
                        $successAddArticle = $requete->execute();
                    }
                    else
                    {   
                        $erreurs['inputImage'] = "Probleme d'upload d'image";
                
                    }
               }
               else //erreurs
               {
                        var_dump($erreurs);
                }
        

        }// Fin POST

   
}

$sql="select id_auteur, auteur, contenu, date_message from message order by date_message desc limit 10";
$requete = $connexion->prepare($sql);

$success = $requete->execute();

// Recuperation des resultats dans une variable
$allMessages = $requete->fetchAll(PDO::FETCH_ASSOC);


 $sql="select nom,description,prix,pseudo,email, image from article  limit 10";
                $requete = $connexion->prepare($sql);

                $success = $requete->execute();

                $allArticles = $requete->fetchAll(PDO::FETCH_ASSOC);
 



/*$sql="select nom,description,prix,pseudo_auteur,image from article  limit 10";
$requete = $connexion->prepare($sql);

$success = $requete->execute();

// Recuperation des resultats dans une variable
$allArticles = $requete->fetchAll(PDO::FETCH_ASSOC);*/
//var_dump($allArticles);
//json_encode(["myvar" => $allArticles]);

//








