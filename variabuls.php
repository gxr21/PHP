<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>أنواع البيانات في PHP</title>
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

        .container {
            max-width: 1200px;
            margin: 30px auto;
            padding: 20px;
        }

        .content-box {
            background-color: white;
            border-radius: 10px;
            padding: 30px;
            margin-bottom: 30px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }

        .section-title {
            border-bottom: 2px solid #0c63c4;
            padding-bottom: 10px;
            margin-bottom: 20px;
            color: #333;
        }
        
        h3 {
            margin: 20px 0 10px;
            color: #0c63c4;
        }
        
        p {
            line-height: 1.6;
            margin-bottom: 15px;
            color: #444;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin: 20px 0;
        }
        
        th {
            background-color: #0c63c4;
            color: white;
            padding: 12px;
            text-align: center;
        }
        
        td {
            padding: 10px;
            text-align: center;
            border-bottom: 1px solid #ddd;
        }
        
        tr:nth-child(even) {
            background-color: #f2f2f2;
        }
        
        tr:hover {
            background-color: #e6f3ff;
        }

        .code-example {
            background-color: #f5f5f5;
            padding: 15px;
            border-radius: 5px;
            margin: 15px 0;
            direction: ltr;
            text-align: left;
            font-family: monospace;
            overflow-x: auto;
        }
    </style>
</head>
<body>
    <!-- الهيدر -->
    <div class="header">
        <h1>Variabuls | البيانات </h1>
        <p>تعرف على أنواع البيانات المختلفة وكيفية استخدامها</p>
    </div>
     <div class="container">
     <div class="content-box">
            <h2 class="section-title">أنواع البيانات الأساسية في PHP</h2>
            
            <p>تدعم لغة PHP العديد من أنواع البيانات التي تسمح للمطورين بتخزين أنواع مختلفة من المعلومات ومعالجتها. فهم هذه الأنواع أمر ضروري للبرمجة الفعالة في PHP.</p>

            <h3>الأنواع الأساسية في PHP</h3>
            
            <table>
                <thead>
                    <tr>
                        <th>النوع</th>
                        <th>الوصف</th>
                        <th>مثال</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Integer</td>
                        <td>أعداد صحيحة بدون كسور</td>
                        <td><div class="code-example">$age = 25;</div></td>
                    </tr>
                    <tr>
                        <td>Float / Double</td>
                        <td>أعداد عشرية (بكسور)</td>
                        <td><div class="code-example">$price = 19.99;</div></td>
                    </tr>
                    <tr>
                        <td>String</td>
                        <td>سلسلة من الأحرف</td>
                        <td><div class="code-example">$name = "محمد";</div></td>
                    </tr>
                    <tr>
                        <td>Boolean</td>
                        <td>قيمة منطقية (صح/خطأ)</td>
                        <td><div class="code-example">$isActive = true;</div></td>
                    </tr>
                    <tr>
                        <td>Array</td>
                        <td>مصفوفة من القيم</td>
                        <td><div class="code-example">$colors = ["أحمر", "أخضر", "أزرق"];</div></td>
                    </tr>
                    <tr>
                        <td>Object</td>
                        <td>كائن من صنف معين</td>
                        <td><div class="code-example">$user = new User();</div></td>
                    </tr>
                    <tr>
                        <td>NULL</td>
                        <td>قيمة فارغة</td>
                        <td><div class="code-example">$result = null;</div></td>
                    </tr>
                </tbody>
            </table>
     </div>
        
</body>
</html>