<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php ?>
    <form action="calculator.php" method="get">
      <input type="number" name="num1"><br>
      <input type="number" name="num2"><br>
      <input type="number" name="num3"><br>
      <input type="submit">
    </form>
    Answer:<?php echo $_GET["num1"] + $_GET["num2"] + $_GET["num3"] ?>
        
</body>

</html>