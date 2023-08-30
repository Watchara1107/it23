-- ตารางประเภทสินค้า (Categories)
CREATE TABLE categories(
    category_id int(10) COMMENT 'รหัสประเภทสินค้า' AUTO_INCREMENT,
    name varchar(255) COMMENT 'ชื่อประเภทสินค้า',
    created_at datetime COMMENT 'วันที่บันทึกรายการ',
    updated_at datetime COMMENT 'วันที่อัพเดทรายการ',
    PRIMARY KEY(category_id)
);

-- ตารางสินค้า (Products)
CREATE TABLE products(
    product_id int(10) COMMENT 'รหัสสินค้า' AUTO_INCREMENT,
    name varchar(255) COMMENT 'ชื่อสินค้า',
    price varchar(255) COMMENT 'ราคาสินค้า',
    description text COMMENT 'รายละเอียดสินค้า',
    category_id int(10) COMMENT 'รหัสประเภทสินค้า',
    image varchar(255) COMMENT 'รูปสินค้า',
    created_at datetime COMMENT 'วันที่บันทึกรายการ',
    updated_at datetime COMMENT 'วันที่อัพเดทรายการ',
    PRIMARY KEY(product_id),
    FOREIGN KEY(category_id) REFERENCES categories(category_id)
);

-- ตารางผู้ใช้ (Users)
CREATE TABLE users(
    id int(10) COMMENT 'รหัสประจำตัวผู้ใช้' AUTO_INCREMENT,
    name varchar(255) COMMENT 'ชื่อ-นามสกุล',
    address varchar(255) COMMENT 'ที่อยู่',
    phone varchar(13) COMMENT 'เบอร์โทรศัพท์',
    email varchar(255) COMMENT 'อีเมล์',
    username varchar(255) COMMENT 'ชื่อเข้าใช้งานระบบ',
    password varchar(255) COMMENT 'รหัสผ่านระบบ',
    created_at datetime COMMENT 'วันที่บันทึกรายการ',
    updated_at datetime COMMENT 'วันที่อัพเดทรายการ',
    PRIMARY KEY(id)
);
