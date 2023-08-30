<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ระบบฐานข้อมูลร้าน it-shop</title>
    <link rel="stylesheet" href="../node_modules/bootstrap/dist/css/bootstrap.min.css">
</head>

<body>

    <div class="container">
        <div class="row mt-4">
            <h2>เพิ่มข้อมูลสินค้า</h2>
        </div>

        <div class="mt-4">
            <div class="mb-3">
                <label for="name" class="form-label">ชื่อสินค้า</label>
                <input type="text" class="form-control" id="name" name="name">
            </div>

            <div class="mb-3">
                <label for="price" class="form-label">ราคาสินค้า</label>
                <input type="text" class="form-control" id="price" name="price">
            </div>

            <div class="mb-3">
                <label for="description" class="form-label">รายละเอียดสินค้า</label>
                <textarea class="form-control" name="description" id="description" rows="3"></textarea>
            </div>

            <div class="mb-3">
            <label class="form-label">ประเภทสินค้า</label>
                <select class="form-select" aria-label="Default select example">
                    <option selected>กรุณาเลือกประเภทสินค้า</option>
                    <option value="1">โทรศัพท์มือถือ</option>
                    <option value="2">หูฟัง</option>
                    <option value="3">โน้ตบุ๊ค</option>
                </select>
            </div>

            <div class="mb-3">
                <label for="image" class="form-label">รูปสินค้า</label>
                <input type="file" class="form-control" id="image" name="image">
            </div>

            <div class="mt-4">
                <input type="submit" class="btn btn-primary" value="บันทึกข้อมูล">
                <a href="../index.php" class="btn btn-danger">กลับหน้าแรก</a>
            </div>

        </div>

    </div>



    <script src="../node_modules/@popperjs/core/dist/umd/popper.min.js"></script>
    <script src="../node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
</body>

</html>