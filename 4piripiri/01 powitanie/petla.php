<?php
$tab = array(
    1=>'biały',
    2=>'czarny',
    3=>'niebieski',
    4=>'zielony',
);
foreach($tab as $x)
{
    echo "$x <br/>";
}
echo "------------------<br/>";
foreach($tab as $k1 =>$x)
{
    echo "tab[$k1]=$x <br/>";
}
?>