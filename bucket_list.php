<?php
echo 'Hoe veel activiteiten wil je toevoegen?' . PHP_EOL;
$activiteit = readline();
if (is_numeric($activiteit));
elseif (!is_numeric($activiteit)) {
    echo "$activiteit" . ' is geen getal,probeer het opnieuw.';
    exit;
}
echo "Je gaat $activiteit activiteiten toevoegen!" . PHP_EOL;
$actie1 = array(
);
for ($a = 1; $a <= $activiteit; $a++) {
    array_push($action, readline("Wat wil je toevoegen aan jouw bucketlist?" . PHP_EOL));
}
echo "Op je bucket list staat: " . PHP_EOL;
foreach($actie1 as $actie2)
echo "$actie2".PHP_EOL;