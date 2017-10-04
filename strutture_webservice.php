
  <?php 
	
		//questo valore arriva dalla pagina cerca.php
		$idpaese=$_REQUEST["idnazione"];

		$host = "localhost";
		$username = "root";
		$password = "";
		$db = "agenzia";
		
		// effettuo la connessione
		$conn = new mysqli($host, $username, $password, $db);

		// questa query serve ad estrarre dalla tabella nazioni il nome del paese. mentre dalla tabella strutture ricava tutte le strutture
		//che soddisfano la clausare where idpaese è uguale a quello inviato dalla pagina cerca.php
		$sql = "SELECT N.nome as nazione, S.idstruttura,S.tipo,S.nome,S.citta from tbl_nazioni AS N INNER JOIN tbl_strutture AS S ON N.idpaese=S.idpaese where s.idpaese=$idpaese";
		// eseguo la query sulla connessione
		$result = $conn->query($sql);
		//$row = $result->fetch_assoc();
		//$nazione = $row["nazione"];

		echo"<table class=\"table table-striped\">";  
        echo"<thead><tr>";  
        echo"<th>Tipo</th><th>Nome</th><th>città</th>";
		echo"</tr></thead>";
		echo"<tbody>";
		
				
			while($row = $result->fetch_assoc()) {
				$idstruttura = $row["idstruttura"];
				$nazione = $row["nazione"];
				$tipo = $row["tipo"];
				$nome= $row["nome"];
				$citta= $row["citta"];
				echo "<tr><td>$tipo</td><td><a href=\"camere.php?idstruttura=$idstruttura\">$nome</a></td><td>$citta</td></tr>";
			}
		echo"</tbody></table>";
		?>
		
		
        
  
		
		
		
