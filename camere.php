<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Agenzia Viaggi</title>
<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="style.css">

<style type="text/css">
    
</style>
</head>
<?php session_start();?>
<body>
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

  <?php
		//questa variabile arriva da strutture.php
				$struttura = $_REQUEST["idstruttura"];
		$host = "localhost";
		$username = "root";
		$password = "";
		$db = "agenzia";

		// effettuo la connessione
		$conn = new mysqli($host, $username, $password, $db);
		
		//prelievo nome struttura
		$sql= "select * from tbl_strutture where idstruttura=$struttura";
		$result = $conn->query($sql);
		$row = $result->fetch_assoc();
		$struttura_scelta= $row["nome"];
		echo"<h3><span class=\"label label-default\">CAMERE STRUTTURA</span><span class=\"label label-info\">$struttura_scelta</span></h3>";
		// imposto la query per estrarre tutte le camere che fanno parte della struttura scelta nella pagina strutture.php
		$sql = "SELECT * FROM tbl_camere where idstruttura=$struttura";
		// eseguo la query sulla connessione
		$result = $conn->query($sql);
		$i=1;
			while($row = $result->fetch_assoc()) {
				$idcamera = $row["idcamera"];
				$tipo = $row["tipo"];
				$capienza= $row["capienza"];
				$foto= $row["foto"];
				//questo controllo mi serve a stabilire quante righe dovrò inserire in base al numero di camere trovate
				if ($i==1) {
				echo "<div class=\"row\">";
				}	
				//devo fare in modo che la griglia di bootstrap per gestire le varie dimensioni della finestra, sia creata dinamicamente
				//php in base al numero di stanze trovate.
				echo "<div class=\"col-xs-12 col-sm-6 col-md-4\"><img class=\"img-thumbnail img-responsive\" src=\"$foto\"/>";
				echo" <p> $tipo - capienza massima: $capienza persone";
				//questa riga crea un link alla pagina delle prenotazioni che passa il numero della camera come variabile GET
				//l'id della stanza viene inserito in una variabile camera che viene inviata alla pagina delle prenotazioni
				echo"<a href=\"prenotazioni.php?camera=$idcamera\"> <span class=\"glyphicon glyphicon-search\"></span></a></p>";
				//qui è dove si chiude la colonna
				echo"</div>";
				
				if ($i==3) {
				//quando ho impaginato 3 strutture chiudo il div della riga
				echo "</div>";
				//terminata la prima riga composta da 3 colonne, rimetto i=1 per cominciare la seconda riga
				$i=1;
				} else {
				
				$i++;
				}
			}
			//questo è il caso in cui non trova nessuna struttura.
			if ($i!=1) {
          echo "</div>";
        }
		?>
		     
            
  
  
</div>

<div id="footerWrap" class="voffset2">
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
