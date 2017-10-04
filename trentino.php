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
<h1 id="presentazione" class="text-center">Scopri il Trentino</h1>
<div class="jumbotron">
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
		<div class="item active"><img src="img/trentino.jpeg"/> </div>
		<div class="item"><img src="img/trentino2.jpeg"/> </div>
		<div class="item"><img src="img/trentino4.jpg"/> </div>
    </div>
    <!-- i controlli --> 
    <a class="left carousel-control" href="#carousel" role="button" data-slide="prev"> <span class="glyphicon glyphicon-chevron-left"></span></a> 
    <a class="right carousel-control" href="#carousel" role="button" data-slide="next"> <span class="glyphicon glyphicon-chevron-right"></span></a> 
    </div>
</div>
</div>

<div class="container">
	<div class="col-sm-12">
		<div id="container">
			<p id="promozione" class="text-center"><a href="https://www.tripadvisor.it/Hotel_Review-s1-g194898-d6678351-Reviews-Rifugio_Velo_Della_Madonna-San_Martino_di_Castrozza_Primiero_San_Martino_di_Castroz.html"><b><i>Rifugio Velo della Madonna </i></b>- Pale di San Martino, Dolomiti 38054 - San Martino di Castrozza</a></p>
			<p id="info" class="text-center"><span class="glyphicon glyphicon-phone-alt" style="color:blue"></span>  0439 768731 </p>
			<p id="info" class="text-justify">E' l’ultimo Rifugio costruito ex novo dalla SAT alla base della Cima della Madonna. Venne inaugurato nel settembre del 1980 e prende il nome dallo Spigolo del Velo, cioè una tra le più belle scalate classiche delle Dolomiti: una via di 440 metri di roccia che venne salita per la prima volta nel 1920 e che ancora oggi richiama alpinisti (esperti) da tutto il mondo. La gestione del Rifugio è in mano ad Anna Toffol, la prima donna a cui la SAT ha affidato una propria struttura alpina. Poco distante, attraverso Cima Cimerlo, in uno degli angoli più remoti delle Pale, c’è anche il sentiero attrezzato dedicato a Dino Buzzati, il giornalista (e scrittore) bellunese che amava le Pale di San Martino più di ogni altro gruppo dolomitico.</p> 
			<br>
			<p id="info" class="text-justify"> <b>Soggiorno:</b></p>
			<p id="info" class="text-justify"><span class="glyphicon glyphicon-bed"></span> Una camera per 2 adulti | Numero notti: 5</p>
			<p id="info" class="text-justify"> <span class="glyphicon glyphicon-signal"></span> WiFi gratuito </p>
			<p id="info" class="text-justify"> <span class="glyphicon glyphicon-cutlery"></span> Bar</p>
			<p id="info" class="text-justify"> <span class="glyphicon glyphicon-animal"></span>Animali ammessi</p>
			<br>	
			<p id="info" class="text-left"><span class="glyphicon glyphicon-calendar"></span><b> Apertura:</b></p>
			<p id="info" class="text-left">Da metà giugno a fine settembre</p>
			<p id="condizioni" class="text-left">*Per essere sicuri di riuscire a pernottare, è consigliata la prenotazione, specialmente nel weekend.</p>
		</div>
	</div>
</div>
<div class="jumbotron">
	<div class="container">
		<div class="row voffset4">
			<a href="prenotazioni.php?camera=123" class="btn btn-primary btn-lg active">Prenota</a>
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