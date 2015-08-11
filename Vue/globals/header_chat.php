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

      .gras{
        font-weight: bold;
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
            margin-left: 945px;
            margin-bottom:0px;
            width:13%;
            margin-top:70px;
        }

        strong {
            font-size:20px;
            font-weight: bold;
            /*color: #ffffff;*/
            text-decoration: underline;
        }

        body{
            background-color: #E8E3DC;

        }

        #listeMembreConnectes{
           margin-top: 0px;
            margin-left:950px;
        }

        #listeMembreConnectes img{
          width:40%;
            margin-left: 10px;
            margin-bottom:0px;
        }

      #listeMembreConnectes p {
          color: blueviolet;
      }

      #listeMembreConnectes ul li{
          /*display: inline-block;*/
          margin-left: 10px;
          color:blue;
          background-image: url('Vue/images/homme_1.jpg');
          background-size:70%;
          background-repeat: no-repeat;
          background-position-x: left;
          background-position-y: left;
          padding-left:30px;
          margin-right:10px;
      }

       .jp2{
           float:left;
           width:85%;
       }

      .jp3{
          float:left;
          width:10%;
          margin-top:80px;
      }
       .jp4{
           color:mediumvioletred;
           font-weight: bold;
           font-size:30px;
      }

        .jp5{
            font-weight: bold;
            font-size: 30px;
        }

        h3{
            margin-left: 450px;
            margin-top:50px;
        }

        .services{
            margin-top: 40px;
        }

        .partie1{
          float: left;
          width:10%;
          margin-top: 60px;
          margin-bottom: 20px;
      }

      .partie2{
          float: left;
          width:60%;
      }

      #imgstore img{
        margin-left: 0px;
        width: 350%;
        margin-top: 0px;
      }

       
      .col-md-8{
        width:73%;
        display: inline-block;
      }
  

      .col-md-4{
        width:23%;
        display: inline-block;
      }

      .media-body{
        overflow: visible;
      }

      h5{
         background-image: url('Vue/images/homme_1.jpg');
          background-size:10%;
          background-repeat: no-repeat;
          background-position-x: left;
          background-position-y: left;
          padding-left: 20px;
         
      }

      .clearfix{
        height: 75px;
      }

      .titi{
        float: left;
        width: 18%;
      }

      .titi1{
        float: left;
        width: 50%;
        height: 30px;
      }

      .id_1{
        float: left;
        width: 30%;
      }

      .he {
        margin-top:100px;
        margin-left:465px;
      }

      .he a{
        text-decoration: underline;
        color: red;
      }

        .id_2{
        float: left;
        width: 30%;
      }

      .id_11{
        float: left;
        width: 50%;
      }

      .id_12{
        float: left;
        width: 50%;
      }

      .id_21{
        float: left;
        width: 30%;
      }
      .id_22{
        float: left;
        width: 30%;
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
          <?php if (isConnected()) : ?>
          <li><a>bienvenue <?php echo $_SESSION["utilisateur"]["login"]; ?></a></li>
          <li><a href="index.php?page=logout");">Deconnexion</a></li>

          <?php endif; ?>


      </ul>
    </div><!--/.nav-collapse -->
  </div>
</div>
