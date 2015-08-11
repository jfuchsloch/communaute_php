<!DOCTYPE html>
<html lang="en">
	<head>
		<meta http-equiv="content-type" content="text/html; charset=UTF-8">
		<meta charset="utf-8">
		<title>EarthEyes</title>
		<meta name="generator" content="Bootply" />
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <link href="Vue/css/reset.css" rel="stylesheet">
		<link href="Vue/css/bootstrap.min.css" rel="stylesheet">
    <style type="text/css">
      h2{
        margin-top: 60px;
       /*color:#ffffff;*/
          color:cornflowerblue;
          font-weight: bold;
          font-size:15px;
      }

      label{

          /*color:#ffffff;*/
          color:cornflowerblue;
      }
      p{
         color:red;
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

        img{
            margin-left: 463px;
            margin-bottom:480px;
            width:22%;
        }

        .tutu img{
            width:4.5%;
            margin-top:35px ;
            margin-bottom:10px;
            margin-left: 670px;
        }

        strong {
            font-size:20px;
            font-weight: bold;
            /*color: #ffffff;*/
            text-decoration: underline;
        }

        body{
            background-image: url('Vue/images/images.jpg');
            background-repeat: no-repeat;
            background-size: 50%;
            background-position-x: center;
            background-position-y: center;
            background-color: #E8E3DC;

        }

        #listeMembreConnectes{
           margin-top: 80px;
            margin-left:950px;
        }

        #listeMembreConnectes img{
          width:40%;
            margin-left: 10px;
        }

      #listeMembreConnectes p {
          color: blueviolet;
      }

       .jp2{
           float:left;
           width:80%;
       }

      .jp3{
          float:left;
          width:20%;
          margin-top:80px;
      }

      .jp3 a{

          background-image: url('Vue/images/bonhomme_3.png');
      background-size:25%;
      background-repeat: no-repeat;
      background-position-x: left;
      background-position-y: left;
      padding-left:60px;
      margin-right:10px;
      padding-bottom:20px;
      }

      h3{
            margin-left: 450px;
            margin-top:130px;
        }

      .debut img{
          margin-left: 20px;
          margin-bottom: 0px;
          margin-top: 120px;
          width: 50%;
      }

      .debut1 p{
          margin-left:0px;
          margin-top: 130px;
          color:blue;
      }

      .jp4{
          color:mediumvioletred;
          font-weight: bold;
          font-size:20px;
      }

      .jp5{
          font-weight: bold;
          font-size: 20px;
      }


      .debut{
          float: left;
      }

      .debut1{
          float: left;
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
          margin-left: 600px;
          margin-bottom: 0px;
          width: 10%;
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
         margin-left:100px;
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
          margin-bottom: 50px;
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
      <a class="navbar-brand" href="indexenglish.php?page=Accueil">Home page</a>
    </div>
    <div class="collapse navbar-collapse">
      <ul class="nav navbar-nav">

          <?php if (isConnected() == false) : ?>

        <li class="active"><a href="index.php?page=Accueil">French</a></li>
        <li><a href="indexenglish.php?page=Accueil">English</a></li>
        <li><a href="#contact">Spanish</a></li>

          <?php endif; ?>

          <?php if (isConnected()) : ?>
              <li>
                  <a> <strong>Welcome <?php echo $_SESSION["utilisateur"]["login"]; ?></strong>
                  </a>
              </li>
              <li><a href="index.php?page=logout");">Logout</a></li>

          <?php endif; ?>

          <div  class="tutu">
          <img src="Vue/images/url.gif" />
            </div>
²
      </ul>
    </div><!--/.nav-collapse -->
  </div>
</div>
