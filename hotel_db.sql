CREATE DATABASE HOTEL_DB;
USE HOTEL_DB;

CREATE TABLE `admin` (
  username varchar(30) PRIMARY KEY,
  `password` varchar(30) NOT NULL,
  fullname varchar(50) NOT NULL,
  phone varchar(10) UNIQUE,
  exp_year int NOT NULL
);

-- insert value
INSERT INTO `admin`
VALUES ('tringuyen', '123456', 'le tri nguyen', '0963676377', 2),
    ('admin1', '654321', 'le nguyen', '0355578787', 21),
    ('admin2', 'xzcxzc', 'le minh nguyen', '0123456789', 5),
    ('admin3', 'gfgfdg', 'le ha nguyen', '0998874562', 7);

CREATE TABLE `rooms` (
  `id` int(11) NOT NULL,
  `roomName` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `price` double NOT NULL,
  `image` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `rooms` (`id`, `roomName`, `price`, `image`) VALUES
(1, 'Junior Suite', 100, './images/menu-1.jpg'),
(2, 'Executive Suite', 100, './images/menu-2.jpg'),
(3, 'Super Star Deluxe', 100, './images/menu-3.jpg'),
(4, 'Super Deluxe', 100, './images/menu-3.jpg');

ALTER TABLE `rooms`  ADD PRIMARY KEY (`id`);

ALTER TABLE `rooms`  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;




CREATE TABLE Nhom (
	MaNhom INT AUTO_INCREMENT PRIMARY KEY,
	TenNhom CHAR(15)
);

CREATE TABLE MonAn(
	MaMon CHAR(5) PRIMARY KEY,
    MaNhom INT,
    Ten VARCHAR(50) NOT NULL,
    Hinh VARCHAR(200),
    CONSTRAINT fk_manhom FOREIGN KEY (MaNhom) REFERENCES Nhom(MaNhom)
);

CREATE TABLE NuocUong(
	MaMon CHAR(5) PRIMARY KEY,
    CONSTRAINT fk_manuoc FOREIGN KEY (MaMon) REFERENCES MonAn(MaMon)
);

CREATE TABLE KichThuocNuocUong(
	MaNuocUong CHAR(5),
    Size CHAR(1) CHECK (Size IN ('S', 'M', 'L')),
    DonGia INT,
    CONSTRAINT pk_kichthuoc PRIMARY KEY (MaNuocUong, Size),
    CONSTRAINT fk_manc FOREIGN KEY (MaNuocUong) REFERENCES NuocUong(MaMon)
    ON DELETE CASCADE
);

CREATE TABLE DoAn(
	MaMon CHAR(5) PRIMARY KEY,
    DonGia INT,
    CONSTRAINT fk_doan FOREIGN KEY (MaMon) REFERENCES MonAn(MaMon)
    ON DELETE CASCADE ON UPDATE CASCADE
);

CREATE TABLE GioPhucVuDoAn(
	MaDoAn CHAR(5) NOT NULL,
    BatDau TIME,
    KetThuc TIME,
    CONSTRAINT pk_gpv PRIMARY KEY (MaDoAN, BatDau),
    CONSTRAINT fk_madoan FOREIGN KEY (MaDoAn) REFERENCES DoAn(MaMon) ON DELETE CASCADE
);

-- Nhóm (Mã nhóm, tên nhóm)
INSERT INTO Nhom(TenNhom) VALUES ('Sinh To');
INSERT INTO Nhom(TenNhom) VALUES ('Ca Phe');
INSERT INTO Nhom(TenNhom) VALUES ('Tra');
INSERT INTO Nhom(TenNhom) VALUES ('Tra Sua');
INSERT INTO Nhom(TenNhom) VALUES ('Soda');
INSERT INTO Nhom(TenNhom) VALUES ('Banh Ngot');


-- Món ăn (Mã món, mã nhóm, tên, hình)
INSERT INTO MonAn VALUES (
'D1001', 
'1',
'Sinh To Chuoi',
'https://cdn.hellobacsi.com/wp-content/uploads/2021/09/cach-lam-sinh-to-chuoi.jpg?w=750&q=75' 
);
INSERT INTO MonAn VALUES (
'D4001', 
'4',
'Tra Sua Truyen Thong', 
'http://www.ohjuicescoffee.com/storage/pagedata/100763/img/images/product/10_1.jpg'
);
INSERT INTO MonAn VALUES (
'D3001', 
'3',
'Tra Nhiet Doi', 
'https://sieuthinguyenlieu.com/assets/uploads/images/I0615bu8D0OY_tra-trai-cay-nhiet-doi.jpg'
);
INSERT INTO MonAn VALUES (
'D5001', 
'5',
'Soda Blue', 
'http://vuontrungca.com/upload/sanpham/7b2849c8-4adc-40ee-9f20-bcd2de34de75-6131.jpeg'
);
INSERT INTO MonAn VALUES (
'D2001', 
'2',
'Ca phe sua da', 
'https://ongbi.vn/wp-content/uploads/2023/01/ca-phe-sua-da.jpg'
);
INSERT INTO MonAn VALUES (
'F6001', 
'6',
'Tiramisu', 
'https://cdn.tgdd.vn/Files/2021/08/08/1373908/tiramisu-la-gi-y-nghia-cua-banh-tiramisu-202108082258460504.jpg'
);
INSERT INTO MonAn VALUES (
'F6002', 
'6',
'Banh Flan', 
'https://jarvis.vn/wp-content/uploads/2019/05/banh-flan-1.jpg'
);
INSERT INTO MonAn VALUES (
'F6003', 
'6',
'Banh Cookies', 
'https://jarvis.vn/wp-content/uploads/2019/05/cookie-2.jpg'
);
INSERT INTO MonAn VALUES (
'F6004', 
'6',
'Macaron', 
'https://jarvis.vn/wp-content/uploads/2019/05/macaron-1.jpg'
);

INSERT INTO NuocUong VALUES ('D1001');
INSERT INTO NuocUong VALUES ('D2001');
INSERT INTO NuocUong VALUES ('D3001');
INSERT INTO NuocUong VALUES ('D4001');
INSERT INTO NuocUong VALUES ('D5001');


-- Kích thước nước uống (Mã nước uống, size, đơn giá)
INSERT INTO KichThuocNuocUong VALUES ('D1001','S','35000');
INSERT INTO KichThuocNuocUong VALUES ('D1001','M','40000');
INSERT INTO KichThuocNuocUong VALUES ('D1001','L','45000');

INSERT INTO KichThuocNuocUong VALUES ('D2001','S','30000');
INSERT INTO KichThuocNuocUong VALUES ('D2001','M','45000');
INSERT INTO KichThuocNuocUong VALUES ('D2001','L','40000');

INSERT INTO KichThuocNuocUong VALUES ('D3001','S','40000');
INSERT INTO KichThuocNuocUong VALUES ('D3001','M','45000');
INSERT INTO KichThuocNuocUong VALUES ('D3001','L','50000');

INSERT INTO KichThuocNuocUong VALUES ('D4001','S','40000');
INSERT INTO KichThuocNuocUong VALUES ('D4001','M','45000');
INSERT INTO KichThuocNuocUong VALUES ('D4001','L','50000');

INSERT INTO KichThuocNuocUong VALUES ('D5001','S','30000');
INSERT INTO KichThuocNuocUong VALUES ('D5001','M','35000');
INSERT INTO KichThuocNuocUong VALUES ('D5001','L','40000');

-- Đồ ăn (Mã món, đơn giá)
INSERT INTO DoAn VALUES ('F6001','30000');
INSERT INTO DoAn VALUES ('F6002','15000');
INSERT INTO DoAn VALUES ('F6003','20000');
INSERT INTO DoAn VALUES ('F6004','5000');


-- Giờ phục vụ đồ ăn (Mã đồ ăn, bắt đầu, kết thúc)
INSERT INTO GioPhucVuDoAn VALUES ('F6001','10:00','18:00');
INSERT INTO GioPhucVuDoAn VALUES ('F6002','10:00','16:00');
INSERT INTO GioPhucVuDoAn VALUES ('F6003','08:00','21:00');
INSERT INTO GioPhucVuDoAn VALUES ('F6004','12:00','20:00');



'https://anchay.cdn.vccloud.vn/media/2021/12/anh-bia_sinh-to-sapoche-chuoi-300x289.png'