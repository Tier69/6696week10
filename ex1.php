<!DOCTYPE html>
<html lang="en">
<head>
<?php
 include("conn.php")
?>
<!-- เพิ่มส่วน ใช้งาน Bootstrap -->
<!-- Latest compiled and minified CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

<!-- Latest compiled JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

<!-- ส่วนของ DataTable -->
<link href="https://cdn.datatables.net/1.13.7/css/dataTables.bootstrap5.min.css" rel="stylesheet">

<!-- เพิ่มส่วน ใช้งาน Google font -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Itim&family=Kanit:ital,wght@0,200;0,300;1,100;1,200&family=Prompt:ital,wght@0,200;0,300;1,300&display=swap" rel="stylesheet">

<!-- เพิ่ม CSS ให้ใช้ Font  -->
<style>
    body{
        font-family: 'Kanit', sans-serif;
        margin-top : 100px;
        margin-bottom : 150px;
        margin-right : 100px;
        margin-left : 200px;
    }
</style>


    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ทดสอบสร้าง ตาราง</title>
</head>
<body>
    
    <h1>แสดงข้อมูลรองเท้า</h1>
    <table id="example" class="table table-striped" style="width:100%">
        <thead>
            <tr>
                <th>รหัสลูกค้า</th>
                <th>ชื่อ</th>
                <th>นามสกุล</th>
                <th>อีเมล</th>
                <th>รุ่น</th>
                <th>วันที่ลงข้อมูล</th>
            </tr>
<?php
$sql = "SELECT * FROM homework8";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo " <tr>";
    echo "<td>". $row["employee_id"]. "</td>" ;
    echo "<td>". $row["first_name"]."</td>" ;
    echo "<td>". $row["last_name"] ."</td>" ;
    echo "<td>". $row["email"] ."</td>" ;
    echo "<td>". $row["model"] ."</td>" ;
    echo "<td>". $row["hire_date"] ."</td>" ;
    echo "</tr>";
  }

} else {
  echo "0 results";
}
$conn->close();
?>
        </thead>
        </tbody>
             <tr>
                <td>รหัสลูกค้า</td>
                <td>ชื่อ</td>
                <td>นามสกุล</td>
                <td>อีเมล</td>
                <td>รุ่นรองเท้า</td>
                <td>วันที่ลงข้อมูล</td>
            </tr>
        <tfoot>
            <tr>
                <th>id</th>
                <th>name</th>
                <th>lastname</th>
                <th>email</th>
                <th>model</th>
                <th>hire_date</th>
            </tr>
        </tfoot>
    </table>
</body>

<!-- Latest compiled JavaScript -->
<script src="https://code.jquery.com/jquery-3.7.0.js"></script>
<script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.13.7/js/dataTables.bootstrap5.min.js"></script>

<script>
    new DataTable('#example');
</script>
</html>