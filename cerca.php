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
<h3><span class="label label-default">CERCA STRUTTURE</span></h3><br>
	<form id="mioform" class="form-horizontal">
 
 
		<div class="form-group">
            <label class="control-label col-xs-3">Scegli un paese:</label>
            <div class="col-xs-3">
                <select name="idnazione" id="idnazione" class="form-control">
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
        <br>
        
	</form>             
            
         
</div>
 
</div>

<div class="container">
<br>
<!-- dentro questo id viene inserito il codice html creato dalla pagine del webservice-->
<div id="dati">
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

<script type="text/javascript">  
  $(document).ready(function(){
	  //quando il valore del tag html con id=idnazione fai qualcosa....idnazione è il nome che ho dato al menù a tendina
    $("#idnazione").change(function(){
		//in una variabile conservo il valore del value selezionato nel menù a tendina; 
		// .find(":selected")= trova il valore selezionato  .val() = restituisci il valore
        var selectedOption = $(this).find(":selected").val();
        //alert("You have selected - " + selectedOption);
		//per evitare di avere un'altra pagina in cui mostrare i dati delle strutture, faccio una chiamata asincrona ad una pagina 
		//che si occuperà di costruire la tabella dei risultati e restituirla alla pagina di ricerca. 
		//uso il metodo AJAX con questi parametri
		
		$.ajax({
			// uso il valore POST perchè invio un parametro al webservice che gli servirà per restituire i dati corretti.
          type: "POST",
			// il parametro url indica la pagina che AJAX chiama per ottenere i risultati che vogliamo.
          url: "strutture_webservice.php",  
         // il parametro data indica una o più valori che passo al webservice. idnazione è il nome con cui cercherò tramite _REQUEST il valore passato
		 //data="idnazione" è una variabile che serve in questo momento  +selectedOption è il contenuto della variabile
		  data: "idnazione=" + selectedOption ,
          // Questo parametro specifica il formato con cui mi aspetto di ricevere i dati dal webservice.
		  dataType: "html",
		  //in caso di successo alla chiamata e presenza di dati, devo eseguire una funzione che inserisca i risultati in un punto ben preciso
		  //di questa pagina. indico che tutti i dati ottenuti sono su una variabile che si chiama risposta.
          success: function(risposta) {  
		  // all'interno dell'elemento con #dati usa il metodo .html per scrivere i risultati. il metodo .html vuole del codice html. 
		  //questo codice è quello restituito dal webservice.
            $("#dati").html(risposta);  
          },
		  //alert nel caso la chiamata Ajax dovesse fallire
          error: function(){
            alert("Chiamata fallita!!!");
			} 
        }); 
    });
});
    </script>

</body>
</html>
