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
			<h3 class="text-center">Barcellona</h3>
			<a href="barcellona.php">
			<img class="img-thumbnail img-responsive" src="img/barcellona2.jpg"/>
			</a>
			<p class="voffset2">Seconda città della Spagna, Barcellona vanta un'architettura mozzafiato, musei di livello internazionale e strade pervase dai profumi e dai ritmi della Catalogna. Cosa aspetti? Fatti trasportare dalle nostre offerte!</p>
			<p class="voffset2"><b>A soli 350€</b></p>
			<br>
			<a href="barcellona.php" class="btn btn-default pull-right voffset2">Scopri l'offerta e prenota!</a>
		</div>
		
		<div class="col-md-4 col-xs-6">
			<h3 class="text-center">Zurigo</h3>
			<a href="zurigo.php">
			<img class="img-thumbnail img-responsive" src="img/zurigo.jpg"/>
			</a>
			<p class="voffset2">Andate alla scoperta di un paese europeo celebre per i paesaggi alpini, i vasti laghi incontaminati, le pittoresche città, il cioccolato e i formaggi. Un viaggio in Svizzera è l'occasione ideale per scoprire la cultura e le tradizioni delle sue diverse comunità linguistiche.</p>
			<p class="voffset2"><b>A soli 425€</b></p>
			<a href=" zurigo.php" class="btn btn-default pull-right voffset2">Scopri le offerte e prenota!</a> 
		</div>
		
		<div class="col-md-4 col-xs-6">
			<h3 class="text-center">Dublino</h3>
			<a href="dublino.php">
			<img class="img-thumbnail img-responsive" src="img/dublino.jpg"/>
			</a>
			<p class="voffset2"> Per i fortunati turisti in viaggio a Dublino, la capitale irlandese è sinonimo di tradizione letteraria, conversazioni al bancone del pub e orgoglio patriottico. Fatti trasportare dal ritmo irlandese! Non perdere questa fantastica offerta!</p>
			<p class="voffset2"><b>A soli 300€</b></p>
			<br>
			<a href="dublino.php"class="btn btn-default pull-right voffset2">Scopri le offerte e prenota!</a> 
		</div>
	</div>
		
	<div class="row voffset4" id="widgets">
		<div class="col-md-4 col-xs-6">
			<h3 class="text-center">Parigi - Francia</h3>
			<a href="parigi.php">
			<img class="img-thumbnail img-responsive" src="img/parigi.jpg"/>
			</a>
			<p class="voffset2"> Vuoi prenotare una vacanza a Parigi? Che tu stia pensando a una vacanza romantica, a un viaggio con la famiglia o a un soggiorno all-inclusive, i nostri pacchetti vacanza per Parigi rendono la pianificazione del tuo viaggio semplice e conveniente..</p>
			<p class="voffset2"><b>A soli 350€ a persona</b></p>
			<a href="parigi.php" class="btn btn-default pull-right voffset2">Scopri le offerte e prenota!</a> 
		</div>
		
		<div class="col-md-4 col-xs-6">
			<h3 class="text-center">Copenaghen - Danimarca</h3>
			<a href="copenaghen.php">
			<img class="img-thumbnail img-responsive" src="img/copenaghen.jpg"/>
			</a>
			<p class="voffset2"> Un viaggio nella capitale danese vi aprirà le porte di un mondo fiabesco, un'affascinante unione tra il mondo scandinavo e quello continentale. Copenaghen vanta una tradizione importante che si mescola con il design più moderno</p>
			<p class="voffset2"><b>A soli 450€ a persona</b></p>
			<a href="copenaghen.php" class="btn btn-default pull-right voffset2">Scopri le offerte e prenota!</a> 
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