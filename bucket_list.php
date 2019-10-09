<?php
echo "Hoeveel activiteiten wil je toevoegen?" . PHP_EOL;
$act = readline();
if (!is_numeric($act)) {
    echo "$act" . ' is geen getal, probeer het opnieuw.';
    exit;
}
echo "Je gaat $act activiteiten toevoegen." . PHP_EOL;
$actie = array(

);
for ($l = 1; $l <=$act; $l++){
    array_push($actie, readline("wat wil je toevoegen aan je bucketlist?" . PHP_EOL));

}
echo "Op je bucketlist staat: " . PHP_EOL;
foreach ($actie as $actie2) {
    echo "$actie2" . PHP_EOL;
}