<?php if (!isConnected()) : ?>

<?php include "globals/header_inscription.php"; ?>

<?php else: ?>

    <?php include "globals/headerbis.php"; ?>

    <?php endif; ?>






    <div class="container">


<?php if (!isConnected()) : ?>

        <form class="form-signin" method="POST" action="index.php?page=Inscription">

           <!-- <h2 class="">Inscription</h2>-->

            <fieldset>inscription</fieldset>

            </br> </br>


            <label class="col-sm-1">age</label>

            <div class="col-sm-8">
                <select name="inputAge">
                    <option value="0-18ans">0-18ans</option>
                    <option value="18-98ans" selected>18_98ans</option>
                </select>
            </div>

             </br> </br>
         
               <label class="col-sm-1"  for="InputPays">pays: </label>

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
                <label class="col-sm-1" for="inputRegion">region:</label>
                <div class="col-sm-8">
                    <input type="text"  name="inputRegion" id="inputRegion" class="" placeholder="" autofocus/>
                </div>
            </div>

            </br> </br>
            <div class="form-group">
                <label class="col-sm-1" for="inputVille">ville:</label>
                <div class="col-sm-8">
                    <input type="text"  name="inputVille" id="inputVille" class="" placeholder="" autofocus/>
                </div>
            </div>

            </br> </br>
            <div class="form-group">
            <label class="col-sm-1" for="inputEmail">email:</label>
               <div class="col-sm-8">
                    <input type="text"  name="inputEmail" id="inputEmail" class="" placeholder="" autofocus/>
               </div>
            </div>

            </br> </br>

            <div class="form-group">
                <label class="col-sm-1" for="inputCodePostal">code postal:</label>
                <div class="col-sm-8">
                    <input type="text"  name="inputCodePostal" id="inputCodePostal" class="" placeholder="" autofocus/>
                </div>
            </div>

            </br> </br>
            <div class="form-group">
                <label class="col-sm-1" for="inputLogin">pseudo:</label>
                <div class="col-sm-8">
                    <input type="text"  name="inputLogin" id="inputLogin" class="" placeholder="" autofocus/>
                </div>
            </div>


            </br> </br>
            <div class="form-group">
                <label class="col-sm-1" for="inputPassword">mot de passe:</label>
                <div class="col-sm-8">
                    <input type="text"  name="inputPassword" id="inputPassword" class="" placeholder="" autofocus/>
                </div>
            </div>

            </br> </br>


            <!-- <label for="inputPassword" class="sr-only" class="form-control">Password</label>-->
          <!--  <input type="password"  name ="inputPassword" id="inputPassword" class="" placeholder="Mot de passe" >-->
            </br/></br>
            </br></br>

            <?php if ( !empty($_POST) == true ) : ?>

                <?php if ( !empty($erreurs)) : ?>

                    <?php foreach ($erreurs  as $key => $value) : ?>

                        <p style="color:red"><?php echo $value; ?></p>

                    <?php endforeach; ?>

                <?php endif;  ?>


            <?php endif;  ?>


            <button class="btn btn-primary" type="submit">Valider</button>

        </form>


    <?php else: ?>

   <!-- <div id="listeMembreConnectes">
        <img src="Vue/images/SITE.jpeg"/>
        <p>Membre en ligne</p>
        <ul>
            <?php if (!empty($membreConnectes) ) : ?>

                <?php foreach ($membreConnectes  as $key => $value) : ?>
                    <li><?php echo $value["login"]; ?></li>
                <?php endforeach; ?>

            <?php endif;  ?>

        </ul>
    </div>-->

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

<?php  include "globals/footer.php"; ?>