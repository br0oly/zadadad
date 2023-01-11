<link rel="stylesheet" href="style.css">
<?php
echo "Dziękujemy! Rejestracja przebiegła pomyślnie.<br>";
echo "Wprowadzone dane:<br>";
echo "Imie i Nazwisko: " . trim($_POST['nazw']) . "<br>";
echo "Numer Telefonu: " . trim($_POST['tel']) . "<br>";
echo "Adres e-mail: " . trim($_POST['adr']) . "<br>";
if (!isset($_POST['konkurs'])) {
    echo "Tekst konkursowy";
} else {
    echo "Tekst konkursowy: " . trim($_POST['konkurs']) . "<br>";
}
if (!isset($_POST['kolor'])) {
    echo "Kolor butów";
} else {
    echo "Kolor butów: " . trim($_POST['kolor']) . "<br>";
}

echo "<p>Wybrane opcje:</p>";
if (!empty($_POST['opcje'])){
    echo "<ul>";
        foreach ($_POST['opcje'] as $wartosc){
            echo "<li>$wartosc</li>";
        }
        echo "</ul>";
} else {
    echo "nie wybrał opcji</p>";
}
echo "Rozmiar: " . trim($_POST['but']) . "<br>";
