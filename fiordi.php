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
			 <div class="item active"><img src="img/fiordi5.jpg"/> </div>
			<div class="item"><img src="img/fiordi3.jpg"/> </div>
			<div class="item"><img src="img/fiordi4.jpg"/> </div>
		</div>
			<!-- i controlli --> 
		<a class="left carousel-control" href="#carousel" role="button" data-slide="prev"> <span class="glyphicon glyphicon-chevron-left"></span></a> 
		<a class="right carousel-control" href="#carousel" role="button" data-slide="next"> <span class="glyphicon glyphicon-chevron-right"></span></a> 
		</div>
</div>

<div class="container">
	<div class="col-sm-12">
	<div id="container">
		
		<div class="row">
			<div class="col-sm-6 hidden-xs">
				<img class="img-thumbnail img-responsive" src="img/fiordi.jpg"/>
			</div>
			<div class="col-sm-6">
				<p id="promozione" class="text-center"> <b><i>In Crociera verso i più sorprendenti tesori del Nord Europa - Fiordi Norvegesi </i></b></p>
				<p id="promozione" class="text-center">Costa Crociere | 8 giorni a bordo della Costa Magica </p>
			</div>
		</div>
		<br>
		<div class="col-sx-12">
			<p id="info" class="text-justify"> Fiordi Norvegesi sono senza dubbio tra i più bei paesaggi naturali del mondo e i più ammirati dai visitatori provenienti da tutto il globo, capaci di incantare con la loro maestosa bellezza e di trasportare in un'atmosfera senza tempo. La Norvegia ha più di mille fiordi, il Geirangerfjord e il Nærøyfjord sono i più grandi e, dal 2005, sono nella lista dei siti Patrimonio dell'UNESCO.  </p>
		</div>
		<br>
		<p id="volo" class="text-center"><b>Tra cielo e mare:</b></p>
		<p id="info" class="text-left">Sbarcare durante una crociera MSC nel Nord Europa ad Hellesylt, la raccolta cittadina che si affaccia su un braccio del fiordo di Geiranger, ve la farà apparire come un prolungamento naturale dei monti alle sue spalle. Sono molte le occasioni per ammirare il fiordo e la cittadina dall'alto durante la vostra vacanza in Norvegia. Sulla ripida Strada delle Aquile (Ørnevegen) si trovano due punti di osservazione privilegiati – Dalsnibba, a 1500 metri d'altezza, e Flydalsjuvet con terrazze che si aprono sulla valle glaciale – circondati da vette imponenti. Percorrendo la Ørnesvingen, oltre a Geiranger e il fiordo, la cascata delle Sette sorelle (De syv søstrene) offre uno spettacolo meraviglioso. </p>
		<br>
		<p id="volo" class="text-center"><b>Le escursioni:</b></p>
		<br>
		<ul>
			<li> <b>Visita panoramica di Geiranger </b>- Codice escursione: <b>GER05</b>
			<br>
			Per la loro straordinaria bellezza, il paesino di Geiranger e la valle che porta lo stesso nome sono tra le località di villeggiatura più famose della Norvegia. Il percorso che vi porterà al Monte Dalsnibba vi vedrà salire per la valle di Oplenske, percorrere meravigliose strade di montagna e attraversare terreni coltivati prima di raggiungere Djupvatn.
				<ul>
					<li>Prezzo adulti a partire da 62 € P.P.</li>
					<li>Prezzo bambini a partire da 49 € P.P.</li>
				</ul>
			</li>
			<br>
			<li><b>Il monte Dalsibba</b> - Codice escursione: <b>GER01</b>
			<br>
			L'escursione inizia con un viaggio lungo il fiordo per poi salire sulla montagna percorrendo una strada con 11 tornanti. All'ultima curva, la Curva dell'aquila, vi fermerete per ammirare la meravigliosa vista che si apre sui dintorni: in lontananza potrete scorgere le vecchie fattorie tradizionali, testardamente abbarbicate su stretti tratti di roccia sopra il fiordo. 
				<ul>
					<li>Prezzo adulti a partire da 62 € P.P.</li>
					<li>Prezzo bambini a partire da 49 € P.P..</li>
				</ul>
			</li>
			<br>
			<li> <b>La Malga di Herdal</b> - Codice escursione: <b>GER03</b>
			<br>
			Scoprite l'incantevole panorama norvegese con questa escursione che inizia con un emozionante viaggio in pullman lungo gli 11 tornanti da capogiro della Ornevegen, la strada dell'aquila. È prevista una fermata alla Curva dell'Aquila, dove potrete ammirare le splendide cascate delle Sette Sorelle e il fiordo sottostante. 
				<ul>
					<li>Prezzo adulti a partire da 62 € P.P.</li>
					<li>Prezzo bambini a partire da 49 € P.P.</li>
				</ul>
			</li>
		</ul>
		<hr>
		<p id="volo" class="text-center"><b>Cabina:</b></p>
		<ul>
			<li>aria condizionata regolabile con termostato;</li>
			<li>TV interattiva satellitare a schermo piatto;</li>
			<li>Connessione Wi-Fi (a pagamento);</li>
			<li>Biancheria necessaria al soggiorno (lenzuola e asciugamani) cambiata regolarmente.</li>
			<li> Saponette e sapone liquido per la doccia;</li>
			<li> Minibar e Room Service 24 ore su 24 (a pagamento).</li>
		</ul>
		<br>
		<table class="table table-inverse">
		<thead>
			<tr>
			  <th scope="row"></th>
			  <td><b>Partenza: 9 ott.</b></td>
			  <td><b>Partenza: 16 ott.</b></td>
			</tr>
			</thead>
		 <tbody>
			<tr>
			  <th scope="row"> Cabina Interna </th>
			  <td>406</td>
			  <td>386</td>
			</tr>
			<tr>
			  <th scope="row">Cabina Esterna </th>
			  <td>589</td>
			  <td>556.</td>
			  <tr>
			  <th scope="row"> Cabina con balcone </th>
			  <td>670</td>
			  <td>620</td>
			</tr>
			</tr>
		  </tbody>
		</table>
		
		</div>
	</div>
	</div>
</div>

	<div class="container">
<div class="jumbotron">
			<div class="row voffset4">
			<a href="prenotazioni.php?camera=114" class="btn btn-primary btn-lg active">Prenota</a>
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