<html>
<head>

<?php

require_once("GestorUsuaris.php");

class Usuari{

    private $tipus;
    private $nom;
    private $clau;
    private $cataleg;

    public function  __construct($nom, $clau){
        $this->nom = $nom;
        $this->clau = $clau;

       $this->determinaUsuari();

        $this->cataleg = array();
    }

    // Funció que determina si l'usuari és o no admin 
    private function determinaUsuari(){
        if(!strcmp($this->nom, "admin")){
            $this->tipus =0;
            $this->clau = "admin";
        }
        else{
            $this->tipus =1;
        }
    }

	public function getTipus(){
        return $this->tipus;
    }

    public function getName(){
        return $this->nom;
    }

    public function getPass(){
        return $this->clau;
    }

	//Function to add a product
	
    public function addProducte ($producte){
        $this->cataleg[] = $producte; 
    }

    public function getProductes (){
       return $this->cataleg;
    }

    public function __toString(){
        echo "[Usuari]: $this->tipus, $this->nom , $this->clau <BR>";
    }

}
        
?>
</head>

<body>
    
<?php
    $taula= null;
    $usuari = new Usuari($_POST["nom"], $_POST["clau"]);
    $nom = $_REQUEST["nom"];
    $password = $_REQUEST["clau"];
    
	/**Comprovem que l'usuari existeix */
    $gestor = new GestorUsuaris($usuari); 
    $trobat = $gestor->getTrobat();
       
    /**En cas d'existir redirigim a l'espai privat */
    if($trobat){

        $_SESSION["acces"]=1;
        echo "\n<br>L'usuari $nom ha accedit amb la contrasenya correcta <br>\n <a href=botiga.php>Accedir a la botiga</a>";                
    
    }else{
		echo "\n<BR>L'usuari $nom, si existeix, ha accedit amb la contrasenya incorrecta  <br>\n <a href=iniciarsessio.html>Tornar a intentar-ho</a>\n";
    }
?>

</body>

</html>
