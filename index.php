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
		
		
        <form method="post" action="<?php $_SERVER["PHP_SELF"];?>">
            <fieldset>
			
			
			 <br></br>
			
				  <div class="form-group">
					<label class="control-label col-sm-2" for="email" >COGNOME</label>
					<div class="col-sm-10">
					  <input type="text" class="form-control" name="cognome" placeholder="Inserisci il cognome">
					</div>
				  </div>
				  <br></br>
				  
				<div class="form-group">
					<label class="control-label col-sm-2" for="email" >NOME</label>
					<div class="col-sm-10">
					  <input type="text" class="form-control" name="nome" placeholder="Inserisci il nome">
					</div>
				  </div>
				   <br></br>
				  
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

<?php
if (isset($_POST['submit']))
{
    $Cognome = strtoupper($_POST['cognome']);
    $Nome = strtoupper($_POST['nome']);
    $Giorno = $_POST['giornonascita'];
    $Mese = $_POST['mesenascita'];
	$Anno = $_POST['annonascita'];
    $Comune = $_POST['comune'];
    $Sesso = $_POST['sesso'];
    
   
    
    $cognco = "";
    $cognvo = "";
    $consonanti = 0;
    $vocali = 0;
    $totale = 0;
    $controllo = false;
    
    for($i=0; $i<strlen($Cognome); $i++) 
    {
            
        if($Cognome[$i] != "A" && $Cognome[$i] != "E" && $Cognome[$i] != "I" && $Cognome[$i] != "O" && $Cognome[$i] != "U")
        {
            if($consonanti < 3)
            {
                $cognco = $cognco . $Cognome[$i];
            }
            $consonanti++;
        }
        $controllo = true;    
    }
    
    $totale = $consonanti + $vocali;
    
    if($consonanti < 3 && $controllo = true)
    {
        for($i=0; $i<strlen($Cognome); $i++)
        {
            if($Cognome[$i] == "A" || $Cognome[$i] == "E" || $Cognome[$i] == "I" || $Cognome[$i] == "O" || $Cognome[$i] == "U")
            {
                if($vocali < 3 && $totale < 3)
                {
                    $cognvo = $cognvo . $Cognome[$i];
                }
                $vocali++;
            }
            $totale = $consonanti + $vocali;
        }
    }
    
    //echo $cognco;
    //echo $cognvo;   
    if($totale < 3 && $controllo = true)
    {
        $x = "X";
        $cognvo = $cognvo . $x;
    }
     

    
    $aiuto = "";
    
    if(strlen($Nome)<3)
    {
        $aiuto = $Nome;
		while(strlen($aiuto)<3)
        {
            $aiuto = $aiuto . "X";
	    }
	}
    else
    {
        for($i = 0; $i < strlen($Nome); $i++)
        {
            if($Nome[$i] != "A" && $Nome[$i] != "E" && $Nome[$i] != "I" && $Nome[$i] != "O" && $Nome[$i] != "U")
            {
                $aiuto = $aiuto . $Nome[$i];
			}
        }
        if(strlen($aiuto) > 3)
        {
            $aiuto = $aiuto[0].$aiuto[2].$aiuto[3];
        }
		if(strlen($aiuto) < 3)
        {
            for($i = 0; $i < strlen($Nome); $i++)
            {
				if(strlen($aiuto)<3)
                {
                    if($Nome[$i] == "A" || $Nome[$i] == "E" || $Nome[$i] == "I" || $Nome[$i] == "O" || $Nome[$i] == "U")
                    {
                        $aiuto = $aiuto . $Nome[$i];
					}
				}
			}
		}
    }
    
    $Anno = $Anno[2] . $Anno[3];
    

    $mese = array('Gennaio' => 'A', 'Febbraio' => 'B', 'Marzo' => 'C', 'Aprile' => 'D', 'Maggio' => 'E', 'Giugno' => 'H', 'Luglio' => 'L', 'Agosto' => 'M', 'Settembre' => 'P', 'Ottobre' => 'R', 'Novembre' => 'S', 'Dicembre' => 'T');
    
    //echo $Mese;
    
    if($Sesso == 'f')
    {
        $Giorno = (int)$Giorno + 40;
    }
    
    
    $cognome1 = $cognco . $cognvo;
    //$nome1 = $nomeco . $nomevo;
    $data = $Anno . $mese[$Mese] . $Giorno;
	$cin = "";
    $Codicefiscale = "";
    $Codicefiscale = $cognome1.$aiuto.$data.$Comune;
    
    $dispari = array("0" =>	"1", "9" =>	"21", "I" => "19", "R" => "8",
                     "1" =>	"0", "A" =>	"1", "J" => "21", "S" => "12",
                     "2" =>	"5", "B" =>	"0", "K" => "2", "T" => "14",
                     "3" =>	"7", "C" =>	"5", "L" => "4", "U" => "16",
                     "4" =>	"9", "D" =>	"7", "M" => "18", "V" => "10",
                     "5" =>	"13", "	E" => "9", "N" => "20", "W" => "22",
                     "6" =>	"15", "	F" => "13", "O" => "11", "X" =>	"25",
                     "7" =>	"17", "	G" => "15", "P" => "3", "Y" => "24",
                     "8" =>	"19", "	H" => "17", "Q" => "6", "Z" => "23");
    
    $pari = array("0" => "0", "9" => "9", "I" => "8",	"R" => "17",
                  "1" => "1", "A" => "0", "J" => "9",	"S" => "18",
                  "2" => "2", "B" => "1", "K" => "10", 	"T" => "19",
                  "3" => "3", "C" => "2", "L" => "11", 	"U" => "20",
                  "4" => "4", "D" => "3", "M" => "12", 	"V" => "21",
                  "5" => "5", "E" => "4", "N" => "13", 	"W" => "22",
                  "6" => "6", "F" => "5", "O" => "14", 	"X" => "23",
                  "7" => "7", "G" => "6", "P" => "15", 	"Y" => "24",
                  "8" => "8", "H" => "7", "Q" => "16", 	"Z" => "25");
    
	$CIN = array("0" =>	"A", "7" =>	"H", "14" => "O", "21" => "V",
                 "1" =>	"B", "8" =>	"I", "15" => "P", "22" => "W",
                 "2" =>	"C", "9" =>	"J", "16" => "Q", "23" => "X",
                 "3" =>	"D", "10" => "K", "17" => "R", "24" => "Y",
                 "4" =>	"E", "11" => "L", "18" => "S", "25" => "Z",
                 "5" =>	"F", "12" => "M", "19" => "T", "6" => "G", "13" => "N", "20" => "U");
    
    $sommadispari = 0;
    $sommapari = 0;
    for($i = 0; $i <strlen($Codicefiscale); $i++)
    {
        if($i%2 == 0)
        {
            $sommadispari+=$dispari[$Codicefiscale[$i]];
        }
        else
        {
            $sommapari+=$pari[$Codicefiscale[$i]];
        }
        $cin = ($sommapari + $sommadispari)%26;
        $cin = $CIN[$cin];
    }
    $Codicefiscale = $cognome1.$aiuto.$data.$Comune.$cin;
	
    echo "<div class='alert alert-info'>" . $Codicefiscale . "</div>";
    
}
?>
            
                </fieldset>
        </form>
        <footer></footer>
    </body>
</html>