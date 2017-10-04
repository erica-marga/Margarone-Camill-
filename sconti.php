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
	<div class="row voffset4" id="widgets">
      <div class="col-md-4 col-xs-6">
        <h3 class="text-center">Tropea - Italia</h3>
        <a href="tropea.php">
		<img class="img-thumbnail img-responsive"  src="img/sconti_4.jpg"/>
		</a>
        <p class="voffset2"> Un viaggio a Tropea vi condurrà nell’sola caratterizzata da strade strette e piazze improvvise, scorci suggestivi e viste sul mare di un intenso colore turchese a meno di 50 km da Vibo Valentia.</p>
		<p class="voffset2"><b>A soli 250€ a persona</b></p>
        <a href="tropea.php" class="btn btn-default pull-right voffset2">Scopri le offerte e prenota!</a> </div>
		
      <div class="col-md-4 col-xs-6">
        <h3 class="text-center">Otranto - Italia</h3>
         <a href="otranto.php">
		<img class="img-thumbnail img-responsive" src="img/otranto.jpg"/>
		</a>
        <p class="voffset2"> Per secoli centro culturale, politico ed economico del Salento e considerata fin dall’antichità un ponte naturale tra Mediterraneo ed Oriente, Otranto conserva ancora le tracce dell’incontro e della commistione tra diverse culture.</p>
        <p class="voffset2"><b>A soli 450€ a persona</b></p>
		<a href="otranto.php" class="btn btn-default pull-right voffset2">Scopri le offerte e prenota!</a> </div>
      
	  <div class="col-md-4 col-xs-6">
        <h3 class="text-center">Gallipoli - Italia</h3>
        <a href="gallipoli.php">
		<img class="img-thumbnail img-responsive" src="img/sconti_6.jpg"/>
		</a>
        <p class="voffset2">Che tu stia pensando a una vacanza romantica o a un viaggio con la famiglia, i nostri pacchetti vacanza per Gallipoli rendono la pianificazione del tuo viaggio semplice e conveniente.</p>
		<p class="voffset2"><b>A soli 400€ a persona</b></p>
        <a href="gallipoli.php"class="btn btn-default pull-right voffset2">Scopri le offerte e prenota!.</a> </div>
	</div>

	<div class="row voffset4" id="widgets">
		<div class="col-md-4 col-xs-6">
        <h3 class="text-center">Ibiza - Spagna</h3>
        <a href="ibiza.php">
		<img class="img-thumbnail img-responsive" src="img/ibiza.jpg"/>
		</a>
        <p class="voffset2">Visita la terza isola delle Baleari per le sue spiagge immacolate e la travolgente vita notturna per cui è nota in tutto il mondo.</p>
		<p class="voffset2"><b>A soli 350€ a persona</b></p>
        <a href="ibiza.php" class="btn btn-default pull-right voffset2">Scopri le offerte e prenota!</a> </div>
		
		<div class="col-md-4 col-xs-6">
        <h3 class="text-center">Isola di Rodi - Grecia</h3>
        <a href=" isola_di_rodi.php">
		<img class="img-thumbnail img-responsive" src="img/sconti_8.jpg"/>
        </a>
		<p class="voffset2">Scopri la bellezza infinita delle isole mitologiche del Mar Egeo, piccoli paradisi, veri e propri musei a cielo aperto dove trascorrere vacanze con un giusto mix di relax e divertimento.</p>
        <p class="voffset2"><b>A soli 350€ a persona</b></p>
		<a href=" isola_di_rodi.php" class="btn btn-default pull-right voffset2">Scopri le offerte e prenota!</a> </div>
		
		<div class="col-md-4 col-xs-6">
        <h3 class="text-center">Zagabria - Croazia</h3>
        <a href="zagabria.php">
		<img class="img-thumbnail img-responsive" src="img/sconti_9.jpg"/>
		</a>
        <p class="voffset2"> Immergiti in una città ricca di storia e cultura...scopri la Croazia con i nostri pacchetti. Prenota subito!.</p>
		<p class="voffset2"><b>A soli 450€ a persona</b></p>
        <a href="zagabria.php"class="btn btn-default pull-right voffset2">Scopri le offerte e prenota!</a> </div>
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