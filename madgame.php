<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php   ?>
    <form action="madgame.php" method="get">
        color:<input type="text" name="color"> <br>
        plural noun:<input type="text" name="pluralnoun"> <br>
        celebrity:<input type="text" name="celebrity"> <br>
        <input type="submit">
        
    </form>
    <br><br>
    <?php
    $color = $_GET["color"];
    $Pluralnoun = $_GET["pluralnoun"];
    $celebrity = $_GET["celebrity"];
    echo "i love  $color <br>";
    echo "this is red in $Pluralnoun <br>";
    echo "i am and i love $celebrity <br>";
    ?>

  
</body>

</html>