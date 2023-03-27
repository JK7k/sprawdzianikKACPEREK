<!DOCTYPE html>
<html lang="pl-PL">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sprawdzian Kacper Jaworowski</title>
    <link rel="stylesheet" href="styl3.css">

    </style>
</head>
<body>
    <section class="banner">
    <h1>Sprawdzian Aplikacje desktopowe i mobilne</h1>
    <h2>DANE</h2>
    <ol>
        <li>Bazy danych</li>
        <li>HTML</li>
        <li>css</li>
        <li>php</li>
        <li>javascript</li>
    </ol>

    </section>
    <section class="lewy">
    <?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "egzamin";

$conn = mysqli_connect($servername, $username, $password, $dbname);
if (!$conn) {
  die("Połączenie nieudane: " . mysqli_connect_error());
}
$miasto = $_POST['miasto'];
$sql = "SELECT nazwa, ulica FROM kwiaciarnie WHERE miasto='$miasto'";
$result = mysqli_query($conn, $sql);
echo "<h3>Wyniki wyszukiwania:</h3>";
if (mysqli_num_rows($result) > 0) {
  while($row = mysqli_fetch_assoc($result)) {
    echo "<p>".$row['nazwa'].", ".$row['ulica']."</p>";
  }
} else {
  echo "<p>Brak wyników wyszukiwania.</p>";
}
mysqli_close($conn);
?>
</section>
<section class="prawy">
    <ol>
        <ul><?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "egzamin";

$conn = mysqli_connect($servername, $username, $password, $dbname);
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}


$sql = "SELECT id, dataWyjazdu, cel, cena FROM wycieczki WHERE dostepna = 1";

$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {

  echo "<ul>";
  while($row = mysqli_fetch_assoc($result)) {
    echo "<li>" . $row["id"] . ", dnia " . $row["dataWyjazdu"] . " jedziemy do " . $row["cel"] . ", cena " . $row["cena"] . "</li>";
  }
  echo "</ul>";
} else {
  echo "Brak wyników";
}
mysqli_close($conn);
?></ul>
</ol>
</section>
<section class="wpisy">
</section>

<footer> STRONE PRZYGOTOWAL KACPER JAWOROWSKI</footer>
</body>
<html>
