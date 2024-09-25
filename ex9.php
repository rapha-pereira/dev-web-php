<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Galeria de Imagens</title>
  <style>
    table {
      width: 100%;
      border-collapse: collapse;
      margin: 20px 0;
    }

    td {
      padding: 10px;
      text-align: center;
    }

    img {
      width: 150px;
      height: 150px;
      object-fit: cover;
      border: 2px solid #ccc;
    }
  </style>
</head>

<body>

  <h1>Galeria de Imagens</h1>

  <table>
    <tr>
      <?php
      // Criando as imagens dinamicamente com base nos números de 01 a 10
      for ($i = 1; $i <= 10; $i++) {
        // Formatar o número da imagem com dois dígitos (01, 02, ..., 10)
        $numero = str_pad($i, 2, '0', STR_PAD_LEFT);
        echo "<td><img src='images/foto{$numero}.jpg' alt='Foto {$numero}'></td>";

        // Se o índice for divisível por 5, inserir uma nova linha
        if ($i % 5 == 0) {
          echo "</tr><tr>";
        }
      }
      ?>
    </tr>
  </table>

</body>

</html>
