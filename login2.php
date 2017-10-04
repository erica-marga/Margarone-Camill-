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
  
<section id="loginForm">
<form action="check_login.php" class="form-horizontal" method="post" role="form">
        <div class="container">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <center>
                            <img src="img/logo.jpg" style="padding-bottom:20px"/>
							<p> Per accedere alla prenotazioni effettua il login. <p>
							<p><a href="registra.php">Registrati</a></p>
                        </center>
                    </div>
                    <div class="modal-body">
                        <p class="col-sm-offset-2 col-sm-8">
                            
                            
                            <div class="form-group ">
                                
                                <label class="col-sm-4 control-label" for="Nome_utente">Nome utente</label>
                                <div class="col-sm-6">
                                    <input class="form-control" id="UserName" name="UserName" type="text" value="" />
                                    
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-4 control-label" for="Password">Password</label>
                                <div class="col-sm-6">
                                    <input class="form-control" id="Password" name="Password" type="password" />
                                    
                                </div>
                            </div>
                            
                        </p>

                    </div>
                    <div class="modal-footer">
                        <div class="form-group">
                            <div class="col-sm-offset-2 col-sm-10">
                                <input type="submit" value="Accedi" class="btn btn-default" />
                            </div>
                        </div>
                        
                        
                    </div>
                </div>
            </div>
        </div>
</form>   
 </section>
</body>
</html>
