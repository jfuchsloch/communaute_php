<?php include "globals/header_inscription_english.php"; ?>



    <div class="container">


<?php if (!isConnected()) : ?>

        <form class="form-signin" method="POST" action="indexenglish.php?page=Inscription">

           <!-- <h2 class="">Inscription</h2>-->

            <fieldset>inscription</fieldset>

            </br> </br>

           <div class="form-group">
            <label class="col-sm-1" for="inputEmail">email:</label>
               <div class="col-sm-8">
                    <input type="text"  name="inputEmail" id="inputEmail" class="" placeholder="" autofocus/>
               </div>
            </div>

            </br> </br>

            <div class="form-group">
                <label class="col-sm-1" for="inputRegion">area:</label>
                <div class="col-sm-8">
                    <input type="text"  name="inputRegion" id="inputRegion" class="" placeholder="" autofocus/>
                </div>
            </div>

            </br> </br>
            <div class="form-group">
                <label class="col-sm-1" for="inputVille">city:</label>
                <div class="col-sm-8">
                    <input type="text"  name="inputVille" id="inputVille" class="" placeholder="" autofocus/>
                </div>
            </div>

            </br> </br>
            <div class="form-group">
                <label class="col-sm-1" for="inputCodePostal">postal code:</label>
                <div class="col-sm-8">
                    <input type="text"  name="inputCodePostal" id="inputCodePostal" class="" placeholder="" autofocus/>
                </div>
            </div>

            </br> </br>
            <div class="form-group">
                <label class="col-sm-1" for="inputLogin">user:</label>
                <div class="col-sm-8">
                    <input type="text"  name="inputLogin" id="inputLogin" class="" placeholder="" autofocus/>
                </div>
            </div>


            </br> </br>
            <div class="form-group">
                <label class="col-sm-1" for="inputPassword">password:</label>
                <div class="col-sm-8">
                    <input type="text"  name="inputPassword" id="inputPassword" class="" placeholder="" autofocus/>
                </div>
            </div>

            </br> </br>

            <label class="col-sm-1"  for="InputPays">country: </label>

            <div class="col-sm-8">

                <select name="inputPays">
                    <option value="espagne">Spain</option>
                    <option value="france" selected>France</option>
                    <option value="portugal">Portugal</option>
                    <option value="italie">Italy</option>
                </select>

            </div>

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


            <button class="btn btn-primary" type="submit">Subscribe</button>

        </form>


    <?php else: ?>

    <div id="listeMembreConnectes">
        <img src="Vue/images/SITE.jpeg"/>
        <p>Membre en ligne</p>
        <ul>
            <?php if (!empty($membreConnectes) ) : ?>

                <?php foreach ($membreConnectes  as $key => $value) : ?>
                    <li><?php echo $value["login"]; ?></li>
                <?php endforeach; ?>

            <?php endif;  ?>

        </ul>
    </div>

<?php endif; ?>



    </div><!-- /.container -->

<?php  include "globals/footer.php"; ?>