<?php
//stwórz 3 tablice (10el.)
//nr_pracownika, nazwisko, rok_zatrudnienia
//wyswietl te tablice
//wyswietl nazwiska pracowników których staż jest wiekszy niz 10 lat
$tab1 = array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10);
$tab2 = array("Lemańczyk", "Pajor", "Maślak", "Szymanek", "Rosół", "Wereszczyński", "Magdziak", "Morawski", "Jagieła", "Skupiński");
$tab3 = array(2000, 2012, 2011, 1989, 1990, 2021, 2002, 2003, 1994, 1997);

echo('Numer pracownika: '."<br>");
for($i = 0; $i < 10; $i++){
    echo($tab1[$i].", ");
}
echo("<br>");
echo("<br>");
echo('Nazwisko pracownika: '."<br>");
for($i = 0; $i < 10; $i++){
    echo($tab2[$i].", ");
}
echo("<br>");
echo("<br>");
echo('Rok zatrudnienia pracownika: '."<br>");
for($i = 0; $i < 10; $i++){
    echo($tab3[$i].", ");
}

echo("<br>");
echo("<br>");
echo('Pracownik ze stażem większym niż 10 lat: '."<br>");
for($i = 0; $i < 10; $i++){
    $staz = 2023 - $tab3[$i];
    if($staz > 10){
        echo($tab2[$i].", ");
    } 
}

?>