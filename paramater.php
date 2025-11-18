<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php ?>
    <form action="paramater.php" method="get">
        Name:<input type="text" name="name"><br>
        Age:<input type="number" name="age"><br>
        <input type="submit">
    </form>
    <br>
    <?php 
   if (isset($_GET["name"]) && $_GET["name"] !== "") {
    echo "Name: " . $_GET["name"] . "<br>";
} else {
    echo "Name is not provided.<br>";
}

if (isset($_GET["age"]) && $_GET["age"] !== "") {
    echo "Age: " . $_GET["age"];
} else {
    echo "Age is not provided.";
}
    ?>
</body>

</html>