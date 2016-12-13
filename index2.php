<?php
    $Cognome = strtoupper($_POST['cognome']);
    $Nome = strtoupper($_POST['nome']);
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
		
		
        <form method="post" action="index3.php">
            <fieldset>
			
			
			 <br></br>
			
				  <div class="form-group">
				  
				  <div class="form-group">
					<label class="control-label col-sm-2" for="email" >SESSO</label>
					<div class="col-sm-10">
					  Sesso: <select name="sesso" button class="btn btn-default dropdown-toggle"><option value="m">M</option><option value="f">F</option></select> <br>
					</div>
				  </div>
				   <br></br>
				  
				  <div class="form-group">
					<label class="control-label col-sm-2" for="email" >COMUNE DI NASCITA</label>
					<div class="col-sm-10">
					  <select name="comune" button class="btn btn-default dropdown-toggle">
				   <br></br>
                
                
                
		
				
                <?php
                        $myfile = fopen("comuni.csv", "r") or die ("nessun file presente!");
                        while(!feof($myfile))
                        {
                            $linea = fgets($myfile);
                            if(!feof($myfile))
                            {
                                $array = explode(",", $linea);
                                $com = trim($array[1]);
                                echo "<option value=" . $array[0] . ">". $com . "</option>";
                            }
                        }
                    ?>
                </select> 
				</div>
				  </div>  
				 <br></br>
				 <div class="form-group">
					
					<div class="col-sm-6">
				<?php
					  echo "<input type='hidden' class='form-control' name='cognome' value='" . $Cognome . "'>"
					  
					  ?>
					</div>
					<div class="col-sm-6">
				<?php
					   echo "<input type='hidden' class='form-control' name='nome' value='" . $Nome . "'>"
					  
					  ?>
					</div>
				  </div>
				   <br></br>
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