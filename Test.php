<?php
$tab1 = array();

$tab1[0]=19;
$tab1[1]=7;
$tab1[2]=16;
$tab1[3]=14;
$tab1[4]=8;
$tab1[5]=20;
$tab1[6]=13;
$tab1[7]=1;
$tab1[8]=17;
$tab1[9]=6;

$ile_elem=count($tab1);
echo("Wszystkie elementy: ");
for ($i=0;$i<$ile_elem;$i++) {
    echo $tab1[$i].', ';
}
echo("<br><br>");
echo("Liczby parzyste: ");
for ($i=0;$i<$ile_elem;$i++) {

    if($tab1[$i]%2==0){
        echo $tab1[$i].', ';
    }
}

$suma = 0;
echo("<br><br>");
echo("Suma: ");
for ($i=0;$i<10;$i++){
    $suma += $tab1[$i];
    echo($suma);
}

echo("<br><br>");
echo("Wyświetl 2 i 7 index z tablicy: ");
echo("<br>");
for($i=0;$i<8;$i++){ 
    echo("Index[".$i."] to: ".$tab1[$i]."<br>");
}

?>