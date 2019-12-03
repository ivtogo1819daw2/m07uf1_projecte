<?php 
    session_start(); 
?>

<html>
<head>
	<meta content="text/html; charset=UTF-8" http-equiv="content-type">
	<title>Botiga - Components</title>
</head>
<body>
    
	<?php
    $_SESSION['entrar']=0;
	session_destroy();
	unlink("Comanda.txt");
	echo "Heu sortit de la sessio<BR><BR>\n";
	echo "Tornem a l'inici\n";
	print '<META HTTP-EQUIV="refresh" CONTENT="1;URL=./iniciarsessio.html">';
    ?>
    
</body>
</html>	
