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
			 <div class="item active"><img src="img/mediterraneo3.jpg"/> </div>
			<div class="item"><img src="img/mediterraneo4.jpg"/> </div>
			<div class="item"><img src="img/mediterraneo5.jpg"/> </div>
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
				<img class="img-thumbnail img-responsive" src="img/mediterraneo2.jpg"/>
			</div>
			<div class="col-sm-6">
				<p id="promozione" class="text-center"> <b><i>Mar Mediterraneo </i></b></p>
				<p id="promozione" class="text-center">Costa Crociere | 8 giorni a bordo della Costa Diadema da Savona </p>
			</div>
		</div>
		<br>
		<div class="col-sx-12">
			<p id="info" class="text-justify">In una crociera Costa la tua cabina diventa un'oasi di comfort. Suite, con Balcone sul mare, esterne vista mare e interne: le nostre cabine ti offrono un servizio puntuale e accurato, un panorama che cambia ogni giorno senza rinunciare alle comodità di casa tua. </p>
		</div>
		<br>
		<p id="volo" class="text-center"><b>Cabina:</b></p>
		<p id="info" class="text-left">È facile sentirsi a proprio agio durante una vacanza Costa. Sulle navi ci sono cabine adatte a ogni esigenza, in termini di spazio, funzionalità e posizione, senza mai rinunciare al comfort di cui si ha bisogno per rilassarsi. Le cabine sono arredate in stile moderno e offrono piccole e grandi comodità, unite a un servizio eccellente, perché chiunque possa pensare soltanto a godersi il viaggio. In ogni cabina delle navi Costa, trovi:</p>
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
			<a href="prenotazioni.php?camera=113" class="btn btn-primary btn-lg active">Prenota</a>
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