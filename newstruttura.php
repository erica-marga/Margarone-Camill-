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
<?php session_start();
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
<div class="bs-example">
    <h3><span class="label label-default">NUOVA STRUTTURA</span></h3>
    <form class="form-horizontal" action="insertstruttura.php" method="post">
		
<div class="form-group">
            <label class="control-label col-xs-3">Scegli un paese:</label>
            <div class="col-xs-3">
                <select name="nazione" id="nazione" class="form-control">
				<?php
					// imposto i parametri di connessione
					$host = "localhost";
					$username = "root";
					$password = "";
					$db = "agenzia";

					// effettuo la connessione
					$conn = new mysqli($host, $username, $password, $db);

					// imposto la query
					$sql = "SELECT * from tbl_nazioni order by nome";

					// eseguo la query sulla connessione
					$result = $conn->query($sql);

					// scansione della tabella dei risultati
					
					while ($row = $result->fetch_assoc()) {

					// per ogni nazione, creo una voce di menu
						$idpaese = $row["idpaese"];
						$nazione = $row["nome"];
					echo "<option value=\"$idpaese\">$nazione</option>";
					}
					?>
				    
				
                </select>
            </div>
		</div>
	
	
	   <div class="form-group">
            <label class="control-label col-xs-3" for="tipo">Tipo di struttura:</label>
            <div class="col-xs-3">
                <select name="tipo" class="form-control" id="tipo" placeholder="Tipo">
				<option value="Hotel">Hotel</option>
				<option value="Casa vacanze">Casa vacanze</option>
				<option value="B&B">B&B</option>
				</select>
            </div>
        </div>
		   <div class="form-group">
            <label class="control-label col-xs-3" for="nome">Nome:</label>
            <div class="col-xs-9">
                <input type="text" name="nome" class="form-control" id="nome" placeholder="Nome">
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-xs-3" for="citta">Città:</label>
            <div class="col-xs-9">
                <input type="text" name="citta" class="form-control" id="città" placeholder="Citt&agrave;">
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-xs-3" for="capienza">Capienza:</label>
            <div class="col-xs-9">
                <input type="text" name="capienza" class="form-control" id="capienza" placeholder="Capienza">
            </div>
        </div>
		
        <br>
        <div class="form-group">
            <div class="col-xs-offset-3 col-xs-9">
			
                <input type="submit" class="btn btn-primary" value="Submit">
                <input type="reset" class="btn btn-default" value="Reset">
            </div>
        </div>
    </form>
</div>

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
