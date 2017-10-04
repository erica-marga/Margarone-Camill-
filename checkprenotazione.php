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
  <div id="content">

<?php
	
		$host = "localhost";
		$username = "root";
		$password = "";
		$db = "agenzia";
		// effettuo la connessione
		$conn = new mysqli($host, $username, $password, $db);
		
	if (isset($_REQUEST["idutente"]))
{
  		$utente=$_REQUEST["idutente"];

}

//la pagina check prenotazioni serve ad inserire i dati nella tabella prenotazioni. 
//prima di fare l'inserimento devo controllare se i campi ci sono tutti con l'istruzione isset. 
//il numero della stanza (idstanza) può arrivare direttamente dal form (_request[camera]) se ho fatto login prima di arrivare a prenotazioni, 
//oppure da _sessione[camera] se NON ho fatto il login prima di arrivare a prenotazioni e quindi l'ho dovuto salvare prima di costringere l'utente 
//a fare il login.
//il ciclo if quindi controlla se esiste la variabile di sessione. se esiste inserisce il valore dentro idstanza, 
//se non esiste la variabile di sessione allora esiste sicuramente la variabile _request.
	if (isset($_SESSION["camera"]))
	{
  		$idstanza=$_SESSION["camera"];

	}
	else
	{ $idstanza=$_REQUEST["camera"];
	}

	if (isset($_REQUEST["datain"]))
{
  		$datain=$_REQUEST["datain"];

}	
		
	
	if (isset($_REQUEST["dataout"]))
{
  		$dataout=$_REQUEST["dataout"];

}
	if (isset($_REQUEST["posti"]))
{
  		$posti=$_REQUEST["posti"];

}
$miadatain = date("Y-m-d", strtotime($datain));
$miadataout= date("Y-m-d", strtotime($dataout));
	
		$sql= "INSERT INTO tbl_prenotazioni (idutente,idcamera,data_inizio,data_fine,posti) VALUES ($utente,$idstanza,'$miadatain','$miadataout','$posti')";


		if ($conn->query($sql) === TRUE) {
    echo "<p class=\"text-center\"><span class=\"label label-info\">STRUTTURA PRENOTATA CORRETTAMENTE</span></p><br>";
//le date inserite nel form di prenotazioni vengono viste da chrome come stringhe di testo. 
//prima di inserire le date nel database le converto e le formatto nel giusto modo. mysql le vuole y-m-d.
//nella pagina di conferma prenotazione non posso usare _request[datain] per chè mi visualizzerebbe i dati nel modo sbagliato. 
//ecco perchè devo di nuovo convertire in data (sono delle stringhe) e poi formattarle nel modo europeo d-m-y
	$miadatain = date("d/m/Y", strtotime($datain));
	$miadataout = date("d/m/Y", strtotime($dataout));
	$sql = "SELECT * FROM tbl_utenti where idutente=$utente";

	$result = $conn->query($sql);	
	$row = $result->fetch_assoc();
	$nome = $row["nome"];
	$cognome = $row["cognome"];
	echo "<p>Gentile Sig.Re <b>$nome $cognome</b>, siamo felici di confermale la sua prenotazione per il periodo dal <b>$miadatain</b> al <b>$miadataout</b></p>";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
	
}

	
		
?>
  


</div>
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
