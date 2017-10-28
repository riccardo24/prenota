<html lang="en">
<head>
<title>CSS Template</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {
    box-sizing: border-box;
}

body {
  margin: 0;
}

/* Style the top navigation bar */
.topnav {
    overflow: hidden;
    background-color: #333;
}

/* Style the topnav links */
.topnav a {
    float: left;
    display: block;
    color: #f2f2f2;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}

/* Change color on hover */
.topnav a:hover {
    background-color: #ddd;
    color: black;
}

/* Style the content */
.content {
    background-color: #ddd;
    padding: 10px;
    height: 200px; /* Should be removed. Only for demonstration */
}

/* Style the footer */
.footer {
    background-color: #f1f1f1;
    padding: 10px;
}
</style>
</head>
<body>

<div class="topnav">

  <a  href="prenota.html">prenota</a>
  <a href="#">Link</a>
  <a href="#">Link</a>
</div>

<div class="content">
  <?php
$nome=$_POST["nome"];
$cognome=$_POST["cognome"];
$email=$_POST["e-mail"];



$file = fopen("prenotazioni.txt","a");
fwrite($file,$nome." ".$cognome." ".$email);
fclose ($file);
echo "Registrazione avvenuta"
?>
</div>

<div class="footer">
  <p>prodotto da Alessadro Mosca,Edoardo Cegna,Riccardo Damiani</p>
</div>

</body>
</html>