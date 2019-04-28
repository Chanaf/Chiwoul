<?php
$pdo = new PDO('mysql:host=localhost;dbname=communication; charset=utf8', 'root', '');

if (isset($_POST['action'])){

          //die("Ok");
           
            $photos=$_POST['photos'];
            $code=$_POST['code'];
            $numero=$_POST['numero'];
            $email=$_POST['email'];
            $pseudo=$_POST['pseudo'];
            $mdp=$_POST['mdp'];
            $datenaiss=$_POST['datenaiss'];
            $situationm=$_POST['situationm'];
            $sexe=$_POST['sexe'];
                        $niveau=0;

              
          $insert=$pdo->prepare("INSERT INTO utilisateur(photos,code,numero,pseudo,mdp,datenaiss,situationm,sexe,niveau) VALUES(?,?,?,?,?,?,?,?,?)");
          $insert->execute(array($photos,$code,$numero,$pseudo,$mdp,$datenaiss,$situationm,$sexe, $niveau));
          //die("Ok");
          header('location: inser.php');
       
      
}
?>


<!DOCTYPE html>
<html>
<head>
	<title>Mon inscription</title>
	<link href="https://fonts.googleapis.com/css?family=Kaushan+Script|Marck+Script|Merienda|Playball|Prata|Spirax" rel="stylesheet"> 
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
 	<script type="text/javascript" src="js/jquery.js"></script>
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
<body style="font-family: 'Merienda', cursive;">

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
			</div><br>
            <!-- Main Menu End -->

<div class="container-fluid" style="margin-top: 0px; margin-left: 25px">
		<div class="row">
			<center>
				<h1 style="border:1px solid ;background-color:blue;color:white;width:544px"></h1>
			    <form method="POST" action="" style="border: 1px solid black; margin:0px 400px 0px 400px; padding:20px">
					<div class="input-group">
						Pseudo:<input type="text" name="pseudo" placeholder="Entrer votre pseudo" style="width:200px;margin:3px 0px 3px 166px;">
					</div>
					<div class="input-group">
						Code:<input type="number" name="code"  placeholder="Entrer le code du pays" style="width:200px;margin:3px 0px 3px 147px">
					</div>
					<div class="input-group">
						Numéro:<input type="number" name="numero"  placeholder="Entrer votre numéro" style="width:200px;margin:3px 0px 3px 142px">
					</div>
					<div class="input-group">
						Date Naissance:<input type="date" name="datenaiss" placeholder="" style="width:200px;margin:3px 0px 3px 97px">
					</div>
					<div class="input-group">
						E-mail:<input type="email" name="email" placeholder="Entrer votre E-mail" style="width:200px;margin:3px 0px 3px 82px">
					</div>

					<div class="input-group">
						Mot de passe : <input type="password" name="mdp" placeholder="Entrer votre mot de passe" style="width:200px;margin:3px 0px 3px 150px">
					</div>
					
					<div class="input-group">
						<span style="margin-right:130px">Situation familiale:</span> Marie(e) &nbsp;<input type="radio" name="situationm" value="Marié(e)">&nbsp;  Celibataire &nbsp;<input type="radio" name="situationm" value="Celibataire">
					</div>
					<div class="input-group">
						<span style="margin-right:130px">Sexe : </span> Homme &nbsp;<input type="radio" name="sexe" value="Homme">&nbsp;  Femme &nbsp;<input type="radio" name="sexe" value="Femme">
					</div>
					<div class="form-inline">
						votre photo:<input type="file" name="photos" placeholder="" style="width:200px;margin:0px 0px 3px 87px">
					</div>
					<div style="margin-top:20px">
					<button type="submit" name="action" class="btn btn-primary btn-block">Valider</button>
				    </div>
			    </form>
		    </center>
		</div>
	</div>
</body>
</html>