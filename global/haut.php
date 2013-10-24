<!DOCTYPE html>
<html lang="fr">
<head>
	<title>Nicolas Vignes - <?php echo get_title($_GET); ?></title>
	
	<meta http-equiv="content-type" content="text/html; charset=UTF-8" />
	
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link href="lib/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet" media="screen">

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="lib/bootstrap/assets/js/html5shiv.js"></script>
      <script src="lib/bootstrap/assets/js/respond.min.js"></script>
    <![endif]-->
</head>

<body>
	<?php include_once("analytic.php") ?>

	<nav class="navbar navbar-inverse navbar-fixed-top">
		<div class="container">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            		<span class="icon-bar"></span>
            		<span class="icon-bar"></span>
            		<span class="icon-bar"></span>
          		</button>
				<a class="navbar-brand" href="index.html">Nicolas</a>
			</div>

			<div class="collapse navbar-collapse">
				<ul class="nav navbar-nav">
					<li class="active"><a href="index.html">Accueil</a></li>
		           	<li><a href="http://blog.nicolasvignes.fr/">Blog</a></li>
		           	<li><a href="publications.html">Publications</a></li>
		           	<li><a href="competences.html">Compétences</a></li>
		           	<li><a href="contact.html">Contacts</a></li>
				</ul>				
			</div>	
		</div>
	</nav>	

	<header class="jumbotron">
		<div class="container">
			<h1><?php echo get_title($_GET); ?></h1>
				<p class="lead">Welcome !</p>
			</div>
	</header>