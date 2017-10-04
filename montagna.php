<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Agenzia Viaggi</title>
<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="style.css">

</head>

<body>
<?php

    session_start();

   	
	?>
<div id="headerWrap">
  <header class="container voffset3">
    <nav id="mainNav" class="navbar navbar-inverse" role="navigation">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#mainMenu"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
        <a href="index.php" class="navbar-brand">Agenzia Viaggi</a> </div>
      <div class="collapse navbar-collapse" id="mainMenu">
        <ul class="nav navbar-nav">
          <li><a href="chi_siamo.php">Chi siamo</a></li>
          <li class="dropdown"> <a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" href="#">Servizi <span class="caret"></span></a>
            <ul class="dropdown-menu" role="menu">
              <li><a href="registra.php">Registrazione</a></li>
              <li><a href="cerca.php">Strutture</a></li>
                         
            </ul>
          </li>
          <li class="dropdown"> <a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" href="#">Backend <span class="caret"></span></a>
            <ul class="dropdown-menu" role="menu">
              <li><a href="elenco_strutture.php">Elenco strutture</a></li>
              <li><a href="elenco_prenotazioni.php">Elenco prenotazioni</a></li>
              
            </ul>
          </li>
          <li><a href="contatti.php">Contatti</a></li></ul>
		  <?php
		  //se esiste la variabile di sessione username allora l'utente è loggato e quindi posso aggiungere messaggio di benvenuto
		  //e link per fare disconnessione altrimenti metto pagina per fare login
		  if (isset($_SESSION["UserName"])) {
			$utente = $_SESSION["UserName"];
			echo "<ul class=\"nav navbar-nav navbar-right\">";
			echo "<li class=\"dropdown\"> <a class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-expanded=\"false\" href=\"#\">$utente<span class=\"caret\"></span></a>";
            echo "<ul class=\"dropdown-menu\" role=\"menu\">";
            echo "<li><a href=\"mie_prenotazioni.php\">Le tue prenotazioni</a></li>";
            echo "<li><a href=\"logout.php\">Esci</a></li>";
            echo "</ul>";
          	}
		else
			{
			echo"<ul class=\"nav navbar-nav navbar-right\"><li><a href=\"login2.php\">Login</a></li></ul>";
			}
		  ?>
        
        
      </div>
    </nav>
  </header>
</div>

<div class="container">
  
  <div id="content">
	<div class="row voffset4" id="widgets">
		<div class="col-md-4 col-xs-6">
        <h3 class="text-center">Trentino</h3>
        <a href="green.php">
		<img class="img-thumbnail img-responsive" src="img/green.jpeg"/>
		</a>
        <p class="voffset2">Prova il nostro green weekend! Pronti a trascorrere due giorni completamente immersi nella natura?.</p>
		<p class="voffset2"><b>A soli 350€</b></p>
        <a href="green.php" class="btn btn-default pull-right voffset2">Scopri l'offerta e prenota!</a> </div>
		
		<div class="col-md-4 col-xs-6">
        <h3 class="text-center">Valle D'Aosta</h3>
        <a href="courmayeur.php">
		<img class="img-thumbnail img-responsive" src="img/courmayeur2.jpg"/>
        </a>
		<p class="voffset2">Courmayeur come non l'hai mai visto! Tantissime attività ti aspettano!</p>
        <p class="voffset2"><b>A soli 425€</b></p>
		<a href="courmayeur.php" class="btn btn-default pull-right voffset2">Scopri le offerte e prenota!</a> </div>
		
		<div class="col-md-4 col-xs-6">
        <h3 class="text-center">Trentino</h3>
        <a href="trentino.php">
		<img class="img-thumbnail img-responsive" src="img/trentino.jpeg"/>
		</a>
        <p class="voffset2"> Scopri i rifugi del Trentino ed immergiti nelle tradizioni del luogo!</p>
		<p class="voffset2"><b>A soli 300€</b></p>
        <a href="trentino.php"class="btn btn-default pull-right voffset2">Scopri le offerte e prenota!</a> </div>
    </div>
</div>
<div>
</div>
<div id="footerWrap" class="voffset2 container">
  <footer class="container">
    <p class="text-right"> Agenzia Viaggi SRL Società Unipersonale. Partita Iva 04255838956.</p>
	<p class="text-right"> Via L. Biolchini 14, 20124 Roma, Italy.s</p>
	<p class="text-right"><span class="glyphicon glyphicon-phone-alt" style="color:green"></span> 06 5689846</p>
	<p class="text-right"><span class="glyphicon glyphicon-envelope" style="color:orange"></span> agenziaviaggia@yahoo.it</p>
  </footer>
</div>

<script src="js/jquery-1.11.2.min.js"></script> 
<script src="bootstrap/js/bootstrap.min.js"></script>
</body>
</html>