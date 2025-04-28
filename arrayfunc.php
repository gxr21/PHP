<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>دوال المصفوفات | array functions</title>
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
        th, td {
            padding: 15px;
            border: 3px solid #ddd;
            
        }
        td{
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            font-size: 14px;
            font-weight: bold;
        }
    </style>
</head>
<body>
    
    <div class="header">
        <h1>دوال المصفوفات</h1>
    </div>
    <div class="container">
    <table border="1" style="width: 100%; margin: 20px auto; border-collapse: collapse; text-align: center;">
        <thead>
            <tr>
                <th>دوال المصفوفات</th>
                <th>الوصف</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>print_r</td>
                <td><?php 
                    $array = array("ahmed" ,"ali");
                    print_r($array); // طباعة المصفوفة print_r

                 ?>
                 </td>
            </tr>
            <tr>
                <td>array_merge</td>
                <td><?php
                    $x = array("a" => "red", "b" => "green", "c" => "blue");
                    $y = array("d" => "yellow", "e" => "black", "f" => "white");
            
                    $z = array_merge($x, $y); // دمج المصفوفتين array_merge
                    echo "المصفوفة المدمجة: ";
                    print_r($z); // دمج المصفوفتين array_merge
                 ?>
                 </td> 
            </tr>
            <tr>
                <td>array_reverse</td>
                <td><?php
                    $name = array("ahmed" ,"ali" ,"sara" ,"mohammed");
                    $reversed = array_reverse($name); // عكس ترتيب المصفوفة array_reverse
                    echo "المصفوفة المعكوسة: ";
                    print_r($reversed); // طباعة المصفوفة المعكوسة
                 ?>
                 </td>
                </td>
            </tr>
            <!-- يمكنك إضافة المزيد من الشروط هنا -->
            <tr>
                <td>array_pop</td>
                <td><?php 
                    $names = array("ahmed" ,"ali" ,"sara" ,"mohammed");
                    $popped = array_pop($names); // إزالة العنصر الأخير من المصفوفة array_pop
                    echo "العنصر الذي تمت إزالته: " . $popped . "<br>"; // طباعة العنصر الذي تمت إزالته array_pop
                    echo "المصفوفة بعد الإزالة: ";
                    print_r($names); // طباعة المصفوفة بعد الإزالة
                 ?>
                 </td>
            </td>
        </tr>
            <tr>
                <td>array_shift</td>
                <td><?php 
                    $names = array("ahmed" ,"ali" ,"sara" ,"mohammed");
                    $shifted = array_shift($names); // إزالة العنصر الأول من المصفوفة array_shift
                    echo "العنصر الذي تمت إزالته: " . $shifted . "<br>"; // طباعة العنصر الذي تمت إزالته array_shift
                    echo "المصفوفة بعد الإزالة: ";
                    print_r($names); // طباعة المصفوفة بعد الإزالة
                 ?>
                 </td>
            </td>
        </tr>
        <tr>
            <td>array_push</td>
            <td><?php
                $names = array("a"=>"ali", "b"=>"ahmed", "c"=>"sara", "d"=>"mohammed");
                $array_push = array_push($names,"abbas"); // إضافة عنصر إلى نهاية المصفوفة array_push
                echo "المصفوفة بعد الإضافة: ";
                print_r($names);
                ?>
            </td>
        </tr>
        <tr>
            <td>implode</td>
            <td><?php
                $string = array("ahmed", "ali", "sara" , "mohammed");
                $array = implode("/" , $string); // تحويل المصفوفة إلى سلسلة نصية implode
                echo "السلسلة النصية: " ;
                echo $array // طباعة السلسلة النصية
            ?>
        </tr>
        <tr>
        <td>explode</td>
            <td><?php
                $char = "/h/a/s/m/";
                $array = explode("/" , $char); // تحويل السلسلة النصية إلى مصفوفة explode
                for($i = 0 ; $i < 5;$i++){
                    echo $array[$i]; // طباعة المصفوفة
                }
            ?>
            </td>
        </tr>
     <tr>
        <td>key</td>
        <td><?php
            $array = array("a"=>"ahmed","b" =>"ali" , "c" => "abbas");
            $keys = key($array);
            print_r($keys);
        ?>
        </td>
     </tr>
     <tr>
        <td>array_keys</td>
        <td><?php
                $array = array("ahmed" ,"ali" , "abbas","mohammed" , "sara");
                $keys = array_keys($array); // الحصول على مفاتيح المصفوفة array_keys
                echo "مفاتيح المصفوفة: ";
                print_r($keys); // طباعة مفاتيح المصفوفة array_keys
         ?>     
        </td>
     </tr>
     <tr>
        <td>array_unique</td>
        <td><?php
            $array = array("ahmed" ,"ali" , "abbas","mohammed" , "sara" , "ahmed" ,"ali" , "abbas","mohammed" , "sara" , "jasem");
            $unique = array_unique($array); // الحصول على العناصر الفريدة من المصفوفة array_unique
            echo "العناصر الفريدة: ";
            print_r($unique); // طباعة العناصر الفريدة array_unique
        ?>
        </td>
     </tr>
     <tr>
        <td>array_slice</td>
        <td><?php
            $array = array("ahmed" , "ali" , "abaas" , "sara", "mohammed");
            $sliced = array_slice($array , 1,3);
            echo "المصفوفة الأصلية: ";
            print_r($sliced); // الحصول على جزء من المصفوفة array_slice
            echo "المصفوفة بعد التقطيع: ";
            print_r($array); // طباعة المصفوفة بعد التقطيع array_slice
        ?>
      </td>
     </tr>
     <tr>
        <td>sort array</td>
        <td><?php
         $array = array(1,3,4,7,8,10,2,5,6,9);
         $sorted = sort($array);
        echo "المصفوفة بعد الترتيب: ";
        print_r($array); // ترتيب المصفوفة array_sort
        ?>
      </td>
     </tr>
    </table>
    </div>
</body>
</html>