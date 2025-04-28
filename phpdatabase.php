<?php
require 'conn.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP-DATABASE</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        body {
            background-color: #f0f2f5;
        }

        .login-phpdatabase {
            max-width: 400px;
            margin: 100px auto;
            padding: 20px;
            background-color: white;
            border-radius: 8px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        h1 {
            text-align: center;
            margin-bottom: 20px;
        }

        label {
            display: block;
            margin-bottom: 5px;
        }

        input[type="text"],
        input[type="password"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border-radius: 4px;
            border: 1px solid #ccc;
        }

        input[type="submit"],
        input[type="reset"] {
            width: calc(50% - 10px);
            padding: 10px;
            border-radius: 4px;
            border: none;
            background-color: rgb(19, 120, 221);
            color: white;
            cursor: pointer;
        }

        input[type="submit"]:hover,
        input[type="reset"]:hover {
            background-color: rgb(15, 100, 180);
        }
    </style>
</head>
<body>
    <div class="login-phpdatabase">
        <form action="phpdatabase.php" method="POST">
            <h1>PHP-DATABASE</h1>
            <label for="username">Username:</label>
            <input type="text" id="username" required name="username" ><br><br>

            <label for="password">Password:</label>
            <input type="password" id="password" required name="password" ><br><br>

            <input type="submit" name="Login">
            <input type="reset" value="Reset"><br><br>  
    </form>
    </div>
    <?php
    // Database connection parameters
    if (isset($_POST['Login'])) {  
            $u = $_POST['username'];
            $b = $_POST['password'];
            $sql = "INSERT INTO php (username, password) VALUES ('$u', '$b')";
            mysqli_query($conn, $sql);}
     
    ?>
</body>
</html>