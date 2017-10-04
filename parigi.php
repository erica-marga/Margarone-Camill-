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

    if (!isset($_SESSION["UserName"])) {
	//se non esiste una variabile di sessione con dentro username allora conservo il numero di camera in una variabile di sessione
	//e rimando alla pagina di login. la variabile di sessione camera mi servirà per tornare su questa pagina dopo il login.
	$_SESSION["camera"]= $_REQUEST["camera"];
      header('Location: login2.php');
      exit;
    }	
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
			 <div class="item active"><img src="img/parigi2.jpg"/> </div>
			<div class="item"><img src="img/parigi3.jpg"/> </div>
			<div class="item"><img src="img/parigi4.jpg"/> </div>
			<div class="item"><img src="img/parigi5.jpg"/> </div>
			<div class="item"><img src="img/parigi.jpg"/> </div>
		</div>
			<!-- i controlli --> 
		<a class="left carousel-control" href="#carousel" role="button" data-slide="prev"> <span class="glyphicon glyphicon-chevron-left"></span></a> 
		<a class="right carousel-control" href="#carousel" role="button" data-slide="next"> <span class="glyphicon glyphicon-chevron-right"></span></a> 
		</div>
</div>
	
<div class="container">
	<div class="col-sm-12">
	<div id="container">
	<p id="promozione" class="text-center"><a href="https://www.tripadvisor.it/Hotel_Review-g187147-d312956-Reviews-Novotel_Suites_Paris_Nord_18eme-Paris_Ile_de_France.html"><b><i>Hotel Novotel Suites Paris Nord 18ème</i></b> -  1 Impasse Marteau, 75018 Paris, Francia</a></p>
	<p id="info" class="text-center"><span class="glyphicon glyphicon-phone-alt" style="color=blu:"></span> +33 1 49 46 39 39 - <span class="glyphicon glyphicon-envelope" style="color:orange"></span> hotelnovotel@yahoo.fr </p>		
<hr>
	<p id="info" class="text-left"> <span class="glyphicon glyphicon-home"></span> Hotel 4 <span class="glyphicon glyphicon-star" style="color:yellow"></span></p>
	<p id="info" class="text-left"> <b>Soggiorno:</b> </p>
	<p id="info" class="text-left"><span class="glyphicon glyphicon-bed"></span> Una camera per 2 adulti | Numero notti: 7</p>
	<p id="info" class="text-left"> <span class="glyphicon glyphicon-signal"></span> WiFi gratuito </p>
	<p id="info" class="text-left"> <span class="glyphicon glyphicon-cutlery"></span> Colazione inclusa</p>
	<p id="info" class="text-left"> <span class="glyphicon glyphicon-glass"></span>Bar interno</p>
	<p id="info" class="text-left"> <span class="glyphicon glyphicon-euro"></span> Pagamento in contanti o con carta di credito</p>	
	<p id="promozione" class="text-center"> <b><i>Il prezzo include:</b></i></p>
	<p id="info"><b> Volo:</b> 
	<p ><span class="glyphicon glyphicon-plane"></span> Andata:</P>
	<p id="info">lun 18 sett. Milano Malpensa (MXP)</p>
	<p id="info">Operato da: <b>Alitalia</b></p>
	<p><span class="glyphicon glyphicon-plane"></span> Ritorno:</p>
	<p id="info">lun 25 sett. Parigi (CDG)</p>
	<p id="info">Operato da:<b> Air France </b></p>
	<p id="condizioni">* Le offerte e i prezzi pubblicati in questo sito sono soggetti a variazione, a seguito della verifica di disponibilità dei posti volo e della tipologia di camera richiesta che compongono il pacchetto (la variazione può avvenire nella fase di acquisto denominata “Il tuo preventivo”)</p>
</div>		
</div>
</div>
 
 <div class="container">
	<div class="jumbotron">
		<div class="row voffset4">
			<a href="prenotazioni.php?camera=108" class="btn btn-primary btn-lg active">Prenota</a>
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