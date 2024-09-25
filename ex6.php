<!DOCTYPE html>
<html>

<head>
  <style>
    table {
      border-collapse: collapse;
    }

    td {
      border: 1px solid black;
    }
  </style>
</head>

<body>
  <?php
  echo "<table><tr>";
  for ($i = 1; $i <= 10; $i++) {
    echo "<td>$i</td>";
  }
  echo "</tr></table>";
  ?>
</body>

</html>
