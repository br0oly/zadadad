
<?php
$do_bazy = mysqli_connect('localhost', 'root', '', 'bazadanych');if (!$do_bazy) {
    exit("Błąd połączenia z serwerem MySQL.");
}
$dodaj = mysqli_query($do_bazy, "INSERT INTO pracownicy VALUES('7', 'Mikolaj', 'Pawlaczyk', '4')");

if (!$dodaj === true) {
    mysqli_close($do_bazy);
    exit('Błąd w zapytaniu<br>');
}
$ile = mysqli_affected_rows($do_bazy);
echo 'Liczba rekordów dodanych do tabeli Klient wynosi: '.$ile.'<br>';
mysqli_close($do_bazy);
