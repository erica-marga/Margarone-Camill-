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
        <h3 class="text-center">Thermana Park Lasko</h3>
		<a href="thermanapark.php">
        <img class="img-thumbnail img-responsive" src="img/slovenia.jpg"/>
		</a>
        <p class="voffset2">Thermana Park Laško, dove rimarrete meravigliati dalla natura e da una moderna architettura. Un fantastico centro termale immerso nella natura!</p>
		<p class="voffset2"><b>A soli 380€ a persona</b></p>
		<a href="thermanapark.php" class="btn btn-default pull-right voffset2">Scopri l'offerta e prenota!</a> </div>
		
      <div class="col-md-4 col-xs-6">
        <h3 class="text-center">Romantic Lake</h3>
		<a href="lagodiseo.php">
        <img class="img-thumbnail img-responsive" src="img/bergamo.jpg"/>
		</a>
        <p class="voffset2">Vivere un momento romantico, ad un passo dal cielo, e godere di una luce magica e di un microclima sano.</p>
        <p class="voffset2"><b>A soli 190€ a persona</b></p>
		<a href="lagodiseo.php" class="btn btn-default pull-right voffset2">Scopri l'offerta e prenota!</a> </div>
      <!-- questo div si nasconde in caso di dimensioni small o extra small -->
	  
	  <div class="col-md-4 hidden-sm hidden-xs">
       <h3 class="text-center">Alpin Royal</h3>
		<a href="alpin.php">
        <img class="img-thumbnail img-responsive" src="img/alpin.jpg"/>
		</a> 
		<p class="voffset2">Vi invitiamo a una straordinaria esperienza wellness e benessere a 4 stelle superior che soddisferà i vostri sogni di vacanza più belli.</p>
		<p class="voffset2"><b>A soli 450€ a persona</b></p>
        <a  href="alpin.php" class="btn btn-default pull-right voffset2">Scopri l'offerta e prenota!</a> </div>
	</div>
</div>

</div>
</div>
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