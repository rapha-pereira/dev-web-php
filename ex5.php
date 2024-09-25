<?php
$estado = [
  'PR' => 'Curitiba',
  'SC' => 'Florianópolis',
  'RS' => 'Porto Alegre'
];

foreach ($estado as $sigla => $capital) {
  echo "Sigla: $sigla, Capital: $capital" . PHP_EOL;
  echo "<br>";
}
