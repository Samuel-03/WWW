<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <form action="checkbox.php" method="post">
      Apples: <input type="checkbox" name="fruits[]" value="apples"><br>
      Oranges: <input type="checkbox" name="fruits[]" value="oranges"><br>
      Pineapples: <input type="checkbox" name="fruits[]" value="pineapple"><br>
      <input type="submit">
    <?php
      $fruits = $_POST["fruits"];
      echo $fruits[1];
    ?>
  </body>
</html>
