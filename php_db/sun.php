<?php
$conn = new mysqli("localhost", "root", "", "myDB");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * 
        FROM mystudent
         WHERE salary < (SELECT AVG(salary) FROM mystudent)";
        // -- WHERE salary < (50000)";

$result = $conn->query($sql);

while ($row = $result->fetch_assoc()) {
    echo "ID: {$row['userID']} | Name: {$row['name']} | Salary: {$row['salary']}<br>";
}

$conn->close();
?>