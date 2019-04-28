<?php
  session_start();
   $cn=new PDO('mysql:host=localhost;dbname=communication',"root",'');
   if (isset($_POST['envoi']))
   { 
     	if (!empty($_POST['pseudo']) && !empty($_POST['mdp'])){    
        $pseudo=htmlspecialchars($_POST['pseudo']);
             $mdp=htmlspecialchars($_POST['mdp']);
   		      $req=$cn->prepare("SELECT * FROM compte_utilisateur WHERE pseudo=? AND mdp=?");

   		      if ($req->execute(array($pseudo, $mdp)))
   		       {
              $row = $req->fetch();
              $_SESSION['user'] = $row['iduser'];
   		      	 header('location:forum.php');
   		      }
       	     
       }
       	 else
       	        {
					   echo"le mail ou le mot de passe est incorrect!";
					   //header('location:index.php');
       	        }
  }
?>

<!DOCTYPE html>
<html>
 <head>
	<title>Se connecter</title>
 <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
 <script type="text/javascript" src="js/jquery.js"></script>
 <link rel="stylesheet" type="text/css" href="js/bootstrap.js">
<script type="text/javascript" src="js/bootstrap.js"></script>

<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
  <head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Hackathon 2019</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="Free HTML5 Template by FREEHTML5.CO" />
  <meta name="keywords" content="free html5, free template, free bootstrap, html5, css3, mobile first, responsive" />
  <meta name="author" content="FREEHTML5.CO" />


    <!-- Facebook and Twitter integration -->
  <meta property="og:title" content=""/>
  <meta property="og:image" content=""/>
  <meta property="og:url" content=""/>
  <meta property="og:site_name" content=""/>
  <meta property="og:description" content=""/>
  <meta name="twitter:title" content="" />
  <meta name="twitter:image" content="" />
  <meta name="twitter:url" content="" />
  <meta name="twitter:card" content="" />

  <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
  <link rel="shortcut icon" href="favicon.ico">
  
  <!-- Animate.css -->
  <link rel="stylesheet" href="css/animate.css">
  <!-- Icomoon Icon Fonts-->
  <link rel="stylesheet" href="css/icomoon.css">
  <!-- Bootstrap  -->
  <link rel="stylesheet" href="css/bootstrap.css">
  <!-- Superfish -->
  <link rel="stylesheet" href="css/superfish.css">

  <link rel="stylesheet" href="css/style.css">


  <!-- Modernizr JS -->
  <script src="js/modernizr-2.6.2.min.js"></script>
  

  <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="apple-touch-icon" href="apple-touch-icon.png">
        <!-- Place favicon.ico in the root directory -->
    
    <!-- Font -->
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,700,600italic,700italic,800,800italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
    <!-- Font -->
    
    
        <link rel="stylesheet" href="css/normalize.css">
        <link rel="stylesheet" href="css/main.css">
        <link rel="stylesheet" href="css/font-awesome.min.css">
        <link rel="stylesheet" href="css/animate.css">
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/responsive.css">
        <script src="js/vendor/modernizr-2.8.3.min.js"></script>

 </head>
 <body>

<div id="fh5co-wrapper">
    <div id="fh5co-page">
    <!-- Header Start -->
    <header id="home">
      
      <!-- Main Menu Start -->
      <div class="main-menu">
        <div class="navbar-wrapper">
          <div class="navbar navbar-inverse navbar-fixed-top" role="navigation" style="background-color: #e18237;">
            <div class="container">
              <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                  <span class="sr-only">Toggle Navigation</span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                </button>
                
                <a href="#" class="navbar-brand"><img src="img/chiwoul.png" alt="Logo" width="100" height="70"/></a>              
              </div>
              
              <div class="navbar-collapse collapse">
                <ul class="nav navbar-nav navbar-right" >
                  <li><a href="index.php" >Accueil</a></li>
                  <li><a href="forum.php">Forum</a></li>
                  <li><a href="notification.php">Notification</a></li>
                  <li><a href="inser.php">S'inscrire</a></li>
                  <li><a href="login.php">Se connecter</a></li>
                </ul>
              </div>
              
            </div>
          </div>
        </div>
      </div>
            <!-- Main Menu End -->

   <div class="col-md-5  col-md-offset-4">

            <form action="" method="POST">
            </form>
          </div>
	<div class="container">
		<div class="row" style="margin-top: 150px;">
			<div class="col-md-6 col-md-offset-4">
				<div class="panel panel-primary">
					<div class="panel-heading">
						<p class="panel-title">AUTHENTIFICATION</p>
					</div>
					<div class="panel-body">
						<form method="POST" action="" name="form1">
							<input type="text" name="pseudo" placeholder="Entrer votre pseudo" class="form-control">
							<input type="password" name="mdp" placeholder="Entrer votre mot de passe" class="form-control" style="margin-top: 10px;">
							<div class="col-md-8 col-md-offset-4">
							<button class="btn btn-primary" name="envoi" style="margin-top:20PX ">connexion</button>
                           
              </div>
						
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>



</body>
</html>