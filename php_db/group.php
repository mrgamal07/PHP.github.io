<?php
$conn = mysqli_connect("localhost", "root", "", "myDB");
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT * FROM mystudent GROUP BY name ORDER BY userID DESC";
$result = mysqli_query($conn, $sql);
?>

<!DOCTYPE html>
<html>
<head>
<title>Group By Name</title>
</head>

<body>

<h2>Grouped Students (By Name)</h2>

<table border="1">
<tr>
    <th>UserID</th>
    <th>Name</th>
    <th>Phone</th>
    <th>Email</th>
</tr>

<?php while ($row = mysqli_fetch_assoc($result)) { ?>
<tr>
    <td><?php echo $row['userID']; ?></td>
    <td><?php echo $row['name']; ?></td>
    <td><?php echo $row['phone']; ?></td>
    <td><?php echo $row['email']; ?></td>
</tr>
<?php } ?>

</table>

<br>
<a href="index.php">Back to Home</a>

</body>
</html>
