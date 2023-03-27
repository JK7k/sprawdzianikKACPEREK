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
        <h2>Strona dla milosnikow kwaitow</h2>
        <form method="POST" action="dzialanie.php">
            <label for="miasto"> Podaj nazwe miasta </label>
            <input type="text" id="miasto" name="miasto">
            <button type="submit" name="submit">sprawdz</button>
        
        </form>


    </section>
    <section class="prawy">
    <button type="button" onclick="location.href='dzialanie.php'">Przejdź do działania</button>
    </section>
    <section class="wpisy">
    <h2>Nasze dzieci</h2>
		<section id="wynik_skryptu_3"></section>
		<h2>Matematycy</h2>
		<form action="dzialanie.php" method="post">
			<label for="imie">Imię:</label>
			<input type="text" id="imie" name="imie">
			<label for="nazwisko">Nazwisko:</label>
			<input type="text" id="nazwisko" name="nazwisko">
			<label for="rok_urodzenia">Rok urodzenia:</label>
			<input type="number" id="rok_urodzenia" name="rok_urodzenia">
			<label for="liczba_publikacji">Liczba publikacji:</label>
			<input type="number" id="liczba_publikacji" name="liczba_publikacji">
			<button type="submit" name="submit">Zapisz</button>
		</form>

    </section>
    <footer>
        Strone przygotowal Kacper Jaworowski
    </footer>
</body>
</html>