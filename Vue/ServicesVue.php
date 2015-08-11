


    <?php include "globals/header_services.php"; ?>



    <div class="container">


<?php if (empty($utilisateur)) : ?>

    <div class="services">

        <form class="form-signin" method="POST" action="index.php?page=Services">


            </br> </br>

            <label class="col-sm-1"  for="InputAge">Age </label>

            <div class="col-sm-8">

                <select name="inputAge">
                    <option value="0-18ans">0-18ans</option>
                    <option value="18-98ans" selected>18-98ans</option>
                </select>

            </div>

            </br> </br>


            <label class="col-sm-1"  for="InputPays">Pays </label>

            <div class="col-sm-8">

                <select name="inputPays">
                    <option value="espagne">Espagne</option>
                    <option value="france" selected>France</option>
                    <option value="portugal">Portugal</option>
                    <option value="italie">Italie</option>
                </select>

            </div>

            </br> </br>
            <div class="form-group">
                <label class="col-sm-1" for="inputRegion">Region</label>
                <div class="col-sm-8">
                    <input type="text"  name="inputRegion" id="inputRegion" class="" placeholder="" autofocus/>
                </div>
            </div>

            </br> </br>
            <div class="form-group">
                <label class="col-sm-1" for="inputVille">Ville</label>
                <div class="col-sm-8">
                    <input type="text"  name="inputVille" id="inputVille" class="" placeholder="" autofocus/>
                </div>
            </div>

            </br> </br>


            <?php if ( !empty($_POST) == true ) : ?>

                <?php if ( !empty($erreurs)) : ?>

                    <?php foreach ($erreurs  as $key => $value) : ?>

                        <p style="color:red"><?php echo $value; ?></p>

                    <?php endforeach; ?>

                <?php endif;  ?>


            <?php endif;  ?>


            <button class="btn btn-primary" type="submit">Rechercher</button>

        </form>


    <br/><br/>

         <a href="Vue/indexbis5.html">test pour gmail offre service</a>
<br/><br/>

        <a href="Vue/indexbis.php">Test de geocalisation </a>
        <br/><br/>

         <a href="Vue/indexbis2.php">Test de webcam </a>

          <br/><br/>

         <a href="Vue/indexbis3.php">Ma geocalisation</a>


    </div>

<?php else: ?>

    <div class="clearfix">

        <div class="partie1">
            
      <a href="index.php?page=Chat">Rejoindre le forum pour echanger ou vendre un produit avec les membres en ligne</a>

    </div> 


        <div class="partie2">

            <img class="debut4" src="Vue/images/SITE.jpeg"/>

            <div id="listeMembreConnectes">

                <p>Membres en ligne</p>

                <ul>
                    <?php if (!empty($utilisateur) ) : ?>

                        <?php foreach ($utilisateur as $key => $value) : ?>
                            <li><?php echo $value["login"]; ?></li>
                        <?php endforeach; ?>

                    <?php endif;  ?>

                </ul>

            </div>

       </div> 


            <?php endif;  ?>

    </div><!-- /.container -->

<?php  include "globals/footer.php"; ?>
