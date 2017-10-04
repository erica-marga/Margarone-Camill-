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
  
  <div id="content">
<h3><span class="label label-default">CONTATTACI</span></h3>
<br>
    <form class="form-horizontal" name="Form1" id="Form1"  action="elabora.php" method="post" OnSubmit="return ControllaForm();">
	          <div class="form-group">
            <label class="control-label col-xs-3" for="Nome">Nome:</label>
            <div class="col-xs-9">
                <input type="text" name="nome" class="form-control" id="Nome" placeholder="Nome">
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-xs-3" for="Cognome">Cognome:</label>
            <div class="col-xs-9">
                <input type="text" name="cognome" class="form-control" id="Cognome" placeholder="Cognome">
            </div>
        </div>
		<div class="form-group">
            <label class="control-label col-xs-3" for="Email">Email:</label>
            <div class="col-xs-9">
                <input type="email" name="email" class="form-control" id="Email" placeholder="Email Address">
            </div>
        </div>
		<div class="form-group">
            <label class="control-label col-xs-3" for="richiesta">Inserisci la tua richiesta:</label>
            <div class="col-xs-9">
                <textarea class="form-control" name="Richiesta" id="richiesta"  placeholder="Inserisci la tua richiesta"></textarea>
            </div>
        </div>
            <div class="form-group">
            <div class="col-xs-offset-3 col-xs-9">
                <input type="submit" class="btn btn-primary" value="Invia">
                <input type="reset" class="btn btn-default" value="Cancella">
            </div>
        </div>
    </form>


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


<script>
function ControllaForm()
/* Crea alcune variabili dove memorizzare i dati inseriti dall'utente */
{	
var nome= document.Form1.Nome.value;
var cognome= document.Form1.Cognome.value;
var email= document.Form1.Email.value;
var richiesta= document.Form1.Richiesta.value;


/* Se la variabile "nome" è vuota o non definita, viene visualizzato un alert con messaggio di errore 
e si effettua il focus sul campo che ha generato l'alert di errore */

if ((nome === "" )|| (nome === "undefined"))
{
alert(" Attenzione: il campo Nome è obbligatorio ");
document.Form1.Nome.focus ();
return false;
}

/* Se la variabile "cognome" è vuota o non definita, viene visualizzato un alert con messaggio di errore 
e si effettua il focus sul campo che ha generato l'alert di errore */

else if ((cognome === "" )|| (cognome === "undefined"))
{
alert(" Attenzione: il campo Cognome è obbligatorio ");
document.Form1.Cognome.focus ();
return false;
}

/* Se la variabile "richiesta" è vuota o non definita, viene visualizzato un alert con messaggio di errore 
e si effettua il focus sul campo che ha generato l'alert di errore */

else if ((richiesta === "" )|| (richiesta === "undefined"))
{
alert(" Attenzione: il campo Richiesta è obbligatorio ");
document.Form1.Richiesta.focus ();
return false;
}


/* Se la variabile "email" è vuota o non definita, viene visualizzato un alert con messaggio di errore 
e si effettua il focus sul campo che ha generato l'alert di errore */

else if ((email === "" )|| (email === "undefined"))
{
alert(" Attenzione: il campo Email è obbligatorio ");
document.Form1.Email.focus ();
return false;
}

/* Controllo qualitativo sui dati inseriti: se l'email inserita non contiene la chiocciola viene visualizzato un alert con messaggio di errore 
e si effettua il focus sul campo che ha generato l'alert di errore. Se la chiocciola non viene trovata "indexOf" restituirà "-1" 
attivando il relativo alert. */

else if (email.indexOf("@") == -1 ) 
{
alert(" Attenzione: l'Email inserita non è valida");
document.Form1.Email.focus();
	return false;
}
else document.Form1.submit();
}

</script>

<script src="js/jquery-1.11.2.min.js"></script> 
<script src="bootstrap/js/bootstrap.min.js"></script>
</body>
</html>
