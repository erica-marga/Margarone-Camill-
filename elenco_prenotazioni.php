<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Agenzia Viaggi - perilongu</title>
<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="style.css">

</head>
<?php
session_start();
?>
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
              <li><a href="#">Prenotazioni</a></li>
              
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
 
	<h3><span class="label label-default">ELENCO PRENOTAZIONI</span></h3>
	<br>	
   <table class="table table-condensed table-striped">  
        <thead>  
          <tr>  
        
            <th>Utente</th>  
            <th>Struttura</th>  
			<th>Posti</th>  
            <th>Checkin</th>
			<th>Checkout</th>
          </tr>  
        </thead>  
        <tbody>  
		<?php
		
		
		$host = "localhost";
		$username = "root";
		$password = "";
		$db = "agenzia";

		// effettuo la connessione
		$conn = new mysqli($host, $username, $password, $db);

		// imposto la query
		$sql = "SELECT u.cognome,u.nome,p.data_inizio,p.data_fine,p.posti,s.nome AS struttura,s.citta from tbl_utenti as U INNER JOIN tbl_prenotazioni as P ON u.idutente=p.idutente INNER JOIN tbl_camere as c on c.idcamera=p.idcamera INNER JOIN tbl_strutture as s ON c.idstruttura=s.idstruttura order by p.data_inizio";
		// eseguo la query sulla connessione
		
		$result = $conn->query($sql);
			while($row = $result->fetch_assoc()) {
				$cognome = $row["cognome"];
				$nome = $row["nome"];
				$checkin = $row["data_inizio"];
				$checkout= $row["data_fine"];
				$citta= $row["citta"];
				$struttura= $row["struttura"];
				$posti= $row["posti"];
				echo "<tr>";
				echo"<td>$cognome $nome</td>";
				echo"<td>$struttura</td>";
				echo"<td>$posti</td>";
				$miadatain = date("d/m/Y", strtotime($checkin));
				$miadataout = date("d/m/Y", strtotime($checkout));
				echo "<td>$miadatain</td>";
				echo "<td>$miadataout</td>";
				echo "</tr>";
			}
		?>
		
		
        </tbody>  
      </table>
  
  
</div>

</div>
</div>
<div id="footerWrap" class="voffset2 container">
  <footer class="container">
    <p class="text-right">Contatti: ipsum dolor sit amet, consectetur adipiscing elit. Fusce justo metus</p>
	<p class="text-right">Indirizzo: consectetur adipiscing elit. Fusce justo metus</p>
	<p class="text-right">Mail: dolor sit amet, consectetur adipiscing elit. Fusce justo metus</p>
  </footer>
</div>
<script src="js/jquery-1.11.2.min.js"></script> 
<script src="bootstrap/js/bootstrap.min.js"></script>
</body>
</html>
