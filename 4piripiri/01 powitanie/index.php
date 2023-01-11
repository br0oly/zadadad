<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Mikołaj Pawlaczyk</h1><hr>
    <form action="index.php" method="post">
        <label for="imie">Podaj imię: </label>
        <input type="text" name="imie">
        <input type="submit" value="Zatwierdź">
    </form>

    <?php
    if (isset($_POST['imie'])){
        $imie = $_POST['imie'];
        echo "Cześć ". $imie;
    }
    ?>
</body>
</html>
