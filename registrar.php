<html>
<head>
    <meta content="text/html; charset=UTF-8" http-equiv="content-type">
    <link rel="stylesheet" href="estil-iniciarsessio.css">
    <link href="https://fonts.googleapis.com/css?family=Abril+Fatface|Roboto" rel="stylesheet">
    <TITLE>Botiga - Components</TITLE>





<?php

class Registrar {
	private $nom; 
	private $clau; 

	public function __construct($nom,$clau){ 
		$this->nom = $nom;
		$this->clau = $clau;
	}

	public function validar_registro(){ 
        $data = 'contrasenya.csv';
        $fLectura = fopen($data,"r");
        $buscaUsuario = false; 

        while(!feof($fLectura)){
            $line = fgets($fLectura);
            $array = explode(',', $line);
            if($array[0] == $this->nom){
                $buscaUsuario = true;
                break;
            }
        }
        fclose($fLectura);
      
        if($buscaUsuario){       
            echo "Este usuario ya existe, prueba con otro.";            
    	}else{ 
            if(strlen($this->clau)<6){
                echo'La contraseña debe tener al menos 6 caracteres.'; 
            }else{
                $fRegistro = fopen($data,"a");
                fwrite($fRegistro,$this->nom.",".$this->clau.PHP_EOL);
                fclose($fRegistro);
                header("location: iniciarsessio.html");
            }
        }
    }       
}

if(isset($_POST["afegir"])){ 
    $Registro = new Registrar($_POST["nom"],$_POST['clau']); 
    $Registro->validar_registro(); 
}	
?>
</head>
<body>
    <header class="menu">
        
        <div class="logo">
            <span><img src="IMAGENES/logo.jpg" width="110.313px" height="60px"></span>
        </div>
        

        <div class="carro">
            <span><img src="IMAGENES/carro-compra.jpg" width="45.313px" height="40px"></span>
        </div>
        
        <div class=login>
            <a href="iniciarsessio.html">
                <span>INICIA SESSIÓ</span> 
            </a>
        </div> 
        
        <div class="registrar">
            <a href="registrar.html">
                <span>REGISTRAR-SE</span>
            </a>
        </div>   
        
    </header>

    <div class="no-menu"></div>

    <div class="zona-login">
        <div class="caixalogin">
            <div class="lletra">
                CREA UN NOU COMPTE A LA BOTIGA
            </div>
                  

            <form method="POST">
                <input class="input" type="email" placeholder="Correu electrònic" name="nom"><br><br>
                <input class="input" type="password" placeholder="Contrasenya" name="clau" minlength="6"><br><br><br>
                <input class="input1" type="submit" name="afegir" value="REGISTRAR">
            </form>      


        </div>
    </div>
    <div class="footer"></div>
</body>
</html>

