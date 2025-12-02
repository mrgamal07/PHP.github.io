<?php
// Database connection
$conn = mysqli_connect("localhost", "root", "", "myDB");
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$insert_msg = "";
$show_table = false; // control table display

// Insert data when form is submitted
if (isset($_POST['save'])) {
    $userID = $_POST['userID'];
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];

    $sql = "INSERT INTO mystudent(userID, name, phone, email) 
            VALUES('$userID', '$name', '$phone', '$email')";

    if (mysqli_query($conn, $sql)) {
        $insert_msg = "Data inserted successfully!";
        $show_table = true; // show table only after insert
    } else {
        $insert_msg = "Insert failed: " . mysqli_error($conn);
        $show_table = false;
    }
}
?>

<!DOCTYPE html>
<html>

<head>
    <title>Insert & Show Students</title>
    <style>
        /* General body styling */
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: #f4f6f8;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: flex-start;
            min-height: 100vh;
        }

        /* Container for form and table */
        .container {
            background: #ffffff;
            padding: 30px 40px;
            margin: 50px 0;
            border-radius: 12px;
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.1);
            width: 500px;
        }

        h2 {
            text-align: center;
            color: #333333;
            margin-bottom: 25px;
        }

        /* Form styling */
        form {
            display: flex;
            flex-direction: column;
        }

        form input {
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #cccccc;
            border-radius: 6px;
            font-size: 14px;
            transition: 0.3s;
        }

        form input:focus {
            border-color: #2575fc;
            outline: none;
            box-shadow: 0 0 5px rgba(37, 117, 252, 0.3);
        }

        form button {
            padding: 12px;
            background-color: #2575fc;
            color: white;
            font-size: 16px;
            font-weight: bold;
            border: none;
            border-radius: 8px;
            cursor: pointer;
            transition: 0.3s;
        }

        form button:hover {
            background-color: #1a5edb;
        }

        /* Message styling */
        p {
            text-align: center;
            font-weight: 500;
            color: blue;
        }

        /* Table styling */
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 30px;
        }

        table th,
        table td {
            padding: 12px 15px;
            border: 1px solid #dddddd;
            text-align: center;
            font-size: 14px;
        }

        table th {
            background-color: #2575fc;
            color: #ffffff;
            font-weight: 600;
        }

        table tr:nth-child(even) {
            background-color: #f4f4f4;
        }

        table tr:hover {
            background-color: #e1eaff;
        }

        hr {
            margin: 30px 0;
            border: none;
            border-top: 1px solid #cccccc;
        }

        /* Flex container for order button and optional messages */
        .form-header {
            display: flex;
            justify-content: flex-start;
            /* Align items to left */
            align-items: center;
            margin-bottom: 20px;
            gap: 20px;
            /* space between button and other elements */
        }

        .order-form button {
            padding: 10px 18px;
            background-color: #2575fc;
            color: white;
            font-weight: bold;
            border: none;
            border-radius: 8px;
            cursor: pointer;
            transition: 0.3s;
        }

        .order-form button:hover {
            background-color: #1a5edb;
        }
    </style>
</head>

<body>
    <div class="container">
        <h2>Insert Student</h2>
        <div class="form-header">

            <form method="POST">
                UserID: <input type="text" name="userID">
                Name: <input type="text" name="name" required>
                Phone: <input type="text" name="phone" required>
                Email: <input type="email" name="email" required>
                <button type="submit" name="save">Save</button>
            </form>

            <!-- Order By Button -->
            <form method="GET" action="order.php" class="order-form">
                <button type="submit" name="orderby">Order By UserID DESC</button>
            </form>
            <form method="GET" action="group.php">
                <button type="submit">Group By Name</button>
            </form>
        </div>
        <p><?php echo $insert_msg; ?></p>

        <?php if ($show_table) { ?>
            <hr>
            <h2>Students Table</h2>
            <table>
                <tr>
                    <th>UserID</th>
                    <th>Name</th>
                    <th>Phone</th>
                    <th>Email</th>
                </tr>
                <?php
                $result = mysqli_query($conn, "SELECT * FROM mystudent");
                while ($row = mysqli_fetch_assoc($result)) {
                    echo "<tr>
                    <td>" . $row['userID'] . "</td>
                    <td>" . $row['name'] . "</td>
                    <td>" . $row['phone'] . "</td>
                    <td>" . $row['email'] . "</td>
                  </tr>";
                }
                ?>
            </table>
        <?php } ?>
    </div>
</body>

</html>