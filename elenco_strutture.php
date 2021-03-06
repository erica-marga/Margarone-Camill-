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
<?php
session_start();
?>
<body>
<<div id="headerWrap">
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
 
	<h3><span class="label label-default">ELENCO STRUTTURE</span>
	<a class ="btn btn-default btn-sm glyphicon glyphicon-plus" href="newstruttura.php" role="button"></a></h3> 
	
	
   <table class="table table-condensed table-striped">  
        <thead>  
          <tr>  
        
            <th>Tipo</th>  
            <th>Nome</th>  
			<th>Città</th>  
            <th>Funzioni</th>
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
		$sql = "SELECT N.nome as nazione, S.idstruttura,S.tipo,S.nome,S.citta from tbl_nazioni AS N INNER JOIN tbl_strutture AS S ON N.idpaese=S.idpaese order by nazione";
		// eseguo la query sulla connessione
		
		$result = $conn->query($sql);
			while($row = $result->fetch_assoc()) {
				$idstruttura = $row["idstruttura"];
				$nazione = $row["nazione"];
				$tipo = $row["tipo"];
				$nome= $row["nome"];
				$citta= $row["citta"];
				echo "<tr>";
				echo"<td>$tipo</td>";
				echo"<td>$nome</td>";
				echo"<td>$citta</td>";
				echo "<td><a href=\"dettagli_struttura.php?id=$idstruttura\" title=\"dettagli\" class=\"btn btn-default btn-sm glyphicon glyphicon-list-alt\"></a>";
				echo "<a href=\"edit_struttura.php?id=$idstruttura\" title=\"modifica\" class = \"btn btn-default btn-sm glyphicon glyphicon-pencil\"></a>";
				echo "<a href=\"delete_struttura.php?id=$idstruttura\" title=\"cancella\" class = \"btn btn-default btn-sm glyphicon glyphicon-trash\"></a></td>";
				echo "</tr>";
			}
		?>
		
		
        </tbody>  
      </table>
  
  
</div>

</div>
</div>
<<div id="footerWrap" class="voffset2">
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
