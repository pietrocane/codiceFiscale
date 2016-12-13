<?php
    $Cognome = strtoupper($_POST['cognome']);
    $Nome = strtoupper($_POST['nome']);
    $Comune = $_POST['comune'];
    $Sesso = $_POST['sesso'];
?>

<html>
    <head>
        <title>Codice Fiscale</title>
        <style>
            div.container{
	            width: 100%;
            }
            label{
                 width: 200px;
                 display: inline-block;
				 color: blue;
            }
            body{
	            margin:0px;
	            width:100%;
	            height:100%;
	            background-color: blue;
	            background-repeat:no-repeat;
                background-attachment:fixed;
	            background-position:center; 
            }
            h1{
	            text-align:center;   
            }
            header{
	            padding:0.1em;
	            color:white;
	            background-color:blue;
	            clear:left;
	            text-align:center;
            }
            footer{
                position:relative;
                bottom:0;
	            padding:0.5em;
	            color:white;
	            background-color:blue;
	            clear:left;
	            text-align:center; 
            }
            fieldset{
	            background-color: white;
	            border: 2px solid black;
	            margin: 12px;
            }
        </style>
		 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    </head>
    <body>
        <div class="container">
			<div class="row">
			
            
            <header>
		     <div class = "jumbotromb text-center">
                <h3>Codice Fiscale</h3>
				</div>
            </header>
        </div>
		
		
        <form method="post" action="index4.php">
            <fieldset>
			
			
			 <br></br>
				 <div class="form-group">
					<label class="control-label col-sm-2" for="email" >DATA DI NASCITA</label>
					<div class="col-sm-10">
					  <input type="text" button class="btn btn-default dropdown-toggle" name="giornonascita" id="giornonascita" placeholder="DD"/>
					  <select button class="btn btn-default dropdown-toggle" name = "mesenascita" id="mesenascita">
					</div>
				  </div>
				  
        
                    <option value="Gennaio">Gennaio</option>
                    <option value="Febbraio">Febbraio</option>
                    <option value="Marzo">Marzo</option>
                    <option value="Aprile">Aprile</option>
                    <option value="Maggio">Maggio</option>
                    <option value="Giugno">Giugno</option>
                    <option value="Luglio">Luglio</option>
                    <option value="Agosto">Agosto</option>
                    <option value="Settembre">Settembre</option>
                    <option value="Ottobre">Ottobre</option>
                    <option value="Novembre">Novembre</option>
                    <option value="Dicembre">Dicembre</option></select>
                 <input type="text" button class="btn btn-default dropdown-toggle" name="annonascita" id="annonascita" placeholder="AAAA"/><br>
            </fieldset>
            <fieldset>
			<div align="center" >
				<div class="container">
	<div class="row">
        <br></br>
        
        <input type="submit" name="submit" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#processing-modal" value="Calcola Codice Fiscale"> 
	</div>
</div>
 <br></br>
 
 <div class="form-group">
					
					<div class="col-sm-3">
				<?php
					  echo "<input type='hidden' class='form-control' name='cognome' value='" . $Cognome . "'>"
					  
					  ?>
					</div>
					<div class="col-sm-3">
				<?php
					   echo "<input type='hidden' class='form-control' name='nome' value='" . $Nome . "'>"
					  
					  ?>
					</div>
					
					<div class="col-sm-3">
				<?php
					  echo "<input type='hidden' class='form-control' name='comune' value='" . $Comune . "'>"
					  
					  ?>
					</div>
					<div class="col-sm-3">
				<?php
					   echo "<input type='hidden' class='form-control' name='sesso' value='" . $Sesso . "'>"
					  
					  ?>
					</div>
				  </div>

<div class="modal modal-static fade" id="processing-modal" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-body">
                <div class="text-center">
                    <img src="C:\Users\stud3aii_2\Desktop\loading.gif" class="icon" />
                    <h4>Processing...</h4>
                </div>
            </div>
        </div>
    </div>
</div>
				</div>


            
                </fieldset>
        </form>
        <footer></footer>
    </body>
</html>