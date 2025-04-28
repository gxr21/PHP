<?php
$result = "";
    
if(isset($_POST['ok'])) {
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
    $operation = $_POST['operation'];
    
    switch ($operation) {
        case 'add':
            $result = $num1 + $num2;
            break;
        case 'subtract':
            $result = $num1 - $num2;
            break;
        case 'multiply':
            $result = $num1 * $num2;
            break;
        case 'divide':
            if ($num2 != 0) {
                $result = $num1 / $num2;
            } else {
                echo "<script>alert('Cannot divide by zero!');</script>";
                $result = "Error";
            }
            break;
        default:
            echo "<script>alert('Invalid operation!');</script>";
            $result = "Error";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculator</title>
    <style>
        *{
            padding: 0;
            margin: 0;
        }
        .Calculator-php{
            max-width:400px;
            padding:20px;
            margin:20px;
            box-shadow:0 2px 5px rgb(0 ,0,0,0.1);
            background-color:white;
           
        }
        input
        {
            width:80%;
            padding:10px;
            margin-bottom:15px;
            border-radius:4px;
            border:1px solid #ccc;
        }
         select{
            width:80%;
            padding:10px;
            margin-bottom:15px;
            border-radius:4px;
            border:1px solid #ccc;
         }

        button{
            width:100%;
            padding:10px;
            border-radius:4px;
            border:none;
            background-color:rgb(19, 120, 221);
            color:white;
            cursor:pointer;
            font-size:16px;
        }
        label{
            display:block;
            margin-bottom:5px;
            font-size:16px;
        }
        h1{
            text-align:center;
            margin-bottom:20px;
            font-size:24px;
        }
        h2{
            text-align:center;
            margin-bottom:20px;
            font-size:18px;
        }
    </style>
</head>
<body>
    <form method="POST">
    <div class="Calculator-php">
            <h1>Calculator</h1>
            <h2>choice opreation: [+ , - , *, /]</h2>
            <label for="num1">Num 1 :</label>
            <input type="number" id="num1" required name="num1" placeholder="Enter number 1" value="<?php echo isset($_POST['num1']) ? htmlspecialchars($_POST['num1']) : ''; ?>"><br><br>

            <label for="num2">Num 2:</label>
            <input type="number" id="num2" required name="num2" placeholder="Enter number 2" value="<?php echo isset($_POST['num2']) ? htmlspecialchars($_POST['num2']) : ''; ?>" ><br><br>

            <label for="operation">Operation:</label>
            <select id="operation" name="operation" required>
                <option value="add" <?php echo (isset($_POST['operation']) && $_POST['operation']=='add') ? 'selected' : ''; ?>>Add</option>
                <option value="subtract" <?php echo (isset($_POST['operation']) && $_POST['operation']=='subtract') ? 'selected' : ''; ?>>Subtract</option>
                <option value="multiply" <?php echo (isset($_POST['operation']) && $_POST['operation']=='multiply') ? 'selected' : ''; ?>>Multiply</option>
                <option value="divide" <?php echo (isset($_POST['operation']) && $_POST['operation']=='divide') ? 'selected' : ''; ?>>Divide</option>
            </select><br><br>
            <input type="text" name="result" placeholder="Result" value="<?php echo htmlspecialchars($result); ?>" readonly><br><br>
            <button name="ok">Ok</button>
    </div>
    </form>
</body>
</html>