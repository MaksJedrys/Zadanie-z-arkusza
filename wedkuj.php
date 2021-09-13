<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wędkujemy</title>
    <link rel="stylesheet" href="styl_1.css">
</head>
<body>
    <header>
        <h1>Portal dla wędkarzy</h1>
    </header>
    <div id="lewy">
        <h2>Ryby drapieżne naszych wód</h2>
        <ul>
        <?php
        $db = new mysqli('localhost',
                        'root',
                        '',
                        'wedkowanie');
        $sql = $sql = "SELECT nazwa, wystepowanie FROM `ryby` WHERE styl_zycia = 1";
        $wynik = $db->query($sql);
        while($wiersz = $wynik->fetch_assoc()) {
            $nazwa = $wiersz['nazwa'];
            $wystepowanie = $wiersz['wystepowanie'];
            echo "<li>$nazwa, wystepowanie: $wystepowanie</li>";
        }
        $db->close();

        ?>
        </ul>
    </div>
    <div id="prawy">
        <img src ="ryba1.jpg" alt="sum"><br>
        <a href="kwerendy.txt">Pobierz kwerendy</a>
    </div>
    <footer>
        <p>Stronę wykonał: Maks Jędrys</p>
    </footer>

</body>
</html>