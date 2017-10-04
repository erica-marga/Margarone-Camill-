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
<h3><span class="label label-default">NUOVA PRENOTAZIONE</span></h3>  
	<div id="content">

    
    <form class="form-horizontal" action="checkprenotazione.php" method="post">
	 <div class="row">
        
		<?php
		// imposto i parametri di connessione
					$host = "localhost";
					$username = "root";
					$password = "";
					$db = "agenzia";
					//questa variabile mi serve per riprendere i dati della stanza.
					// se esiste questa variabile vuol dire che NON ho fatto il login prima di arrivare a prenotazioni
					if (isset($_SESSION["camera"]))
						{
						$camera = $_SESSION["camera"];						}
						else
					    //se la variabile di sessione non esiste significa che ho fatto login prima di arrivare a prenotazioni
						{
						$camera = $_REQUEST["camera"];
						//creo un input type nascosto per passare il numero della camera alla pagina che esegue l'inserimento della prenotazione
						echo"<input type=\"hidden\" name=\"camera\" value=\"$camera\">";
						}
					
					// effettuo la connessione
					$conn = new mysqli($host, $username, $password, $db);
					//devo recuperare idutente per inserirlo nella tabella prenotaziobi
					$sql= "select idutente from tbl_utenti where username='$utente'";
					
					$result = $conn->query($sql);
					$row = $result->fetch_assoc();
					//mi serve come valore di input hidden da passare per l'inserimento della prenotazione
					$idutente= $row["idutente"];
					// imposto la query riprendere i dati della stanza
					$sql = "select s.tipo,s.nome as struttura,s.citta,c.tipo as tipo_camera,c.capienza,c.foto from tbl_strutture as S inner join tbl_camere as C on S.idstruttura=C.idstruttura where c.idcamera=$camera";
					// eseguo la query sulla connessione
					$result = $conn->query($sql);

					// scansione della tabella dei risultati
					
					$row = $result->fetch_assoc();

					$struttura = $row["struttura"];
					$citta = $row["citta"];
					$foto = $row["foto"];
					$tipo_camera = $row["tipo_camera"];
					echo"<div class=\"col-sm-6\"><!--Column left-->";
					echo "<p>Tipo struttura: $struttura</p>";
					echo "<p>Città: $citta</p>";
					echo "<p>Tipo camera: $tipo_camera</p>";
					echo "<img class=\"img-thumbnail img-responsive\" src=\"$foto\"/>";
					echo"</div>";			
					?>
		

        
		<div class="col-sm-6"><!--Column right-->
			<?php 
		    	echo"<input type=\"hidden\" name=\"idutente\" value=\"$idutente\">";?>
				<div class="form-group">
            <label class="control-label col-xs-3" for="datain">Data arrivo:</label>
            <div class="col-xs-9">
                <input type="date" name="datain" class="form-control" id="datain" placeholder="Data arrivo">
            </div>
        </div>
	   
		<div class="form-group">
            <label class="control-label col-xs-3" for="dataout">Data partenza:</label>
            <div class="col-xs-9">
                <input type="date" name="dataout" class="form-control" id="dataout" placeholder="Data partenza">
            </div>
        </div>
		
        <div class="form-group">
            <label class="control-label col-xs-3" for="posti">N° Persone:</label>
            <div class="col-xs-9">
                <input type="text" name="posti" class="form-control" id="posti" placeholder="posti">
            </div>
        </div>
		
        <br>
        <div class="form-group">
            <div class="col-xs-offset-3 col-xs-9">
			
                <input type="submit" class="btn btn-primary" value="Submit">
                <input type="reset" class="btn btn-default" value="Reset">
            </div>
        </div>

		</div>
    
	</div>	
	        
				
		
               
		
    </form>

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
