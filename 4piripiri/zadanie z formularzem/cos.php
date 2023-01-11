<!DOCTYPE HTML>
<html>
<head>
    <title>Formularz rejestracyjny</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
</head>

<body>
<h1>Autor: Mikołaj Pawlaczyk</h1><hr>
<form action="skrypt.php" method="post">
    <fieldset>
  <legend>Podstawowe dane:</legend>
    Imię i Nazwisko:<br>
    <input type="text" name="nazw" value=" " size="30"><br>
    Adres E-mail:<br>
    <input type="email" name="adr" value=" " size="30"><br>
    Numer telefonu:<br>
    <input type="text" name="tel" value=" " size="30"><br>
    Moje buty są takie stare...<br>
    <textarea type="text"  name="konkurs"> </textarea><br>

    </fieldset>
    <h2>Zaprojektuj własne trampki:</h2>
        <fieldset>
        <legend>Własny projekt butów</legend>
        <fieldset>
            <legend>Kolor: <br></legend>
            <input type="radio" name="kolor" value="czerwony">czerwony<br>
            <input type="radio" name="kolor" value="czarny">czarny<br>
            <input type="radio" name="kolor" value="niebieski">niebieski<br>
            <input type="radio" name="kolor" value="zloty">złoty<br>
        </fieldset>
            <fieldset>
                <legend>Opcje(możesz wybrać kilka)</legend>
                <input type="checkbox" name="opcje[]" value="Błyszczące sznurówki">Błyszczące sznurówki<br>
                <input type="checkbox" name="opcje[]" value="Metalowe logo">Metalowe logo<br>
                <input type="checkbox" name="opcje[]" value="Świecące podeszwy">Świecące podeszwy<br>
                <input type="checkbox" name="opcje[]" value="Odtwarzanie MP3">Odtwarzanie MP3<br>




            </fieldset>
            <fieldset>
                <legend>Rozmiar:</legend>
                <select name="but" id="but">
                    <option value="40">40</option>
                    <option value="41">41</option>
                    <option value="42">42</option>
                    <option value="43">43</option>
                    <option value="44">44</option>
                    <option value="45">45</option>
                </select>
            </fieldset>


    </fieldset>
    <input type="submit" value="Wyślij" name="wyslij">&nbsp; &nbsp;
    <input type="reset" value="Wyczyść" name="zeruj">
</form>
</body>
</html>

