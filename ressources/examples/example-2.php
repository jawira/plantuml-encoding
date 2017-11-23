<?php

require __DIR__ . '/../../vendor/autoload.php';

use function Jawira\PlantUml\encodep;

$encode = encodep('Alice -> Bob: hello');

echo "http://www.plantuml.com/plantuml/uml/{$encode}";
