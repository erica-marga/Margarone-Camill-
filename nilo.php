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
			 <div class="item active"><img src="img/nilo2.jpg"/> </div>
			<div class="item"><img src="img/nilo3.jpg"/> </div>
			<div class="item"><img src="img/nilo4.jpg"/> </div>
		</div>
			<!-- i controlli --> 
		<a class="left carousel-control" href="#carousel" role="button" data-slide="prev"> <span class="glyphicon glyphicon-chevron-left"></span></a> 
		<a class="right carousel-control" href="#carousel" role="button" data-slide="next"> <span class="glyphicon glyphicon-chevron-right"></span></a> 
		</div>
</div>
	
<div class="container">
	<div class="col-sm-12">
	<div id="container">
		<p id="promozione" class="text-center"> <b><i>Mar Rosso </i></b></p>
		<p id="promozione" class="text-center">Crociera: M/n Emilio - Navigazione sul Nilo </p>
		<br>
		<div class="col-sx-12">
			<p id="info" class="text-justify">L'Egitto più classico e suggestivo visto dalle sponde del Nilo, il fiume che ne ha segnato la storia millenaria. La navigazione avviene da Luxor ad Aswan, e viceversa. Lungo il lento fluire della corrente scorreranno come per incanto i secoli, rispecchiandosi nei templi di Karnak e di Luxor, di Edfu, di Kom Ombo e di Abu Simbel. Un viaggio romantico sul filo della storia. Il programma prevede il trattamento di pensione completa e 1 soft drink a pasto a bordo della motonave. </p>
			</div>
			<p id="promozione" class="text-center">Il prezzo include:</p>
			<p id="info" class="text-justify"><span class="glyphicon glyphicon-plane"></span>  Viaggio aereo di andata e ritorno in classe economica</p>
			<p id="info" class="text-left"><span class="glyphicon glyphicon-bed"></span>1x Camera Doppia in Pensione Completa con bevanda ai pasti</p>
			<p id="info" class="text-left"><span class="glyphicon glyphicon-transfer"></span>Trasferimenti da/per aeroporto</p>
			<p id="info" class="text-left"><span class="glyphicon glyphicon-user"></span> Visto d'ingresso (per soggiorni in Egitto o Giordania o Israele o tutti se in combinato) </p>
			<p id="info" class="text-left"> <span class="glyphicon glyphicon-euro"></span> Assicurazione Medico/Bagaglio</p>
			<p id="info" class="text-left"> <span class="glyphicon glyphicon-euro"></span> Spese gestione pratica</p>
			<p id="info" class="text-left"><span class="glyphicon glyphicon-comment"></span>Lingue straniere:francese, inglese, tedesco</p>
			<p id="volo" class="text-left"><b> Volo:</b></p>
		<table class="table table-inverse">
		  <tbody>
			<tr>
			  <th scope="row">Bergamo - Marsa Alam </th>
			  <td>Ore 7:00 - lunedì 9 ott.</td>
			  <td>Ore 11:25 - lunedì 9 ott.</td>
			</tr>
			<tr>
			  <th scope="row">Marsa Alam - Bergamo </th>
			  <td>Ore 12:10 - lunedì 23 ott.</td>
			  <td>Ore 16:50 - lunedì 23 ott.</td>
			</tr>
		  </tbody>
		</table>
			<p id="info" class="text-left">Operato da:<b> MERIDIANA FLY S.P.A</b>.</p>
			<p id="condizioni" class="text-left">* Le offerte e i prezzi pubblicati in questo sito sono soggetti a variazione, a seguito della verifica di disponibilità dei posti volo e della tipologia di camera richiesta che compongono il pacchetto (la variazione può avvenire nella fase di acquisto denominata “Il tuo preventivo”)</p>
		</div>
	</div>
	</div>
</div>

<div class="container">	
<div class="jumbotron">
			<div class="row voffset4">
			<a href="prenotazioni.php?camera=112" class="btn btn-primary btn-lg active">Prenota</a>
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