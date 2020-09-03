<?php

Variables
$getal = 7;



echo gettype ($getal);

if ($getal = is_int) {
  echo boolval;
}


//Oefening 1
$klas = ["Piet van Dijk", "Rembrandt van Rijn", "Vincent van Gogh", "Floris van Dyck"];

echo var_dump ($klas);


//Opdracht 2
$klas = ["Piet van Dijk", "Rembrandt van Rijn", "Vincent van Gogh", "Floris van Dyck"];

for ($i=0; $i < count($klas) ; $i++) {
  echo $klas[$i].PHP_EOL;
}


//Opdracht 3
$klas = ["Piet van Dijk", "Rembrandt van Rijn", "Vincent van Gogh", "Floris van Dyck"];

foreach ($klas as $value) {
  echo "$value".PHP_EOL;
}


//Combiopdracht
$bucket_list = NULL;
$hoeveelheid_activiteiten = readline("Hoeveel activiteiten wil je toevoegen aan de bucket_list?");
$bucket_list = array();

for ($i=0; $i < $hoeveelheid_activiteiten; $i++) {
  $activity = readline("Welke activiteit wil je toevoegen aan de bucket_list?");
  readline_add_history($activity);
  array_push($bucket_list, $activity);

}

var_dump($bucket_list);
foreach ($bucket_list as $value) {
  echo "$value".PHP_EOL;
}


?>
