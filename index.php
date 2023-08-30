<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ระบบฐานข้อมูลร้าน it-shop</title>
    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
</head>

<body>
    <div class="container">
        <div class="row mt-5">
            <h2>ระบบฐานข้อมูลร้าน IT-Shop</h2>
        </div>

        <div class="mt-4">
            <a href="src/create.php" class="btn btn-success">เพิ่มข้อมูลสินค้า</a>
        </div>

        <div class="row mt-5">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">รหัสสินค้า</th>
                        <th scope="col">ชื่อสินค้า</th>
                        <th scope="col">รูปสินค้า</th>
                        <th scope="col">ราคา</th>
                        <th scope="col">รายละเอียดสินค้า</th>
                        <th scope="col">ประเภทสินค้า</th>
                        <th scope="col">วันที่บันทึกรายการ</th>
                        <th scope="col">วันที่อัพเดทรายการ</th>
                        <th scope="col">การจัดการ</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>Mark</td>
                        <td>Otto</td>
                        <td>@mdo</td>
                        <td>@mdo</td>
                        <td>@mdo</td>
                        <td>@mdo</td>
                        <td>@mdo</td>
                        <td>
                            <a href="" class="btn btn-warning">แก้ไข</a>
                            <a href="" class="btn btn-danger">ลบ</a>
                        </td>
                    </tr>
                    
                </tbody>
            </table>
        </div>
    </div>

    <script src="node_modules/@popperjs/core/dist/umd/popper.min.js"></script>
    <script src="node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
</body>

</html>