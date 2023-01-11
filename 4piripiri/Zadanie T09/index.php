<style>

    body{
        text-align: center;
        margin-top: 4em;
        background-color: mediumturquoise;S
    }
</style>

<?php
$tablica = array(321,171,2346,921,8342);
//
//sort($tablica);

//$suma = ($tablica[0]+$tablica[1]);

//echo "suma dwóch najmniejszych elementów tablicy = ".$suma ;

function sortownia($tablica){
    sort($tablica);
    $suma = ($tablica[0]+$tablica[1]);
    echo "--------------------------------------------------------------------<br>";
    echo "Suma dwóch najmniejszych elementów tablicy = ".$suma."<br>";
    echo "--------------------------------------------------------------------";
}
sortownia($tablica);