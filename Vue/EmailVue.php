<?php

//var_dump($_POST);

$destinataire  = "";
$sujet = "";
$message  = "";


if (isset($_POST["inputDestinataire"])){

  $destinataire = $_POST["inputDestinataire"];

}

if (isset($_POST["inputMessage"])){

  $message = $_POST["inputMessage"];
  
}

if (isset($_POST["inputSujet"])){

  $sujet = $_POST["inputSujet"];
  
}

$headers = "From: \"expediteur moi\"<jfuchsloch@gmail.com>\n";
$headers .= "Reply-To: jpfuchs@hotmail.com\n";
$headers .= "Content-Type: text/plain; charset=\"iso-8859-1\"";

if ($sujet != "" && $destinataire != "" && $message != ""){

    if(mail($destinataire,$sujet,$message,$headers))
    {
        echo "L'email a bien été envoye.";
    }
    else
    {
        echo "Une erreur c'est produite lors de l'envois de l'email.";
    }

}

?>

<form  method="POST" action="">

    <label>Votre message:</label>
      <br/>

      <input type="text"  name="inputDestinataire"  placeholder="destinataire" autofocus/>
      <br/>

      <input type="text"  name="inputSujet"  placeholder="object mail" autofocus/>
      <br/>
      <textarea name="inputMessage" placeholder="message"rows=5 COLS=40></textarea>     
      <br/>
      <button class="btn btn-primary" name="Envoyer" type="submit">Envoyer</button>
                        

</form>



