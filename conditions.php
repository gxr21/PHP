<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>conditions | الشروط</title>
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
        th, td {
            padding: 15px;
            border: 1px solid #ddd;
        }
    </style>
</head>
<body>
    
    <div class="header">
        <h1>الشروط | conditions </h1>
    </div>
    <div class="container">
    <table border="1" style="width: 100%; margin: 20px auto; border-collapse: collapse; text-align: center;">
        <thead>
            <tr>
                <th>الشرط</th>
                <th>الوصف</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>IF STATMENT</td>
                <td><?php 
                    // مثال على استخدام جملة if
                    $condition = false; // يمكنك تغيير هذه القيمة لاختبار الشرط
                    if ($condition) {
                        echo "الشرط صحيح!";
                    } else {
                        echo "الشرط خاطئ!";
                    }
                 ?>
                 </td>
            </tr>
            <tr>
                <td>IF-ELSE</td>
                <td><?php
                    // مثال على استخدام جملة if-else
                    $number = 10; // يمكنك تغيير هذه القيمة لاختبار الشرط
                    if ($number > 0) {
                        echo "العدد موجب!";
                    } elseif ($number < 0) {
                        echo "العدد سالب!";
                    } else {
                        echo "العدد صفر!";
                    }
                 ?>
                 </td> 
            </tr>
            <tr>
                <td>IF WITH ?</td>
                <td><?php
                    // مثال على استخدام جملة if مع ?
                    // $age = 18; // يمكنك تغيير هذه القيمة لاختبار الشرط
                    // $status = ($age >= 18) ? "بالغ" : "قاصر";
                    // echo "حالتك: " . $status;
                    $num1 = 10;
                    $result = ($num1 >= 10) ? "الرقم اكبر من 10 ": "الرقم اقل من 10";
                    echo $result;
                 ?>
                 </td>
                </td>
            </tr>
            <!-- يمكنك إضافة المزيد من الشروط هنا -->
            <tr>
                <td>Switch Statment</td>
                <td><?php 
                    // مثال على استخدام جملة switch
                    // $day = 3; // يمكنك تغيير هذه القيمة لاختبار الشرط
                    // switch ($day) {
                    //     case 1:
                    //         echo "الاثنين";
                    //         break;
                    //     case 2:
                    //         echo "الثلاثاء";
                    //         break;
                    //     case 3:
                    //         echo "الأربعاء";
                    //         break;
                    //     case 4:
                    //         echo "الخميس";
                    //         break;
                    //     case 5:
                    //         echo "الجمعة";
                    //         break;
                    //     case 6:
                    //         echo "السبت";
                    //         break;
                    //     case 7:
                    //         echo "الأحد";
                    //         break;
                    //     default:
                    //         echo "يوم غير صحيح!";
                    // }
                    $name = "ahmed"; // يمكنك تغيير هذه القيمة لاختبار الشرط
                    switch($name == "sara") {
                        case "ahmed":
                            echo "مرحبا أحمد!";
                            break;
                        case "ali":
                            echo "مرحبا علي!";
                            break;
                        case "sara":
                            echo "مرحبا سارة!";
                            break;
                        default:
                            echo "اسم غير معروف!";
                    }
                 ?>
                 </td>
            </td>
    </table>
    </div>
    <?php

    ?>
</body>
</html>