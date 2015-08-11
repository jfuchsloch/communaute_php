<?php if (!isConnected()) : ?>

<?php include "globals/header.php"; ?>

<?php else: ?>

    <?php include "globals/headerbis.php"; ?>

    <?php endif; ?>


<div class="container">



<?php if (!isConnected()) : ?>


    <div class="clearfix">

    <div class="jp2">

        <form class="form-signin" method="POST" action="index.php?page=Accueil">


            <div class="clearfix">
                <div class="debut">
                    <img src="vue/images/bonhomme_2.png"/>
                </div>

                <div class="debut1">
                    <p>Mon compte</p>
                </div>
            </div>


            <h2>Membre</h2>

        <input type="text"  name="inputEmail" id="inputEmail" class="" placeholder="pseudo" autofocus>

       <!-- <label for="inputPassword" class="sr-only" class="form-control">Password</label>-->
        <input type="password"  name ="inputPassword" id="inputPassword" class="" placeholder="mot de passe" >
        
        <div class="checkbox">
          <label>
            <input type="checkbox" value="remember-me"> Me souvenir
          </label>
        </div>
        <button class="btn btn-primary" type="submit">Connectez-vous</button>
      
      </form>

        <?php if ( !empty($_POST) == true ) : ?>

            <?php if ( !empty($erreurs)) : ?>

                <?php foreach ($erreurs  as $key => $value) : ?>

                    <p style="color:red"><?php echo $value; ?></p>

                <?php endforeach; ?>

            <?php endif;  ?>


        <?php endif;  ?>


        <img src="Vue/images/url.gif" />


        </div>

       <div class="jp3">

          <!-- <h3><span class="jp4">EARTH</span><span class="jp5">EYES.fr</span></h3>-->


           <h2 class=""><span class="jp4">EARTH</span><span class="jp5"> EYES.fr</span></h2>

           <h2 class="">Nouveau <br/>membre:</h2>

            <a href="index.php?page=Inscription""><strong>Inscrivez-vous</strong></a>

        </div>

    </div>


    <?php else: ?>


    <div class="clearfix">

        <div class="partie1">

            <div class="menu">
                <p>Info pratique</p>

                <ul>
                    <li><a href="index.php?page=Services">Eyes Services</a></li>
                    <li><a href="">Eyes Loisirs</a></li>
                    <li><a href="">Eyes Culture</a></li>
                    <li><a href="">Eyes Conso</a></li>
                </ul>

            </div>

        </div>

        <div class="partie2">

          

            <img class="debut4" src="Vue/images/SITE.jpeg"/>

            <div id="listeMembreConnectes">

                <p>Membres en ligne</p>

                <ul>
                    <?php if (!empty($membreConnectes) ) : ?>

                        <?php foreach ($membreConnectes  as $key => $value) : ?>
                            <li><?php echo $value["login"]; ?></li>
                        <?php endforeach; ?>

                    <?php endif;  ?>

                </ul>

            </div>

        </div>

    </div>


<?php endif; ?>

</div><!-- /.container -->

<?php if (!empty($AllmembreConnectes) ) : ?>

  <!--  <?php var_dump($AllmembreConnectes); ?> -->

<?php endif;  ?>

<?php  include "globals/footer.php"; ?>

<script src="Vue/js/ListeMembre.js"></script>
