<?php

$curso = array(
  'nome' => 'PHP',
  'data' => '01/01/2022',
  'carga horária' => '40 horas',
  'local' => 'Online'
);

foreach ($curso as $indice => $valor) {
  echo "Nome do curso: " . $curso['nome'] . "\n";
  echo "Informação armazenada em \$curso[$indice]: $valor\n";
  echo "<br>";
}
