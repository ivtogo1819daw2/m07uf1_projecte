<html>
<head>
    <meta content="text/html; charset=UTF-8" http-equiv="content-type">
    <title>Botiga - Components</title>
</head>
<body>
<h2><u>COMANDA REALITZADA</u></h2>

<?php
$arch = "Comanda.txt";
$da = @fopen($arch, "r") 
    or die ("No existeix comanda!");

    while (!feof($da)) {
        $bufer = fgets($da, 4096);
        print $bufer . "<BR>";
    }
    fclose($da);

?>

    <p />
    <a href="botiga.php">Volver atras</a>
    <p />

    </form>

<?php
if(!isset ($_POST['esborrar'])){
?>
    <form method="post">
    <p />
        <input type="submit" name="esborrar" value="Esborrar" />
    </form>
<?php
}else{
    $arch = "Comanda.txt";
    $var = unlink("$arch");

    print '<META HTTP-EQUIV="refresh" CONTENT="1;URL=./botiga.php">';
}
?>

</body>
</html>