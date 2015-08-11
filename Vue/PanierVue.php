<?php

include "../Config/config.php";

extract($_POST);

var_dump ($_POST);

if (isConnected()) {
     $pseudo =  $_SESSION["utilisateur"]["login"];
     var_dump($pseudo);
}


$tab = json_decode($_POST["var"]);
var_dump($tab);

/*var_dump($test);
var_dump(count($test));
var_dump($test[0]);
var_dump($test[1]);*/

foreach ($tab as $key => $value) {
	var_dump($value);
	

	 $sql = "INSERT INTO panier_article(nom,prix,pseudo_auteurArticle,pseudo)
                        VALUES (:id_nom,:id_prix,:id_pseudo_auteurArticle,:pseudo)";
            
                        $requete = $connexion->prepare($sql);

                        $requete->bindValue(":id_nom",$value->nom,PDO::PARAM_STR);
                        $requete->bindValue(":id_prix",$value->prix,PDO::PARAM_INT);
                        $requete->bindValue(":id_pseudo_auteurArticle",$value->pseudo,PDO::PARAM_STR);        
                        $requete->bindValue(":pseudo",$pseudo,PDO::PARAM_STR);
                     
                        $successAddArticlePanier = $requete->execute();

}

// the message
//$to = "jfuchsloch@gmail.com";
 
// Subject
//$subject = "panier:vue Nouveau test mail php"; 
// Message
//$msg = "panier vue: nouveau  test de mail";
 
// Function mail()
//$bool = mail($to, $subject, $msg); 
//var_dump($bool);

$sujet = 'Sujet de l email';
$message = "Bonjour,
Ceci est un message texte envoyé grâce à  php.
merci :)";
$destinataire = 'jpfuchs@hotmail.com';
$headers = "From: \"expediteur moi\"<jfuchsloch@gmail.com>\n";
$headers .= "Reply-To: jpfuchs@hotmail.com\n";
$headers .= "Content-Type: text/plain; charset=\"iso-8859-1\"";
if(mail($destinataire,$sujet,$message,$headers))
{
        echo "L'email a bien été envoyé.";
}
else
{
        echo "Une erreur c'est produite lors de l'envois de l'email.";
}

/*$sql="select nom,prix,pseudo_auteurArticle,pseudo from pannier_article  limit 10";
                $requete = $connexion->prepare($sql);

                $success = $requete->execute();

                $allpanierArticles = $requete->fetchAll(PDO::FETCH_ASSOC);
 
 var_dump(expression);*/

//var_dump($_POST["var"][0]);
//var_dump($_POST["var"][1]);

//$ficname = explode( ',', $_POST["var"] )[3]."_fichier.txt";

//$contenu =  explode( ',', $_POST["var"] )[0].";". explode( ',', $_POST["var"] )[1].";". explode( ',', $_POST["var"] )[2].";".explode( ',', $_POST["var"] )[4];


//$monfichier = fopen($ficname,"a"); //ouverture du fichier en écriture
//fputs($monfichier, $contenu); // tu claques ta variable dans ton fichier
//fclose($monfichier); // tu fermes le fichier


/*$tab1 = [];
$file = fopen($ficname,"r");

if ($file){

		while ( !feof($file)){

			$buffer =fgets($file);
			var_dump($buffer);
			array_push($tab1,$buffer);
		}
}

fclose($file);
var_dump($tab1);*/
