<?php 
if(isset($_POST['Submit'])){
$name = $_POST['name'];
$last= $_POST['last'];
$home = $_POST['home'];
$province= $_POST['province'];
$district = $_POST['district'];
$district2 = $_POST['district2'];
$zip= $_POST['zip'];
$number = $_POST['number'];
$date= $_POST['date'];

$name2 = $_POST['name2'];
$last2= $_POST['last2'];
$home2 = $_POST['home2'];
$province2= $_POST['province2'];
$district2 = $_POST['district2'];
$district22 = $_POST['district22'];
$zip2= $_POST['zip2'];
$number2 = $_POST['number2'];
$date2= $_POST['date2'];

}


?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 20px;
            position: relative;
            height: 100vh;
        }
        h1 {
            text-align: center;
            color: #333;
            width: 100%;
        }
        .container {
            position: absolute;
            top: 20px;
            left: 20px;
            right: 20px;
            bottom: 20px;
            display: flex;
            justify-content: space-between;
            align-items: flex-start;
        }
        table {
            width: 40%;
            margin: 20px;
            border-collapse: collapse;
            background: #fff;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }
        th {
            background-color: #007BFF;
            color: white;
            padding: 10px;
            text-align: left;
        }
        td {
            padding: 10px;
            border: 1px solid #ddd;
        }
        tr:nth-child(even) {
            background-color: #f9f9f9;
        }
        tr:hover {
            background-color: #f1f1f1;
        }
    </style>
</head>
<body>

<h1>ข้อมูลผู้ฝากและผู้รับ</h1>

<div class="container">
    <!-- ตารางสำหรับผู้ฝาก -->
    <table>
        <thead>
            <tr>
                <th colspan="2">ชื่อและที่อยู่ผู้ส่ง</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>ชื่อ: <?php echo $name; ?> นามสกุล: <?php echo $last; ?> บ้านเลขที่/หมู่: <?php echo $home; ?></td>
            </tr>
            <tr>
                <td>เขต: <?php echo $district; ?> จังหวัด: <?php echo $province; ?></td>
            </tr>
            <tr>
                <td>วันที่: <?php echo $date; ?></td>
            </tr>
            <tr>
                <td>รหัสไปรษณีย์: <?php echo $zip; ?></td>
            </tr>
        </tbody>
    </table>

    <!-- ตารางสำหรับผู้รับ -->
    <table style="position: absolute; bottom: 20px; right: 20px;">
        <thead>
            <tr>
                <th colspan="2">ชื่อและที่อยู่ผู้รับ</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>ชื่อ: <?php echo $name2; ?> นามสกุล: <?php echo $last2; ?> บ้านเลขที่/หมู่: <?php echo $home2; ?></td>
            </tr>
            <tr>
                <td>เขต: <?php echo $district22; ?> จังหวัด: <?php echo $province2; ?></td>
            </tr>
            <tr>
                <td>วันที่: <?php echo $date2; ?></td>
            </tr>
            <tr>
                <td>รหัสไปรษณีย์: <?php echo $zip2; ?></td>
            </tr>
        </tbody>
    </table>
</div>

</body>
</html>
