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
<?php
session_start();
?>
<body>
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
  <div id="carousel"  class="carousel slide" data-ride="carousel"> 
    <!-- indicatori -->
    <ol class="carousel-indicators">
      <li data-target="#carousel" data-slide="0" class="active"></li>
      <li data-target="#carousel" data-slide="1"></li>
      <li data-target="#carousel" data-slide="2"></li>
	  <li data-target="#carousel" data-slide="3"></li>
    </ol>
    <!--qui le slide-->
    <div class="carousel-inner">
	<!-- inserisci le foto per la gallaeria-->
      <div class="item active"><img src="img/1.jpg"/> </div>
      <div class="item"><img src="img/2.jpg"/> </div>
      <div class="item"><img src="img/3.jpg"/> </div>
	  <div class="item"><img src="img/4.jpg"/> </div>
    </div>
    <!-- i controlli --> 
    <a class="left carousel-control" href="#carousel" role="button" data-slide="prev"> <span class="glyphicon glyphicon-chevron-left"></span></a> 
    <a class="right carousel-control" href="#carousel" role="button" data-slide="next"> <span class="glyphicon glyphicon-chevron-right"></span></a> 
    </div>
	<div id="content">
	<div class="row voffset4">
		<div id="citation" class="col-md-6 text-center col-md-offset-3">
        <blockquote>“Il mondo è un libro, e quelli che non viaggiano ne leggono solo una pagina.”.
          <footer><cite>Agostino d’Ippona</cite></footer>
        </blockquote>
		</div>
    </div>
<div class="row voffset4" id="widgets">
      <div class="col-md-4 col-xs-6">
        <h3 class="text-center">Super sconti</h3>
		<!-- .img-thumbnail = crea una cornice di anteprima; .img-responsive = immagine che si adatta alla dimansione dello schermo -->
		<a href="sconti.php">
	   <img class="img-thumbnail img-responsive" src="img/sconti_1.jpg">
	   </a>
        <p class="voffset2">Ultime Disponibilità Settimane Speciali! Scopri le nostre offerte per risparmiare fino al 60%!!!!
		Approfittane, prenota subito!.</p>
		<br>
		<!-- .pull-right = float a destra  -->
		<br>
        <a href="sconti.php" class="btn btn-default pull-right voffset2">Leggi tutto...</a> </div>
      <div class="col-md-4 col-xs-6">
        <h3 class="text-center">Super last minute</h3>
         <a href="last_minute.php">
		<img class="img-thumbnail img-responsive" src="img/sconti_2.jpg"/>
		</a>
        <p class="voffset2">Una vacanza all'ultimo minuto? Noi ti offriamo la sicurezza di strutture e offerte che selezioniamo con cura durante tutto l'anno, e che tu puoi scegliere all'ultimo istante per sfruttare al meglio il vantaggio economico..</p>
        <a href="last_minute.php" class="btn btn-default pull-right voffset2">Leggi tutto...</a> </div>
      <!-- questo div si nasconde in caso di dimensioni small o extra small -->
	  <div class="col-md-4 hidden-sm hidden-xs">
        <h3 class="text-center">Vacanze termali</h3>
		<a href="vacanze_termali.php">
        <img class="img-thumbnail img-responsive" src="img/terme.jpg"/>
		</a>
        <p class="voffset2">Le vacanze termali sono l'ideale per ritrovare la perfetta forma, il giusto equilibrio e il benessere. Concediti una vacanza studiata per te!</p>
        <br>
		<br>
		<a href="vacanze_termali.php" class="btn btn-default pull-right voffset2">Leggi tutto...</a> </div>
    </div>
</div>
<div class="row voffset4" id="widgets">
      <div class="col-md-4 col-xs-6">
        <h3 class="text-center">Europa</h3>
		<a href="europa.php">
        <img class="img-thumbnail img-responsive" src="img/europa.jpg"/>
		</a>
        <p class="voffset2"> Fantastiche camere nei migliori alberghi a prezzi bassissimi...leggi di più e scopri tutte le promozioni che abbiamo riservato per te</p>
        <br>
		<a href="europa.php" class="btn btn-default pull-right voffset2">Leggi tutto...</a> </div>
      <div class="col-md-4 col-xs-6">
        <h3 class="text-center">Crociere</h3>
		<a href="crociere.php">
        <img class="img-thumbnail img-responsive" src="img/crociere.jpg"/>
		</a>
        <p class="voffset2">Per te abbiamo riservato ottime strutture.....Provate ad immaginarvi all’ora del tramonto, mentre sorseggiate  un fresco aperitivo a bordo piscina....visita subito le nostre offerte.</p>
        <a href="crociere.php" class="btn btn-default pull-right voffset2">Leggi tutto...</a> </div>
      <!-- questo div si nasconde in caso di dimensioni small o extra small -->
	  <div class="col-md-4 hidden-sm hidden-xs">
        <h3 class="text-center">Montagna</h3>
		<a href="montagna.php">
        <img class="img-thumbnail img-responsive" src="img/home_3.jpg"/>
		</a>
        <p class="voffset2">Sei amante della montagna? Scopri le nostre offerte in posti suggestivi con viste mozzafiato.</p>
		<br><br>
        <a href="montagna.php" class="btn btn-default pull-right voffset2">Leggi tutto...</a> </div>
    </div>
</div>
</div>
<div id="footerWrap" class="voffset2">
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
