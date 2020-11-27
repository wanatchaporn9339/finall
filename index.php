<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>home page</title>
</head>

<body>
    <?php
    require('insert.php');
    $res = mysqli_query($conn, 'SELECT * FROM bmi');
    ?>
    <br>
    <div class="container">
        <table class="table table-bordered table-hover" width="1200" align="center" border="1">
            <thead class="thead-dark">
                <tr>
                    <th width="300">
                        <div align="center">ชื่อ</div>
                    </th>
                    <th width="300">
                        <div align="center">น้ำหนัก</div>
                    </th>
                    <th width="300">
                        <div align="center">ส่วนสูง</div>
                    </th>
                    <th width="300">
                        <div align="center">bmi</div>
                    </th>
                    <th width="300">
                        <div align="center">การจัดการ</div>
                    </th>
                </tr>
            </thead>
            <?php
            while ($Result = mysqli_fetch_array($res)) {
            ?>
                <tbody>
                    <tr>
                        <td><?php echo $Result['name']; ?></td>
                        <td><?php echo $Result['weight']; ?></td>
                        <td><?php echo $Result['height']; ?></td>
                        <td><?php echo $Result['bmi']; ?></td>
                        <td>
                            <a href="edit.php?id=<?php echo $Result['id'];?>" class="btn btn-outline-danger">แก้ไข</a>
                        </td>
                    </tr>
                </tbody>
            <?php
            }
            ?>
        </table>
        <button type="button" class="btn btn-outline-warning" onclick="window.location.href='form.php'">เพืิ่มข้อมูล</button>
</body>

</html>
