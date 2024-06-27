<?php

//Zad 1
for ($i = 1; $i <= 10; $i++) {
    echo "Hello world $i<br>";
}

//Zad 2
echo "<table>";
for ($i = 1; $i <= 10; $i++) {
    echo "<tr>";
    for ($j = 1; $j <= 10; $j++) {
        echo "<td>".$i."</td>";
        echo "<td>".$j."</td>";
        echo "<td>".pow($i, $j)."</td>";
    }
    echo "<br>";
}
echo "</table><br>";

//Zad 3
$feet = 8;
$meters = $feet*0.3048;
echo $feet." = ".$meters."<br><br>";

//Zad 4
$r = 8;
$H = 14;
echo "Objetość cylinra to ".pi()*$r*$r*$H."<br><br>";

//Zad 5
$table = ['a','e','i','o','u','y'];
$string = 'Konstantynopolitanczyk';
$suma = 0;
for ($i = 0; $i < strlen($string); $i++) {
    for ($j = 0; $j < count($table); $j++) {
        if ($string[$i] == $table[$j]) {
            break;
        }
        if ($j == 5) {
            $suma++;
        }
    };
}
$suma--;
echo $suma." = ".$string."<br><br>";

//Zad 6
echo "<ul>";
for ($i = 2; $i <= 20; $i++) {
    if ($i % 2 == 0) {
        echo "<li>" . $i . "</li>";
    }
}
echo "</ul><br>";

//Zad 7
echo "Wiatj! Dziś jest " . date("h:i:sa") . "<br> Zostało tylko 276 lat do mid-game kryzysu!";