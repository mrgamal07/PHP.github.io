<?php
$conn = mysqli_connect("localhost", "root", "", "myDB");
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "connected success";
?>

<!DOCTYPE html>
<html>
<head>
    <title>Ordered Students Table</title>
</head>
<body>

<h2>Students Table Ordered by UserID DESC</h2>
<table border="1" cellpadding="5">
<tr>
    <th>UserID</th>
    <th>Name</th>
    <th>Password</th>
    <th>Gmail</th>
</tr>

<?php
$sql = "SELECT * FROM mystudent ORDER BY userID DESC";
$result = mysqli_query($conn, $sql);

while ($row = mysqli_fetch_assoc($result)) {
    echo "<tr>
            <td>".$row['userID']."</td>
            <td>".$row['name']."</td>
            <td>".$row['password']."</td>
            <td>".$row['gmail']."</td>
          </tr>";
}
?>

</table>

</body>
</html>
