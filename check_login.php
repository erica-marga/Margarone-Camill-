<?php
    

        session_start();
		//recupero dati dal form di login 
        $username=$_REQUEST["UserName"];
        $password=$_REQUEST["Password"];

		$connessione = new mysqli("localhost","root","","agenzia");

        echo $username."\n";
        echo $password."\n";

        
        $sql= "SELECT password FROM tbl_utenti where username='$username'";
        
		//serve a verificare se la query sul database è riuscita.
        if (!($risultato = $connessione->query($sql)))
                die("Query sugli utenti fallita!");

          // questo if serve a verificare se la query ha trovato un risultato. in questo specifico caso sappiamo che la query
		  //può restituire 0 righe(usermane inserito è sbagliato) o una riga soltanto (usermane è presente nel db 
		  //e quindi posso verificare password)
		  if ($riga = $risultato->fetch_array()) {
			  //questa è la password dentro il database
                      $pwd=$riga["password"];
                      echo $pwd."\n";
					  //confronto la password del database con quella ricevuta dal form
                      if ($pwd==$password) {
                        echo "OK\n";
                    	//creo una variabile di sessione da usare nelle altre pagine. mi servirà per visualizzare il nome dell'utente dentro
						//la barra di navigazione
                        $_SESSION["UserName"]=$username;
						
						//a questo punto devo verificare se ho fatto il login volontariamente o perchè sono stato costretto
						//dalla pagina delle prenotazioni che è protetta.
						//per sapere se la richiesta di login proviene dalla pagina delle prenotazioni, devo verificare se esiste
						//una variabile di sessione con il numero della camera che volevo prenotare.
						//se esiste allora header mi riporta alla pagina delle prenotazioni.
						//se non esiste, significa che ho fatto login volontariamente, quindi vengo riportato a index.php
						if (isset($_SESSION["camera"]))
						{
							$idcamera= $_SESSION["camera"];
							echo $idcamera;

							header('Location: prenotazioni.php?idcamera='.$idcamera);
							echo "vai a prenotazioni";
							exit;
						}
						else
						{
							header('Location: index.php');	
							echo "vai a index";
							echo $username."\n";
							echo $password."\n";
							exit;
						}
                      }

                }
				echo"vai a login";
                //login fallito a causa di dati errati
				header('Location: login2.php');
                exit;
  ?>
