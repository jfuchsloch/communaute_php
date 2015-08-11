<!--<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    
    <title>BOOTSTRAP CHAT EXAMPLE</title>
   
    <link href="assets/css/bootstrap.css" rel="stylesheet" />

</head>-->

<? /*php
setCookie("cadie","toto",time()+3600);*/

?>

  <?php include "globals/header_chat.php"; ?>



<body>


<div id="divChat">
</div>


    

<div class="container">



    <div class="clearfix">            
        <div class="titi">

 <form style="margin-left:0px;margin-top:70px;" class="form-signin" method="POST" action="index.php?page=chat" enctype="multipart/form-data">

       <!--<input type="hidden" name="page" value="chat" >-->
         <div class="form-group">
               <div class="col-sm-8">
                    <input type="text"  name="inputProduit" id="inputProduit" class="" placeholder="nom du produit" autofocus/>
               </div>
            </div>

            <br/><br/>

            <div class="form-group">
               <div class="col-sm-8">
                    <input type="text"  name="inputEmail" id="inputEmail" class="" placeholder="email" autofocus/>
               </div>
            </div>
            <br/><br/>

          <div class="form-group">
               <div class="col-sm-8">
                <textarea name="inputDescProduit" placeholder="description du produit"rows=5

                 COLS=40></textarea>
               </div>
            </div>

        <br/><br/>

          <div class="form-group">
                
                     <div class="col-sm-6">
                       
                      <!-- <div class="clearfix">            
                            <div class="titi"> -->
                                <input style="width:90px;" type="text"  name="inputPrixProduit" id="inputPrixProduit" placeholder="prix"/>  
                            <!--</div> -->

                           <!-- <div class="titi1"> -->
                                <select style="width:60px;margin-left:80px;margin-top:3px;" name="inputDevise">
                                    <option value="dollar_US">Dollar US</option>
                                    <option value="eur" selected>Euro</option>
                                    <option value="dollar_Canadien">Dollar canadien</option>
                                </select>
                           <!-- </div> -->
                        <!--</div> -->

                    <br/>
 
                        <label>Photo du produit (facultatif)</label> 
                        
                        
                        <div class="clearfix">            
                            <div class="titi">
                                <input type="file" name="inputImage" id="getimage"> 
                            </div>
                            <div style="margin-top:40px" class="titi1">
                                <input style="margin-left:270px;width:170px;" class="btn btn-primary" name="valider" type="submit"></input>
                           </div>
                        </div>

                      
                    </div>
                   
                     <div style= "margin-left:10px;" class="col-sm-2"> 

                    <!--<select style="width:60px;margin-top:3px;" name="inputDevise">
                        <option value="dollar_US">Dollar US</option>
                        <option value="eur" selected>Euro</option>
                        <option value="dollar_Canadien">Dollar canadien</option>
                    </select>-->

                    <br/>

                     


                    
                </div> 


          </div>
<br/>
<!--<input type="file" id="getimage"> 

    <div  id="imgstore"></div> -->

<script>

function imageHandler(e2) 
{ 
  var store = document.getElementById('imgstore');
  store.innerHTML='<img src="' + e2.target.result +'">';
}

function loadimage(e1)
{
  var filename = e1.target.files[0]; 
  var fr = new FileReader();
  fr.onload = imageHandler;  
  fr.readAsDataURL(filename); 
}

window.onload=function()
{
  //var x = document.getElementById("filebrowsed");
  //x.addEventListener('change', readfile, false);
  var y = document.getElementById("getimage");
  y.addEventListener('change', loadimage, false);
}

</script>


          <br/><br/>

      </form>


  </div>
    
    <div class="titi1">
                        
    <!-- <img style="margin-left:450px;" src="Vue/images/user.gif"/>-->

       <!-- <?php foreach ($allArticles  as $key => $value) : ?>

          <img class="img-responsive" src="vue/images/<?php echo $value["image"]; ?>" alt=""> 

        <?php  endforeach;  ?> -->


       <div class="clearfix">
          <div class="id_1">

            <div class="he"> 
              Contact par: <a href="Vue/EmailVue.php">Mail</a> <a href="#">Chat</a> <a href="https://www.apprtc.net">Webcam</a>

            </div>
            <label style="margin-top:55px;margin-left:465px;">Eyes Member Choice</label>
            <img  id="jp" style="margin-top:0px;margin-left:430px;width:100%;" src=""/>
           
          <!--<div class="clearfix">
              <div class="id_11">-->
                <label  style="margin-left:460px;">Voir article precedent</label>
                <img id="prec" style="margin-left:470px;width:10%;margin-top:0px;" src="Vue/images/fleche1.jpg"/>
              <!--</div>
              <div class="id_12">--> 
                <label  style="margin-left:460px;">Voir article suivant</label>
                <img id="suiv" style="margin-left:470px;width:10%;margin-top:0px;" src="Vue/images/fleche2.jpg"/>
              <!--</div>
          </div>-->

          </div>

           <div class="id_2"> 

            <div class="clearfix">
              <div class="id_21">
                <div id="nom" style="margin-top:130px;margin-left:450px;">
                </div>
                <div id="prix" style="margin-left:450px;">
                </div>
                <div id="pseudo" style="margin-left:450px;">
                </div>
                 <div id="email" style="margin-left:450px;">
                </div>
                <div id="mess" style="margin-left:450px;">
                </div> 


                <button class="btn btn-primary" id="ajoutpanier" style="margin-bottom:10px;margin-left:450px;">Ajout panier</button> 
               <!-- <a href="panier.php?id='.i.'" class="btn btn-primary" id="ajoutpanier" style="margin-bottom:10px;margin-left:450px;">Ajout panier</a> -->
                
                <button class="btn btn-primary" id="suppressionpanier" style="margin-left:450px;">Suppression panier</button> 
      
                 <button class="btn btn-primary" id="sauvegardepanier" style="margin-left:450px;">Sauvegarde panier</button> 

            </div>
            <div class="id_22">
              <p style="margin-top:60px;margin-left:600px;">Liste produits panier</p>
              <div id="listearticles" style="margin-left:600px;"/>
                 

                         <?php /*echo $_COOKIE['cadie'];*/ ?>

        
            </div>
          </div>
             
          
          </div>
        
        </div>

            <?php $sql="select nom, prix, pseudo_auteurArticle, pseudo from panier_article  limit 10";
                              
                  $requete = $connexion->prepare($sql);

                  $success = $requete->execute();

                  $panierArticles = $requete->fetchAll(PDO::FETCH_ASSOC);
 
          ?>
        
       
        <?php
        
          // on récupère le tableau que l’on veut transférer
          echo '<script>
            
            var timer;
            var i = 0;
            var panier = [];
            var myChaine = "";
            var posPannier = 0;
          
    
            /* format le variable pho en json pour le javascript*/
            var arr = '.json_encode($allArticles).'; 

            var panier = '.json_encode($panierArticles).';
            console.log("jp");
            console.log(panier);

            for (var i=0;i<panier.length;i++){

              var tamp = panier[i].nom  + ";" +panier[i].prix + ";" + panier[i].pseudo_auteurArticle + "<br/>";
              console.log( panier[i]);
               
                myChaine = myChaine + tamp;
            }

            console.log(myChaine);
           // document.querySelector("#listearticlessauvegardés").innerHTML=myChaine;
            document.querySelector("#listearticles").innerHTML=myChaine;
            
            if (arr.length>0){
             // console.log(arr); 
              //console.log(arr.length);
            }

             function descProd(i){
                
                  var chaine ="Vue/images/tmp/"+ arr[i]["image"];

                  var nom = "produit:" + arr[i]["nom"]+"|";
                  var prix = "prix:" + arr[i]["prix"]+ "euros";

                  var test  = nom + prix;
                  var pseudo= "pseudo:" + arr[i]["pseudo"];
                  var email= "email:" + arr[i]["email"];
                  var mess = "Contact:|Mail|Chat|Webcam</p>";

                  document.querySelector("#jp").setAttribute("src",chaine);
                 
                  document.querySelector("#nom").innerHTML=test;
                  document.querySelector("#pseudo").innerHTML=pseudo;
                  document.querySelector("#email").innerHTML=email;
                  document.querySelector("#mess").innerHTML=mess;

             } 

            affichageimage();

            function affichageimage(){
            
              /* Au moins un article present on l affiche*/
              if (arr.length>0)
              {

                if (i<arr.length && i>0 ){
                  descProd(i);
                }
                else
                { 
                  i=0;
                 console.log("onredemarre");       
                  descProd(i);
                }

            }


          }
       
          
           document.querySelector("#suiv").addEventListener("click", function(){
              console.log("click suiv");
              i++;
              affichageimage();
              console.log(i);

          });
    
          document.querySelector("#prec").addEventListener("click", function(){
              console.log("click prec");
              i--;
              console.log(i);
              affichageimage();
          });
    
            // SAUVEGARDE PANNIER
           document.querySelector("#sauvegardepanier").addEventListener("click", function(){

            console.log("sauvegarde panier");

               var xhr = getXMLHttpRequest();
               
            if(xhr && xhr.readyState != 0){
                 xhr.abort();
            }
 
          xhr.onreadystatechange = function(){
              if(xhr.readyState == 4 && (xhr.status == 200 || xhr.status == 0)){
                // tu peux récupérer en JS le résultat du traitement avec xhr.responseText;
              }
              else if(xhr.readyState == 2 || xhr.readyState == 3){ // traitement non fini
             // tu peux mettre un message ou un gif de chargement par exemple
            }
          }
 
         xhr.open("POST", "Vue/panierVue.php", true); // true pour asynchrone
         xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded"); 


         console.log(JSON.stringify(panier));

         xhr.send("var="+JSON.stringify(panier));
        
            
              function getXMLHttpRequest() {
               var xhr = null;
  
                if(window.XMLHttpRequest || window.ActiveXObject) {
                
                 if(window.ActiveXObject) {
                        try {
                                xhr = new ActiveXObject("Msxml2.XMLHTTP");
                        } catch(e) {
                                xhr = new ActiveXObject("Microsoft.XMLHTTP");
                        }
                  } else {
                        xhr = new XMLHttpRequest();
                }
              } else {
                alert("Votre navigateur ne supporte pas l objet XMLHTTPRequest...");
                return null;
            }
  
                 return xhr;
              } 

              //JSON.parse(panier);
              //console.log(JSON.parse(panier));
              //console.log(article);
              //panier = [];
              article = "";
              articlebis="";

              //document.querySelector("#listearticles").innerHTML="";

              alert("votre pannier a été sauvegardé ! ");



         
          });

          // SUPPRESSION PANIER
          document.querySelector("#suppressionpanier").addEventListener("click", function(){
              
              console.log("suppression panier");
              
              var articlebis = "";


              console.log(posPannier);
              panier.splice(posPannier,1);
              
              console.log(panier);


               for (var k=0;k<panier.length;k++)
              {
                test1 = panier[k].nom  + panier[k].prix + panier[k].pseudo;
                articlebis = articlebis  + test1 + "<br/>";

              }


              document.querySelector("#listearticles").innerHTML=articlebis;

                posPannier -= 1;  

            });


          // AJOUT PANNIER          
          document.querySelector("#ajoutpanier").addEventListener("click", function(){
            
              console.log("ajout panier");
              
              var tab = [];
              var article = "";
            
          
              function panier_1(un_nom,un_prix,un_pseudo) {
                this.nom=un_nom;
                this.prix=un_prix;
                this.pseudo=un_pseudo;
              }

              //console.log(arr);
              //console.log(i);

              var article_panier  = new panier_1(arr[i]["nom"],arr[i]["prix"],arr[i]["pseudo"]);
               panier.push(article_panier);

              console.log(panier);
              //console.log(panier.length);

              //Affichage dans la liste "listePanier" les articles choisis
              var nom = "produit: " + arr[i]["nom"]+"|";
              var prix = "prix:" + arr[i]["prix"]+ "euros"+"|";
              var pseudo= "pseudo:" + arr[i]["pseudo"];

              for (var k=0;k<panier.length;k++)
              {
                test = panier[k].nom  + panier[k].prix + panier[k].pseudo;
                article = article  + test + "<br/>";

              }

            
              //console.log(panier);
          
              document.querySelector("#listearticles").innerHTML=article;

              posPannier =panier.length -1;
              console.log(posPannier);

          });

        </script>'; 
        
        ?>

    </div>

</div>
 


      <form style="margin-top:500px;margin-left:800px;margin-botton:30px;height:72px;" class="form-signin" method="GET" action="index.php?s">

           <label>Vos commentaires sur le forum</label>
           <input type="hidden" name="page" value="chat">
        <textarea name="inputContenu" placeholder="taper votre message"rows=5 cols=40></textarea>  
        <input type="text"  name ="inputAuteur"  placeholder="taper votre pseudo"></input>

     <button style="margin-top:20px;" name="valider" class="btn btn-primary" type="submit">Ajout message au forum</button>
      </form>




    <div class="row" style="margin-top:80px;">
        <h3 style="margin-top:100px;">FORUM DE DISCUSSION</h3>
        <br/><br/>
   
        <div class="col-md-8" style="margin-left:180px;width:480px;">
        
            <div class="panel panel-info">
            
                <div class="panel-heading">
                    HISTORIQUE FORUM (messages les plus récents)
                </div>
            
                
                <div class="panel-body">

                    <ul id="ChatMessages">


                   <!-- <ul id="ChatMessages"  class="media-list"> -->

                        <?php foreach ($allMessages  as $key => $value) :  ?>                         
                                  <!-- <li class="media"> -->

                                        <!--<div class="media-body"> -->

                                           <!-- <div class="media"> -->
                                                
                                                <!--<a class="pull-left" href="#">
                                                    <img class="media-object img-circle " src="" />
                                                </a>-->

                                               <!-- <div class="media-body" > -->
                                                <?php echo $value["contenu"];?> 
                                                    <br/>
                                                   <small class="text-muted"> <?php echo $value["auteur"];?> |  <?php echo $value["date_message"];?></small>

                                                   <br/><br/>
                                                
                                               <!-- </div> -->

                                             
                                          <!--  </div> -->

                                        <!--</div> -->

                                    <!--</li> -->
                                    
                                    
                                 <!--</ul> -->
     
                        <?php endforeach; ?>

                   <!--<div class="panel-footer">

                        <div class="input-group">
                                    <input type="text" class="form-control" placeholder="Enter Message" />
                                    <span class="input-group-btn">
                                        <button class="btn btn-info" type="button">SEND</button>
                                    </span>
                        </div>

                    </div>  --><!-- fin div panel-footer-->
    
        </div>
    
    </div>

   </div> <!-- fin div col md 8-->
    


    <div class="col-md-4">

          <div class="panel panel-primary">
                
                <div class="panel-heading">
                    ONLINE USERS MESSAGE
                </div>
        
              <!--  <div class="panel-body"> -->
        
                  <!--  <ul class="media-list"> -->

                                   <!-- <li class="media"> -->

                                       <!-- <div class="media-body"> -->

                                          <!--  <div class="media"> -->
                                               <!-- <a class="pull-left" href="#">
                                                    <img class="media-object img-circle" style="max-height:40px;" src="" />
                                                </a>-->
                                                  <?php foreach ($allMessages  as $key => $value) :  ?>
                                                <div class="media-body" >

                                                <h5><?php echo $value["auteur"];?> | User | Me contacter </h5>
                                                    
                                                <br/>
                                                   
                                               <!-- </div> -->
                                                 <?php endforeach; ?>
                                           <!-- </div> -->

                                       <!-- </div> -->
                                   <!-- </li> -->
                                    
                                   
                  <!--  </ul> -->
        
               <!-- </div> -->
        
            </div>
        
        </div> <!-- fin col-md-4-->
    


    </div> <!-- fin div row -->

  </div> <!-- fin div container -->

<script src="Vue/js/jquery.min.js"></script>

 <script src="Vue/js/chat.js"></script>

</body>

 </html>
