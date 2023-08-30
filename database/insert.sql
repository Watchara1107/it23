-- การเพิ่มข้อมูลลงในตารางประเภทสินค้า
INSERT INTO categories(category_id,name,created_at,updated_at) 
VALUE(1,'โทรศัพท์มือถือ','2566-8-9 11:20:00','2566-8-9 11:20:00'),
(2,'หูฟัง','2566-8-9 11:20:00','2566-8-9 11:20:00'),
(3,'โน้ตบุ๊ค','2566-8-9 11:20:00','2566-8-9 11:20:00');

-- การเพิ่มข้อมูลลงในตารางสินค้า
INSERT INTO products(product_id,name,price,description,image,
category_id,created_at,updated_at)
VALUE(1,'phone 14 pro max','43990','ROM 256 GB RAM 6 GB','image01.png',1,
'2566-8-9 11:31:00','2566-8-9 11:31:00'),
(2,'lenovo LP40 Pro','239','เบสแน่น ไมค์ชัด','image02.png',2,
'2566-8-9 11:31:00','2566-8-9 11:31:00'),
(3,'lenovo Gamming 3','29000','RAM 12 GB ROM 516 GB','image03.png',3,
'2566-8-9 11:31:00','2566-8-9 11:31:00');

-- การเพิ่มข้อมูลลงในตารางผู้ใช้งานระบบ
INSERT INTO users(id,name,address,phone,email,username,
password,created_at,updated_at)
VALUE(1,'Wactara','จ.นนทบุรี','087-895-4555','admin@gmail.com','admin',
'123456789','2566-8-9 11:31:00','2566-8-9 11:31:00'),
(2,'Suda','จ.กรุงเทพ','087-587-4555','user@gmail.com','user',
'user','2566-8-9 11:31:00','2566-8-9 11:31:00'),
(3,'Jony','จ.นนทบุรี','088-885-4555','agent@gmail.com','agent',
'agent','2566-8-9 11:31:00','2566-8-9 11:31:00');