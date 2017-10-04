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
			 <div class="item active"><img src="img/copenaghen2.jpg"/> </div>
			<div class="item"><img src="img/copenaghen3.jpg"/> </div>
			<div class="item"><img src="img/copenaghen4.jpg"/> </div>
		</div>
			<!-- i controlli --> 
		<a class="left carousel-control" href="#carousel" role="button" data-slide="prev"> <span class="glyphicon glyphicon-chevron-left"></span></a> 
		<a class="right carousel-control" href="#carousel" role="button" data-slide="next"> <span class="glyphicon glyphicon-chevron-right"></span></a> 
		</div>
</div>
	
<div class="container">
	<div class="col-sm-12">
	<div id="container">
		<p id="promozione" class="text-center"><a href="https://www.tripadvisor.it/Hotel_Review-g189541-d232090-Reviews-Comfort_Hotel_Vesterbro-Copenhagen_Zealand.html"><b><i>Comfort Hotel Vesterbro </i></b></a></p>
		<p id="promozione" class="text-center">Vesterbrogade 23-29, Vesterbro, 1620 Copenaghen, Danimarca </p>
		<p id="info" class="text-center"><span class="glyphicon glyphicon-phone-alt" style="color:blue"></span> +39 800 871 698 </p>
		<br>
		<div class="col-sx-12">
		<p id="info" class="text-justify">Situato nel quartiere alla moda di Vesterbro, a circa 5 minuti a piedi dalla stazione centrale di Copenaghen e dal parco divertimenti Tivoli, questo hotel offre la connessione Wi-Fi gratuita e una variegata colazione a buffet. Vesterbro è un'ottima scelta per i viaggiatori interessati allo shopping, ai musei e alla cultura. </p>
		</div>
		<p id="promozione" class="text-center">Il prezzo include:</p>
		<p id="info" class="text-justify"><span class="glyphicon glyphicon-bed"></span>  Una camera per 2 adulti | Numero notti: 5
		<p id="info" class="text-left"><span class="glyphicon glyphicon-bed"></span>camera/e multipla/e: 1, camera/e singola/e: 4, camera/e doppia/e: 8
		<p id="info" class="text-left"> <span class="glyphicon glyphicon-signal"></span> WiFi gratuito </p>
		<p id="info" class="text-left"> <span class="glyphicon glyphicon-cutlery"></span> Colazione inclusa</p>
		<p id="info" class="text-left"> <span class="glyphicon glyphicon-euro"></span> Bonifico, contanti, Ec-Cash / Maestro, si accettano carte di credito</p>
		<p id="info" class="text-left"><span class="glyphicon-glyphicon-comment"></span>Lingue straniere:francese, inglese, tedesco
		
</div>
	
<div class="jumbotron">
	<div class="container">
		<div class="row voffset4">
			<a href="prenotazioni.php?camera=109" class="btn btn-primary btn-lg active">Prenota</a>
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