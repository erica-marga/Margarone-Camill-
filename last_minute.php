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
        <h3 class="text-center">Palermo - Italia</h3>
		<a href="palermo.php">
        <img class="img-thumbnail img-responsive" src="img/palermo.jpg"/>
		</a>
        <p class="voffset2">Palermo rappresenta l'occasione giusta per rimanere sorpresi dalle meraviglie del capoluogo siciliano. Dai palazzi d'epoca barocca ai musei, sono molte le attrazioni a disposizione dei turisti. Gli amanti del mare troveranno nelle ampie spiagge assolate e nell'acqua trasparente un elemento irrinunciabile.</p>
        <p class="voffset2"><b>A soli 250€ a persona</b></p>
		<a href="palermo.php"class="btn btn-default pull-right voffset2">Scopri le offerte e prenota!</a> </div>
		
      <div class="col-md-4 col-xs-6">
        <h3 class="text-center">Cagliari - Italia</h3>
		<a href="cagliari.php">
        <img class="img-thumbnail img-responsive" src="img/cagliari.jpg"/>
		</a>
        <p class="voffset2">Sognate un viaggio alla scoperta di splendide spiagge e di paesaggi naturali selvaggi e inesplorati? Prenotate le vostre vacanze in Sardegna e avrete tutto questo e molto di più!</p>
        <br>
		<br><p class="voffset2"><b>A soli 350€ a persona</b></p>
		<br>
			<br>
		<a href="cagliari.php"class="btn btn-default pull-right voffset2">Scopri le offerte e prenota!</a> </div>
      <!-- questo div si nasconde in caso di dimensioni small o extra small -->
	  
	  <div class="col-md-4 hidden-sm hidden-xs">
       <h3 class="text-center">Firenze - Italia</h3>
		<a href="firenze.php">
        <img class="img-thumbnail img-responsive" src="img/firenze.jpg"/>
		</a>
        <p class="voffset2"> Capitale del rinascimento italiano, Firenze è considerata una delle più belle città del mondo intero. I fortunati turisti in viaggio a Firenze potranno perdersi fra i suoi stretti vicoli per scoprirne le botteghe artigianali, gli storici bar e le squisite gallerie.</p>
		<p class="voffset2"><b>A soli 350€ a persona</b></p>
        <a  href="firenze.php" class="btn btn-default pull-right voffset2">Scopri le offerte e prenota!</a> </div>
	</div>
</div>

<div class="row voffset4" id="widgets">
      <div class="col-md-4 col-xs-6">
        <h3 class="text-center">Londra - Inghilterra</h3>
		<a href="londra.php">
        <img class="img-thumbnail img-responsive" src="img/londra.jpg"/>
		</a>
        <p class="voffset2">Autentica megalopoli, storica, moderna e cosmopolita allo stesso tempo, la capitale inglese offre attrazioni ed eventi per tutti i gusti e tutti i budget, che faranno la gioia dei fortunati turisti in viaggio a Londra.</p>
		<p class="voffset2"><b>A soli 300€ a persona</b></p>
       <a href="londra.php"class="btn btn-default pull-right voffset2">Scopri le offerte e prenota!</a> </div>
		
      <div class="col-md-4 col-xs-6">
        <h3 class="text-center">Berlino - Germania</h3>
		<a href="berlino.php">
        <img class="img-thumbnail img-responsive" src="img/berlino.jpg"/>
		</a>
        <p class="voffset2">La città di Berlino si propone come destinazione moderna, cosmopolita e in grado di offrire un'esperienza davvero indimenticabile. La capitale tedesca vanta circa tre milioni e mezzo di abitanti e si compone di 12 distretti, ognuno dei quali presenta un'atmosfera unica. </p>
        <p class="voffset2"><b>A soli 450€ a persona</b></p>
		<a href="berlino.php"class="btn btn-default pull-right voffset2">Scopri le offerte e prenota!</a> </div>
      <!-- questo div si nasconde in caso di dimensioni small o extra small -->
	  
	  <div class="col-md-4 hidden-sm hidden-xs">
        <h3 class="text-center">Budapest - Ungheria</h3>
		<a href="budapest.php">
        <img class="img-thumbnail img-responsive" src="img/budapest.jpg"/>
		</a>
        <p class="voffset2">La capitale dell'Ungheria regala meravigliosi panorami, interessanti edifici costruiti e secoli di storia. Tra le maggiori capitali europee, Budapest è divisa in due dal Danubio: Buda, la città antica e Pest che si estende ad est. Scopri Budapest con noi!!</p>
		<p class="voffset2"><b>A soli 400€ a persona</b></p>
       <a href="budapest.php"class="btn btn-default pull-right voffset2">Scopri le offerte e prenota!</a> </div>
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