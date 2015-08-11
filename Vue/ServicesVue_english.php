


    <?php include "globals/header_services_english.php"; ?>



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
                    <option value="espagne">Spain</option>
                    <option value="france" selected>France</option>
                    <option value="portugal">Portugal</option>
                    <option value="italie">Italy</option>
                </select>

            </div>

            </br> </br>
            <div class="form-group">
                <label class="col-sm-1" for="inputRegion">Area</label>
                <div class="col-sm-8">
                    <input type="text"  name="inputRegion" id="inputRegion" class="" placeholder="" autofocus/>
                </div>
            </div>

            </br> </br>
            <div class="form-group">
                <label class="col-sm-1" for="inputVille">City</label>
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


            <button class="btn btn-primary" type="submit">Search</button>

        </form>


    </div>

<?php else: ?>

        <div class="partie1">

            </div>

        <div class="partie2">

            <img class="debut4" src="Vue/images/SITE.jpeg"/>

            <div id="listeMembreConnectes">

                <p>Members on line</p>

                <ul>
                    <?php if (!empty($utilisateur) ) : ?>

                        <?php foreach ($utilisateur as $key => $value) : ?>
                            <li><?php echo $value["login"]; ?></li>
                        <?php endforeach; ?>

                    <?php endif;  ?>

                </ul>

            </div>


            <?php endif;  ?>

    </div><!-- /.container -->

<?php  include "globals/footer.php"; ?>