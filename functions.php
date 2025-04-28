<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>الدوال | functions</title>
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

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
        }
        .header {
            background-color: rgb(19, 120, 221);
            color: white;
            padding: 20px 0;
            text-align: center;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        .header h1 {
            font-size: 2.5em;
            margin-bottom: 10px;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.3);
        }

        .header p {
            font-size: 1.2em;
            max-width: 700px;
            margin: 0 auto;
        }

        .navbar {
            background-color: #0c63c4;
            display: flex;
            justify-content: center;
            padding: 10px 0;
            position: sticky;
            top: 0;
            z-index: 100;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        .navbar a {
            color: white;
            text-decoration: none;
            padding: 10px 20px;
            font-weight: bold;
            transition: background-color 0.3s;
            border-radius: 5px;
            margin: 0 5px;
        }

        .navbar a:hover, .navbar a.active {
            background-color: rgba(255, 255, 255, 0.2);
        }

        .footer {
            background-color: #333;
            color: white;
            text-align: center;
            padding: 20px;
            margin-top: 365px;
        }
        table {
            width: 100%;
            margin: 20px auto;
            border-collapse: collapse;
            text-align: center;
        }
        tr:nth-child(even) {
            background-color: #f2f2f2;
        }
        
        tr:hover {
            background-color: #e6f3ff;
        }
        td{
            font-size: 14px;
            font-weight: bold;
        }
        th, td {
            padding: 15px;
            border: 1px solid #ddd;
        }
    </style>
</head>
<body>
    <div class="header">
        <h1>الدوال | functions</h1>
    </div>
    <div class="container">
    <table border="1" style="width: 100%; margin: 20px auto; border-collapse: collapse; text-align: center;" >
        <thead>
            <tr>
                <th>الدوال</th>
                <th>الوصف</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>simple_function</td>
                <td><?php 
                   function simple_function($name){
                    return "Hello $name";
                   }
                   echo simple_function("Ali");
                 ?>
                 </td>
            </tr>
            <tr>
                <td>return_function</td>
                <td><?php
                    function add($a ,$b){
                        return $a + $b;
                    }
                    $result = add(10, 10);
                    echo "The result is: $result";
                 ?>
                 </td> 
            </tr>
            <tr>
                <td>global_function</td>
                <td><?php
                    function global_function(){
                        global $x;
                        $x = 10;
                    }
                    global_function();
                    echo "The value of x is: $x";
                 ?>
                 </td>
                </td>
            </tr>
            <tr>
                <td>return_function_global[value]</td>
                <td><?php
                    function return_function_global(){
                        return $GLOBALS["y"];
                    }
                    $y = "ali";
                    echo return_function_global();
                ?>
              </td>
            </tr>
    </table>
    </div>
    
    <?php

    ?>
</body>
</html>