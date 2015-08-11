<!DOCTYPE html>
<html lang="en">
	<head>
		<meta http-equiv="content-type" content="text/html; charset=UTF-8">
		<meta charset="utf-8">
		<title>EarthEyes</title>
		<meta name="generator" content="Bootply" />
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		<link href="Vue/css/bootstrap.min.css" rel="stylesheet">
    <style type="text/css">
      h2{
        margin-top: 60px;
       /* color:#ffffff;*/
      }

      p{
         /* color:#ffffff;*/
          font-weight: bold;
      }
      input{
        display: block;
      }

      button.btn.btn-primary{
        margin-bottom: 150px;
        width: 170px;
      }


      .jp{
        text-align: center;
      }

      fieldset{
          font_weight:bold;
          font-size:20px;
          margin-left:15px;
          text-decoration: underline;
      }

        .collapse {
            background-image: url('Vue/images/oeil-generique-2-1.jpg');
            background-repeat: no-repeat;
            background-size: 20%;
            background-position-x: right;
            background-position-y: center;

        }

        strong {
            font-size:20px;
            font-weight: bold;
            /*color: #ffffff;*/
            text-decoration: underline;
        }

        body{
            background-image: url('Vue/images/url.gif');
            background-repeat: no-repeat;
            background-size: 20%;
            background-position-x: center;
            background-position-y: center;
            background-color: #E8E3DC;

        }

      .debut4 {
          margin-top: 0px;
          margin-left:1030px;
          width:5%;
          margin-bottom: 0px;

      }

        #listeMembreConnectes{
           margin-top: 0px;
            margin-left:1000px;
        }

      #listeMembreConnectes ul li{
          /*display: inline-block;*/
          margin-left: 10px;
          color:blue;
          background-image: url('Vue/images/homme_1.jpg');
          background-size:40%;
          background-repeat: no-repeat;
          background-position-x: left;
          background-position-y: left;
          padding-left:30px;
          margin-right:10px;
          display:block;
      }

      #listeMembreConnectes p{
          color:blueviolet;
          margin-left:20px;
      }
      .partie1{
          float: left;
          width:40%;
      }

      .partie2{
          float: left;
          width:60%;
      }

      .partie2 img{
          margin-left: 590px;
          margin-bottom: 0px;
          width: 10%;
          margin-top: 60px;
      }

      .partie2 p{
          margin-left: 0px;
          color:mediumvioletred;
      }

      .partie2 h3{
          margin-top: 80px;
      }

      .partie2 #listeMembreConnectes{
          margin-left: 570px;
      }

      .menu{
          margin-top:100px;
      }

      .menu a{
          background-image: url('Vue/images/fleche-bleu-a-cote-icone-4900-128.png');
          background-repeat: no-repeat;
          background-size: 10%;
          padding-left:20px;
          font-weight:bold;
          font-size:20px;
          margin-left:20px;
      }

      .menu p{
          margin-left: 10px;
          font-weight: bold;
          margin-bottom:50px;
      }

      .menu li{
          margin-bottom: 30px;
          display:block;
      }

      .cust{
          color:black;
      }

      #lstNbConnectes{
          margin-top: 60px;
          margin-left: 590px;
      }

    </style>
		<!--[if lt IE 9]>
			<script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->
		<!--<link href="Vue/css/styles.css" rel="stylesheet">-->
	</head>
	<body>
<div class="navbar navbar-inverse navbar-fixed-top">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="index.php?page=Accueil">Accueil</a>
    </div>
    <div class="collapse navbar-collapse">
      <ul class="nav navbar-nav">
          <?php if (isConnected() == false) : ?>

              <li class="active"><a href="#">Francais</a></li>
        <li><a href="#about">Anglais</a></li>
        <li><a href="#contact">Espagnol</a></li>

          <?php endif; ?>

          <?php if (isConnected()) : ?>

              <li><a>bienvenue <?php echo $_SESSION["utilisateur"]["login"]; ?></a></li>
              <li><a href="index.php?page=logout");">Deconnexion</a></li>

          <?php endif; ?>

      </ul>
    </div><!--/.nav-collapse -->
  </div>
</div>
