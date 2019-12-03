<?php
    session_start(); 
?>

<?php
//Creació de la matriu

$ords=array(
  'ord1'=>'PcCom Basic Home Pro Intel Core i3-7100/4GB/1TB= 349,95€',
  'ord2'=>'PcCom Basic Elite Essential AMD Ryzen R5 2400G/8GB/1TB+240GB SSD = 442,51€',
  'ord3'=>'PcCom Bronze Essential AMD Ryxen 3 1200/8GB/1TB/GTX1050 = 499,77€',
  'ord4'=>'PcCom Bronze Intel Core i3-8100/8GB/GTX1050Ti4GB = 651,73€',
  'ord5'=>'PcCom Brorze Ultra Intel Core i5-8400/8GB/1TB/GTX1060 3GB = 864,99€',
  'ord6'=>'HP NoteBook 15-DA0085NS Intel Core I3-7020/8GB/256GB SSD/15.6 = 349€',
  'ord7'=>'Toshiba Satelite Pro R50-C-1E8 Intel Celeron 3855U/4GB/128GB SSD/15.6 = 349,55',
  'ord8'=>'Medition Akoya MD60691 Intel Atom x5-Z8350/4GB/64GB/11.6*Tactil = 199,99€',
  'ord9'=>'Asus Rog Strix Scar Edition GL703GM-E5016 Intel Core 17-8750H/16GB/1TB-256GB = 1499€',
  'ord10'=>'HP OMEN 15-DCOOOONS Intel Core 17-8750H/16GB/1TB-256GB SSD/GTX1060/15.6 = 1199€',
  'ord11'=>'MSI Optic MAG241C 23.6 LED FullHD = 249€',
  'ord12'=>'Asus VC239HE-W 23 LED IPS FullHD Blanco = 149€',
  'ord13'=>'Newskill Hanshi Spectrum Teclado Mecanico RGB Kalih Red = 89,99€',
  'ord14'=>'Corsair K63 Teclado Mecanico LED Rojo Cherry MX Red = 89,99€',
  'ord15'=>'Newskill Hellos Raton Gaming RGB 10000DPI = 39,99€',
  'ord16'=>'MSI Interceptor DS300 Raton Gaming 8200DPI Negro = 59,99€',
  'ord17'=>'Woxter Big Bass 95 Altavoces 2.0 = 29,99€',
  'ord18'=>'Newskill Kimera v2 Auriculares Gaming RGB 7.1 PC/PS4 = 69,99€',
  'ord19'=>'HyperX Cloud Flight Auriculares Inalambricos Gaming = 161€',
  'ord20'=>'Newskill Kitsune Silla Gaming Azul = 139€'
);

?>

<html>
<head>
    <meta content="text/html; charset=UTF-8" http-equiv="content-type">
    <link rel="stylesheet" href="estil.css">
    <link href="https://fonts.googleapis.com/css?family=Abril+Fatface|Roboto" rel="stylesheet">
    <TITLE>Botiga - Components</TITLE>
</head>
<body>
    <header class="menu">
        
        <div class="logo">
                <span><img src="IMAGENES/logo.jpg" width="110.313px" height="60px"></span>
        </div>
        

        <div class="carro">
            <a href="comanda.php">
            <span><img src="IMAGENES/carro-compra.jpg" width="45.313px" height="40px"></span>
            </a>
        </div>
        
        <div class=login>
            <a href="tancar.php">
                <span>TANCAR SESSIÓ</span> 
            </a>
        </div>  
        
    </header>

    <div class="espacio"></div>

    <div class="zona-contingut">
        <div class="menu-titulo">
            <p class="letra-titulo"><b>ORDINADORS SOBRETAULA I PORTÀTILS</b></p>
        </div>
        <div class="cataleg">
            <div class=com1>
                <div class="com2">
                    <img src="IMAGENES/or.1.JPG">
                </div>
                <div class="com3">
                    <div class="plus">
                    <?php
                        if(!isset ($_POST['ord1'])){
                    ?>
                        <form method="post" action="botiga.php">
                        
                            <input class="boto" type="submit" name="ord1" value="+">
                        </form>
                    <?php
                        }else{
                            $arch = "Comanda.txt";
                            $da = fopen ($arch, "a");
                            $var = fwrite($da, "- " . $ords['ord1'] . "."); 
                            fwrite($da, "\r\n");
                            fclose($da);
                    ?>
                        <form method="post" action="botiga.php">
                        <?php
                            foreach($ords as $o){}
                        ?>
                            <input class="boto" type="submit" name="ord1" value="+">
                        </form>
                    <?php
                        }
                    ?>
                    </div>
                    <div class="preu">
                        <p><b>349</b>,95€</p>
                    </div>
                </div>
            </div>
            <div class="com1">
                <div class="com2">
                    <img src="IMAGENES/or2.JPG">
                </div>
                <div class="com3">
                    <div class="plus">
                    <?php
                        if(!isset ($_POST['ord2'])){
                    ?>
                        <form method="post" action="botiga.php">
                        <?php
                            foreach($ords as $o){}
                        ?>
                            <input class="boto" type="submit" name="ord2" value="+">
                        </form>
                    <?php
                        }else{
                            $arch = "Comanda.txt";
                            $da = fopen ($arch, "a");
                            $var = fwrite($da, "- " . $ords['ord2'] . "."); 
                            fwrite($da, "\r\n");
                            fclose($da);
                    ?>
                        <form method="post" action="botiga.php">
                        <?php
                            foreach($ords as $o){}
                        ?>
                            <input class="boto" type="submit" name="ord2" value="+">
                        </form>
                    <?php
                        }
                    ?>
                    </div>
                    <div class="preu">
                        <p><b>442</b>,51€</p>
                    </div>
                </div>
            </div>
            <div class="com1">
                <div class="com2">
                    <img src="IMAGENES/or5.JPG">
                </div>
                <div class="com3">
                    <div class="plus">
                    <?php
                        if(!isset ($_POST['ord3'])){
                    ?>
                        <form method="post" action="botiga.php">
                        <?php
                            foreach($ords as $o){}
                        ?>
                            <input class="boto" type="submit" name="ord3" value="+">
                        </form>
                    <?php
                        }else{
                            $arch = "Comanda.txt";
                            $da = fopen ($arch, "a");
                            $var = fwrite($da, "- " . $ords['ord3'] . "."); 
                            fwrite($da, "\r\n");
                            fclose($da);
                    ?>
                        <form method="post" action="botiga.php">
                        <?php
                            foreach($ords as $o){}
                        ?>
                            <input class="boto" type="submit" name="ord3" value="+">
                        </form>
                    <?php
                        }
                    ?>
                    </div>
                    <div class="preu">
                        <p><b>499</b>,77€</p>
                    </div>
                </div>
            </div>
            <div class="com1">
                    <div class="com2">
                        <img src="IMAGENES/or3.JPG">
                    </div>
                    <div class="com3">
                    <div class="plus">
                    <?php
                        if(!isset ($_POST['ord4'])){
                    ?>
                        <form method="post" action="botiga.php">
                        <?php
                            foreach($ords as $o){}
                        ?>
                            <input class="boto" type="submit" name="ord4" value="+">
                        </form>
                    <?php
                        }else{
                            $arch = "Comanda.txt";
                            $da = fopen ($arch, "a");
                            $var = fwrite($da, "- " . $ords['ord4'] . "."); 
                            fwrite($da, "\r\n");
                            fclose($da);
                    ?>
                        <form method="post" action="botiga.php">
                        <?php
                            foreach($ords as $o){}
                        ?>
                            <input class="boto" type="submit" name="ord4" value="+">
                        </form>
                    <?php
                        }
                    ?>
                    </div>
                    <div class="preu">
                        <p><b>651</b>,73€</p>
                    </div>
                </div>
            </div>
            <div class="com1">
                    <div class="com2">
                        <img src="IMAGENES/or4.JPG">
                    </div>
                    <div class="com3">
                    <div class="plus">
                    <?php
                        if(!isset ($_POST['ord5'])){
                    ?>
                        <form method="post" action="botiga.php">
                        <?php
                            foreach($ords as $o){}
                        ?>
                            <input class="boto" type="submit" name="ord5" value="+">
                        </form>
                    <?php
                        }else{
                            $arch = "Comanda.txt";
                            $da = fopen ($arch, "a");
                            $var = fwrite($da, "- " . $ords['ord5'] . "."); 
                            fwrite($da, "\r\n");
                            fclose($da);
                    ?>
                        <form method="post" action="botiga.php">
                        <?php
                            foreach($ords as $o){}
                        ?>
                            <input class="boto" type="submit" name="ord5" value="+">
                        </form>
                    <?php
                        }
                    ?>
                    </div>
                    <div class="preu">
                        <p><b>864</b>,99€</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="cataleg2">
            <div class=com4>
                <div class="com5">
                    <img src="IMAGENES/por1.JPG">
                </div>
                <div class="com3">
                    <div class="plus">
                    <?php
                        if(!isset ($_POST['ord6'])){
                    ?>
                        <form method="post" action="botiga.php">
                        <?php
                            foreach($ords as $o){}
                        ?>
                            <input class="boto" type="submit" name="ord6" value="+">
                        </form>
                    <?php
                        }else{
                            $arch = "Comanda.txt";
                            $da = fopen ($arch, "a");
                            $var = fwrite($da, "- " . $ords['ord6'] . "."); 
                            fwrite($da, "\r\n");
                            fclose($da);
                    ?>
                        <form method="post" action="botiga.php">
                        <?php
                            foreach($ords as $o){}
                        ?>
                            <input class="boto" type="submit" name="ord6" value="+">
                        </form>
                    <?php
                        }
                    ?>
                    </div>
                    <div class="preu">
                        <p><b>349</b>€</p>
                    </div>
                </div>
            </div>
            <div class=com4>
                <div class="com5">
                    <img src="IMAGENES/por2.JPG">
                </div>
                <div class="com3">
                    <div class="plus">
                    <?php
                        if(!isset ($_POST['ord7'])){
                    ?>
                        <form method="post" action="botiga.php">
                        <?php
                            foreach($ords as $o){}
                        ?>
                            <input class="boto" type="submit" name="ord7" value="+">
                        </form>
                    <?php
                        }else{
                            $arch = "Comanda.txt";
                            $da = fopen ($arch, "a");
                            $var = fwrite($da, "- " . $ords['ord7'] . "."); 
                            fwrite($da, "\r\n");
                            fclose($da);
                    ?>
                        <form method="post" action="botiga.php">
                        <?php
                            foreach($ords as $o){}
                        ?>
                            <input class="boto" type="submit" name="ord7" value="+">
                        </form>
                    <?php
                        }
                    ?>
                    </div>
                    <div class="preu">
                        <p><b>349</b>,55€</p>
                    </div>
                </div>
            </div>
            <div class=com4>
                <div class="com5">
                        <img src="IMAGENES/por3.JPG">
                </div>
                <div class="com3">
                    <div class="plus">
                    <?php
                        if(!isset ($_POST['ord8'])){
                    ?>
                        <form method="post" action="botiga.php">
                        <?php
                            foreach($ords as $o){}
                        ?>
                            <input class="boto" type="submit" name="ord8" value="+">
                        </form>
                    <?php
                        }else{
                            $arch = "Comanda.txt";
                            $da = fopen ($arch, "a");
                            $var = fwrite($da, "- " . $ords['ord8'] . "."); 
                            fwrite($da, "\r\n");
                            fclose($da);
                    ?>
                        <form method="post" action="botiga.php">
                        <?php
                            foreach($ords as $o){}
                        ?>
                            <input class="boto" type="submit" name="ord8" value="+">
                        </form>
                    <?php
                        }
                    ?>
                    </div>
                    <div class="preu">
                        <p><b>199</b>,99€</p>
                    </div>
                </div>
            </div>
            <div class=com4>
                <div class="com5">
                    <img src="IMAGENES/por4.JPG">
                </div>
                <div class="com3">
                    <div class="plus">
                    <?php
                        if(!isset ($_POST['ord9'])){
                    ?>
                        <form method="post" action="botiga.php">
                        <?php
                            foreach($ords as $o){}
                        ?>
                            <input class="boto" type="submit" name="ord9" value="+">
                        </form>
                    <?php
                        }else{
                            $arch = "Comanda.txt";
                            $da = fopen ($arch, "a");
                            $var = fwrite($da, "- " . $ords['ord9'] . "."); 
                            fwrite($da, "\r\n");
                            fclose($da);
                    ?>
                        <form method="post" action="botiga.php">
                        <?php
                            foreach($ords as $o){}
                        ?>
                            <input class="boto" type="submit" name="ord9" value="+">
                        </form>
                    <?php
                        }
                    ?>
                    </div>
                    <div class="preu">
                        <p><b>1499</b>€</p>
                    </div>
                </div>
            </div>
            <div class=com4>
                <div class="com5">
                    <img src="IMAGENES/por5.JPG">
                </div>
                <div class="com3">
                    <div class="plus">
                    <?php
                        if(!isset ($_POST['ord10'])){
                    ?>
                        <form method="post" action="botiga.php">
                        <?php
                            foreach($ords as $o){}
                        ?>
                            <input class="boto" type="submit" name="ord10" value="+">
                        </form>
                    <?php
                        }else{
                            $arch = "Comanda.txt";
                            $da = fopen ($arch, "a");
                            $var = fwrite($da, "- " . $ords['ord10'] . "."); 
                            fwrite($da, "\r\n");
                            fclose($da);
                    ?>
                        <form method="post" action="botiga.php">
                        <?php
                            foreach($ords as $o){}
                        ?>
                            <input class="boto" type="submit" name="ord10" value="+">
                        </form>
                    <?php
                        }
                    ?>
                    </div>
                    <div class="preu">
                        <p><b>1199</b>€</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="espacio"></div>

        <div class="menu-titulo">
            <p class="letra-titulo"><b>PERIFÈRICS</b></p>
        </div>
        <div class="cataleg2">
            <div class=com4>
                <div class="com5">
                    <img src="IMAGENES/p1.JPG">
                </div>
                <div class="com3">
                    <div class="plus">
                    <?php
                        if(!isset ($_POST['ord11'])){
                    ?>
                        <form method="post" action="botiga.php">
                        <?php
                            foreach($ords as $o){}
                        ?>
                            <input class="boto" type="submit" name="ord11" value="+">
                        </form>
                    <?php
                        }else{
                            $arch = "Comanda.txt";
                            $da = fopen ($arch, "a");
                            $var = fwrite($da, "- " . $ords['ord11'] . "."); 
                            fwrite($da, "\r\n");
                            fclose($da);
                    ?>
                        <form method="post" action="botiga.php">
                        <?php
                            foreach($ords as $o){}
                        ?>
                            <input class="boto" type="submit" name="ord11" value="+">
                        </form>
                    <?php
                        }
                    ?>
                    </div>
                    <div class="preu">
                        <p><b>249</b>€</p>
                    </div>
                </div>
            </div>
            <div class=com4>
                <div class="com5">
                    <img src="IMAGENES/p2.JPG">
                </div>
                <div class="com3">
                    <div class="plus">
                    <?php
                        if(!isset ($_POST['ord12'])){
                    ?>
                        <form method="post" action="botiga.php">
                        <?php
                            foreach($ords as $o){}
                        ?>
                            <input class="boto" type="submit" name="ord12" value="+">
                        </form>
                    <?php
                        }else{
                            $arch = "Comanda.txt";
                            $da = fopen ($arch, "a");
                            $var = fwrite($da, "- " . $ords['ord12'] . "."); 
                            fwrite($da, "\r\n");
                            fclose($da);
                    ?>
                        <form method="post" action="botiga.php">
                        <?php
                            foreach($ords as $o){}
                        ?>
                            <input class="boto" type="submit" name="ord12" value="+">
                        </form>
                    <?php
                        }
                    ?>
                    </div>
                    <div class="preu">
                        <p><b>149</b>€</p>
                    </div>
                </div>
            </div>
            <div class=com4>
                <div class="com5">
                    <img src="IMAGENES/p3.JPG">
                </div>
                <div class="com3">
                    <div class="plus">
                    <?php
                        if(!isset ($_POST['ord13'])){
                    ?>
                        <form method="post" action="botiga.php">
                        <?php
                            foreach($ords as $o){}
                        ?>
                            <input class="boto" type="submit" name="ord13" value="+">
                        </form>
                    <?php
                        }else{
                            $arch = "Comanda.txt";
                            $da = fopen ($arch, "a");
                            $var = fwrite($da, "- " . $ords['ord13'] . "."); 
                            fwrite($da, "\r\n");
                            fclose($da);
                    ?>
                        <form method="post" action="botiga.php">
                        <?php
                            foreach($ords as $o){}
                        ?>
                            <input class="boto" type="submit" name="ord13" value="+">
                        </form>
                    <?php
                        }
                    ?>
                    </div>
                    <div class="preu">
                        <p><b>89</b>,99€</p>
                    </div>
                </div>
            </div>
            <div class=com4>
                <div class="com5">
                    <img src="IMAGENES/p4.JPG">
                </div>
                <div class="com3">
                    <div class="plus">
                    <?php
                        if(!isset ($_POST['ord14'])){
                    ?>
                        <form method="post" action="botiga.php">
                        <?php
                            foreach($ords as $o){}
                        ?>
                            <input class="boto" type="submit" name="ord14" value="+">
                        </form>
                    <?php
                        }else{
                            $arch = "Comanda.txt";
                            $da = fopen ($arch, "a");
                            $var = fwrite($da, "- " . $ords['ord14'] . "."); 
                            fwrite($da, "\r\n");
                            fclose($da);
                    ?>
                        <form method="post" action="botiga.php">
                        <?php
                            foreach($ords as $o){}
                        ?>
                            <input class="boto" type="submit" name="ord14" value="+">
                        </form>
                    <?php
                        }
                    ?>
                    </div>
                    <div class="preu">
                        <p><b>89</b>,99€</p>
                    </div>
                </div>
            </div>
            <div class=com4>
                <div class="com5">
                    <img src="IMAGENES/p5.JPG">
                </div>
                <div class="com3">
                    <div class="plus">
                    <?php
                        if(!isset ($_POST['ord15'])){
                    ?>
                        <form method="post" action="botiga.php">
                        <?php
                            foreach($ords as $o){}
                        ?>
                            <input class="boto" type="submit" name="ord15" value="+">
                        </form>
                    <?php
                        }else{
                            $arch = "Comanda.txt";
                            $da = fopen ($arch, "a");
                            $var = fwrite($da, "- " . $ords['ord15'] . "."); 
                            fwrite($da, "\r\n");
                            fclose($da);
                    ?>
                        <form method="post" action="botiga.php">
                        <?php
                            foreach($ords as $o){}
                        ?>
                            <input class="boto" type="submit" name="ord15" value="+">
                        </form>
                    <?php
                        }
                    ?>
                    </div>
                    <div class="preu">
                        <p><b>39</b>,99€</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="cataleg2">
            <div class=com4>
                <div class="com5">
                    <img src="IMAGENES/p6.JPG">
                </div>
                <div class="com3">
                    <div class="plus">
                    <?php
                        if(!isset ($_POST['ord16'])){
                    ?>
                        <form method="post" action="botiga.php">
                        <?php
                            foreach($ords as $o){}
                        ?>
                            <input class="boto" type="submit" name="ord16" value="+">
                        </form>
                    <?php
                        }else{
                            $arch = "Comanda.txt";
                            $da = fopen ($arch, "a");
                            $var = fwrite($da, "- " . $ords['ord16'] . "."); 
                            fwrite($da, "\r\n");
                            fclose($da);
                    ?>
                        <form method="post" action="botiga.php">
                        <?php
                            foreach($ords as $o){}
                        ?>
                            <input class="boto" type="submit" name="ord16" value="+">
                        </form>
                    <?php
                        }
                    ?>
                    </div>
                    <div class="preu">
                        <p><b>59</b>,99€</p>
                    </div>
                </div>
            </div>
            <div class=com4>
                <div class="com5">
                    <img src="IMAGENES/p7.JPG">
                </div>
                <div class="com3">
                    <div class="plus">
                    <?php
                        if(!isset ($_POST['ord17'])){
                    ?>
                        <form method="post" action="botiga.php">
                        <?php
                            foreach($ords as $o){}
                        ?>
                            <input class="boto" type="submit" name="ord17" value="+">
                        </form>
                    <?php
                        }else{
                            $arch = "Comanda.txt";
                            $da = fopen ($arch, "a");
                            $var = fwrite($da, "- " . $ords['ord17'] . "."); 
                            fwrite($da, "\r\n");
                            fclose($da);
                    ?>
                        <form method="post" action="botiga.php">
                        <?php
                            foreach($ords as $o){}
                        ?>
                            <input class="boto" type="submit" name="ord17" value="+">
                        </form>
                    <?php
                        }
                    ?>
                    </div>
                    <div class="preu">
                        <p><b>29</b>,99€</p>
                    </div>
                </div>
            </div>
            <div class=com4>
                <div class="com5">
                    <img src="IMAGENES/p8.JPG">
                </div>
                <div class="com3">
                    <div class="plus">
                    <?php
                        if(!isset ($_POST['ord18'])){
                    ?>
                        <form method="post" action="botiga.php">
                        <?php
                            foreach($ords as $o){}
                        ?>
                            <input class="boto" type="submit" name="ord18" value="+">
                        </form>
                    <?php
                        }else{
                            $arch = "Comanda.txt";
                            $da = fopen ($arch, "a");
                            $var = fwrite($da, "- " . $ords['ord18'] . "."); 
                            fwrite($da, "\r\n");
                            fclose($da);
                    ?>
                        <form method="post" action="botiga.php">
                        <?php
                            foreach($ords as $o){}
                        ?>
                            <input class="boto" type="submit" name="ord18" value="+">
                        </form>
                    <?php
                        }
                    ?>
                    </div>
                    <div class="preu">
                        <p><b>69</b>,99€</p>
                    </div>
                </div>
            </div>
            <div class=com4>
                <div class="com5">
                    <img src="IMAGENES/p9.JPG">
                </div>
                <div class="com3">
                    <div class="plus">
                    <?php
                        if(!isset ($_POST['ord19'])){
                    ?>
                        <form method="post" action="botiga.php">
                        <?php
                            foreach($ords as $o){}
                        ?>
                            <input class="boto" type="submit" name="ord19" value="+">
                        </form>
                    <?php
                        }else{
                            $arch = "Comanda.txt";
                            $da = fopen ($arch, "a");
                            $var = fwrite($da, "- " . $ords['ord19'] . "."); 
                            fwrite($da, "\r\n");
                            fclose($da);
                    ?>
                        <form method="post" action="botiga.php">
                        <?php
                            foreach($ords as $o){}
                        ?>
                            <input class="boto" type="submit" name="ord19" value="+">
                        </form>
                    <?php
                        }
                    ?>
                    </div>
                    <div class="preu">
                        <p><b>161</b>€</p>
                    </div>
                </div>
            </div>
            <div class=com4>
                <div class="com5">
                        <img src="IMAGENES/p10.JPG">
                </div>
                <div class="com3">
                    <div class="plus">
                    <?php
                        if(!isset ($_POST['ord20'])){
                    ?>
                        <form method="post" action="botiga.php">
                        <?php
                            foreach($ords as $o){}
                        ?>
                            <input class="boto" type="submit" name="ord20" value="+">
                        </form>
                    <?php
                        }else{
                            $arch = "Comanda.txt";
                            $da = fopen ($arch, "a");
                            $var = fwrite($da, "- " . $ords['ord20'] . "."); 
                            fwrite($da, "\r\n");
                            fclose($da);
                    ?>
                        <form method="post" action="botiga.php">
                        <?php
                            foreach($ords as $o){}
                        ?>
                            <input class="boto" type="submit" name="ord20" value="+">
                        </form>
                    <?php
                        }
                    ?>
                    </div>
                    <div class="preu">
                        <p><b>139</b>€</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer"></div>

</body>
</html>