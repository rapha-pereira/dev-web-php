<?php
$numbers = [];
for ($i = 1; $i <= 10; $i++) {
  $numbers[] = $i;
}
?>

<!DOCTYPE html>
<html>

<head>
  <style>
    table {
      border-collapse: collapse;
      width: 200px;
    }

    th,
    td {
      text-align: center;
      padding: 8px;
    }

    th {
      background-color: #f2f2f2;
    }

    tr:nth-child(even) {
      background-color: #f2f2f2;
    }

    .green {
      background-color: green;
    }
  </style>
</head>

<body>
  <table>
    <tr>
      <th>Números</th>
    </tr>
    <?php foreach ($numbers as $number): ?>
      <tr>
        <td <?php if ($number % 2 == 0) echo 'class="green"'; ?>>
          <?php echo $number; ?></td>
      </tr>
    <?php endforeach; ?>
  </table>
</body>

</html>
