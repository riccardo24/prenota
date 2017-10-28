<!doctype html>
<html>
<head>
<title>Lista della spesa</title>
</head>
<body>
<h2>Conferma registrazione</h2>
<hr />
<?php
/*
* dati trasmessi dal form
*/
$nome = $_POST ["nome"];
$reparto = $_POST ["reparto"];
$e-mail = $_POST ["e-mail"];
echo "La richiesta di $nome $reparto è stata registrata. <br />";
echo "con l'indirizzo di posta elettronica $e-mail. <br />";
echo "la richiesta di accesso al servizio è arrivata <br />";
echo "alle ore", date("H:i:s"), "del giorno:",date("d-m-Y");
?>
</body>
</html>



