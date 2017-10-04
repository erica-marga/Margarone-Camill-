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
			 <div class="item active"><img src="img/terme3.jpg"/> </div>
			<div class="item"><img src="img/terme2.jpg"/> </div>
			<div class="item"><img src="img/terme1.jpg"/> </div>
		</div>
			<!-- i controlli --> 
		<a class="left carousel-control" href="#carousel" role="button" data-slide="prev"> <span class="glyphicon glyphicon-chevron-left"></span></a> 
		<a class="right carousel-control" href="#carousel" role="button" data-slide="next"> <span class="glyphicon glyphicon-chevron-right"></span></a> 
		</div>
</div>
	
<div class="container">
	<div class="col-sm-12">
	<div id="container">
		<p id="promozione" class="text-center"><a href="https://www.tripadvisor.it/Hotel_Review-s1-g1077241-d1108139-Reviews-Hotel_Thermana_Park_Lasko-Lasko_Styria_Region.html"><b><i>Thermana Park Laško </i></b>- Zdraviliska Cesta 6 Lasko, Slovenia</a></p>
		<p id="info" class="text-center"><span class="glyphicon glyphicon-phone-alt" style="color:blue"></span>  0439 768731 </p>
		<p id="promozione" class="text-center">DETTAGLIO OFFERTA</p>
		<p id="info" class="text-left">L'OFFERTA COMPRENDE PER OGNI PERSONA:</p>
		<p id="info" class="text-justify"><span class="glyphicon glyphicon-bed"></span> 3 giorni / 2 notti
		<ul>
		<li><b>Mezza pensione (bevande escluse)- 2 pernottamenti, 2 prime colazioni, 2 cene</b></li>
			<li><b>Ingresso al Centro Termale suddiviso tra interno ed esterno:</b></li>
			<ul>
				<li>piscina interna ed esterna comunicanti con cascate e getti d’acqua
				<li>all’interno piscina con onde artificiali, piscina con cascate e getti d’acqua
				<li>3 vasche Whirlpool, percorso Kneipp, 
				<li>piscina per bambini, fiume rapido e scivolo
				<li>all’esterno piscina per il nuoto, piscina per bambini, 
				<li>piscina cristallo e scivoli adrenalinici
			</ul>
			<li><b>Ingresso al Centro Fitness con attrezzi Technogym</b></li>
			<li><b>INGRESSO al CENTRO SAUNE con 7 tipi di saune:</b></li>
			<ul>
				<li>sauna finlandese ispirata al fuoco</li>
				<li>sauna finlandese ispirata alla terra</li>
				<li>sauna finlandese, bagno turco</li>
				<li>sauna a infrarossi, Laconium al profumo di tiglio</li>
				<li>Kristal – sauna finlandese esterna, Solarium</li>
				<li>Piscina di acqua fredda e piscina con idromassaggio</li>
			</ul>
			<br>
		<li>KIT SPA: accappatoio</li>
		</ul>
<br>
		<p id="info" class="text-left"><b> PROMOZIONE DI SETTEMBRE: 2 PERSONE AL PREZZO DI 1</b></p>
		  <ul>
			<li>1° persona: € 240,00</li>
			<li>2° persona: € 240,00 GRATIS</li>
		</ul>
		<p id="info" class="text-left"><b>Prezzo totale soggiorno per 2 persone € 240,00</p>
		
		
</div>
	
<div class="jumbotron">
	<div class="container">
		<div class="row voffset4">
			<a href="prenotazioni.php?camera=124" class="btn btn-primary btn-lg active">Prenota</a>
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


 



