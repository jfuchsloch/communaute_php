<?php

include "Config/config.php";

$currentPage="Accueil";

//var_dump($_GET);
//var_dump($currentPage);

if (array_key_exists("page", $_GET))
{
	$currentPage = $_GET["page"];	
}

if ("logout" == $currentPage )
{
    $sql ="UPDATE utilisateurs SET connected = 0 WHERE login = :identifiant and password = :idpassword";
    $requete = $connexion->prepare($sql);

    $requete->bindvalue(":identifiant",  $_SESSION["utilisateur"]["login"], PDO::PARAM_STR);
    $requete->bindvalue(":idpassword",  $_SESSION["utilisateur"]["password"] , PDO::PARAM_STR);

    $success = $requete->execute();


	session_destroy();
    // mettre a jour le champ connected a 0 en base !!!
	header("Location:index.php");
	die();
}

include "Controller/".$currentPage."Controller_english.php";


include "Vue/".$currentPage."Vue_english.php";