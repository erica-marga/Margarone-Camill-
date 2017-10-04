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
			 <div class="item active"><img src="img/valle.jpg"/> </div>
			<div class="item"><img src="img/valle3.jpg"/> </div>
			<div class="item"><img src="img/valle2.jpg"/> </div>
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
			<p id="promozione" class="text-center"><a href="https://www.tripadvisor.it/Hotel_Review-s1-g187865-d1633726-Reviews-Hotel_des_Glaciers-Courmayeur_Valle_d_Aosta.html"><b><i>Des Glaciers Hotel </i></b>- Via Della Vittoria 66 Courmayeur AO</a></p>
			<p id="info" class="text-center"><span class="glyphicon glyphicon-phone-alt" style="color:blue"></span>  0439 768731 </p>
			<p id="info" class="text-justify">Con una splendida posizione a Courmayeur, questo hotel in montagna e con accesso diretto alle piste da sci si trova a 5 km da Fun Park Dolonne e Skyway Monte Bianco: l'ideale per praticare escursioni con racchette da neve e altri sport invernali. Telecabina Dolonne e Courmayeur Forum Sport Center si trovano ugualmente a 15 minuti di distanza.</p> 
			<br>
			<p id="info" class="text-justify"> <b>Soggiorno:</b></p>
			<p id="info" class="text-justify"><span class="glyphicon glyphicon-bed"></span> Una camera per 2 adulti | Numero notti: 4</p>
			<p id="info" class="text-justify"> <span class="glyphicon glyphicon-signal"></span> WiFi gratuito </p>
			<p id="info" class="text-justify"> <span class="glyphicon glyphicon-cutlery"></span> Bar</p>
			<p id="info" class="text-justify"> <span class="glyphicon glyphicon-cutlery"></span>Colazione inclusa</p>
			<p id="info" class="text-justify"> Parcheggio interno
			<br>
			<br>
			<p id="info" class="text-justify"><b>Attività nelle vicinanze:</b></p>
			 <p id="info" class="text-justify">I servizi ricreativi di questo hotel includono accesso diretto alle piste da sci e ad un bagno turco.</p>
			<ul>
				<li>Escursioni con racchette da neve nelle vicinanze </li>
				<li>Lezioni di golf disponibili nelle vicinanze</li>
				<li>Pattinaggio su ghiaccio in loco</li>
				<li>Noleggio attrezzatura da sci in loco</li>
				<li>Sci di fondo in loco </li>
				<li>Lezioni di tennis in loco </li>
				<li>Snowboard in loco </li>
			</ul>
	</div>
</div>
<div class="jumbotron">
	<div class="container">
		<div class="row voffset4">
			<a href="prenotazioni.php?camera=122" class="btn btn-primary btn-lg active">Prenota</a>
		</div>
	</div>
</div>		