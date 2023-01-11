<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ćwiczenie 6.26 </title>
</head>
<body>
<header>
    <h1>Ćwiczenie 6.26</h1>
    <p>Autor: Mikołaj Pawlaczyk&copy; 4pir</p>
    <hr>
</header>
    <section>
        <h2>Z bazy danych o nazwie dane wyświetl dane pracowników z tabeli pracownicy.</h2>
    </section>
<?php
$do_bazy = mysqli_connect('localhost', 'root', '', 'bazadanych');if (!$do_bazy) {
echo "Błąd połączenia z serwerem MySQL.<br>";
?>
</body>
</html>
<?php
exit;
} else {
    $zapytanie = mysqli_query($do_bazy, 'SELECT * FROM pracownicy'); if (!$zapytanie) {
        mysqli_close();
        echo "Błąd w zapytaniu<br>";
        ?>
        </body>
        </html>
        <?php
        exit;
    } else {
        ?>
        <table>
            <tr>
                <td>id</td>
                <td>Imię</td>
                <td>Nazwisko</td>
                <td>Stanowisko</td>
            </tr>
        <?php
        while ($wiersze = mysqli_fetch_row($zapytanie)) {
            echo '<tr>';
    echo "<td>$wiersze[0]</td>";
    echo "<td>$wiersze[1]</td>";
    echo "<td>$wiersze[2]</td>";
    echo "<td>$wiersze[3]</td>";
    echo "</tr>";
 }
 ?>
 </table>
 <?php
 mysqli_close($do_bazy);
 }
}
?>

</body>
</html>
