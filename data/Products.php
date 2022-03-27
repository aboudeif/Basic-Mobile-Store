<?php
session_start();
$products_list = [
0 =>
[
  "id"=> "B09QSB3LWX",
  "name"=> "Xiaomi Redmi Note 11,90 Hz Amoled Pioneer, 64 GB, 4GB RAM, Graphite Gray",
  "size"=> "6.43",
  "brand"=> "Xiaomi",
  "model"=> "Redmi Note 11",
  "rate"=> "4.3",
  "capacity"=> "64",
  "pic"=> "https://m.media-amazon.com/images/I/61hj2b6hVJL._AC_SY741_.jpg",
  "price"=> "3971"
],
1 =>
[
  "id"=> "B09474BV85",
  "name"=> "Samsung Galaxy A32 Dual SIM - 6.4 Inches, 6GB RAM, 128GB, 4G LTE - Blue",
  "size"=> "6.4",
  "brand"=> "Samsung",
  "model"=> "A32",
  "rate"=> "4.3",
  "capacity"=> "128",
  "pic"=> "https://m.media-amazon.com/images/I/41bBo-CKAVS._AC_SX425_.jpg",
  "price"=> "5499"
],
2 =>
[
  "id"=> "B09G1PK13J",
  "name"=> "Samsung Galaxy A52s Dual SIM - 128GB, 8GB RAM, 5G, BLACK",
  "size"=> "6.5",
  "brand"=> "Samsung",
  "model"=> "Samsung A52s Dual Sim",
  "rate"=> "4.3",
  "capacity"=> "128",
  "pic"=> "https://m.media-amazon.com/images/I/51owwRrby0L._AC_.jpg",
  "price"=> "7989"
],
3 =>
[
  "id"=> "B09FPW9SQ2",
  "name"=> "Reno 6 Aurora Dual Sim 8GB RAM 128GB 4G LTE",
  "size"=> "6.5",
  "brand"=> "OPPO",
  "model"=> "Reno 6 Aurora",
  "rate"=> "3.7",
  "capacity"=> "128",
  "pic"=> "https://m.media-amazon.com/images/I/41dXAQoIm2L._AC_.jpg",
  "price"=> "7199"
],
4 =>
[
  "id"=> "B09SHS78P6",
  "name"=> "Samsung Galaxy A03 CORE Dual sim, 32GB, 2Gb RAM, 4G BLUE",
  "size"=> "6.5",
  "brand"=> "SAMSUNG",
  "model"=> "A03",
  "rate"=> "3.7",
  "capacity"=> "32",
  "pic"=> "https://m.media-amazon.com/images/I/71lwpZBlmSL._AC_SY550_.jpg",
  "price"=> "2220"
],
5 =>
[
  "id"=> "B08CGXVPXW",
  "name"=> "Xiaomi Redmi 9A Dual SIM Mobile Phone, 13 MP Camera, 6.53 Inch Touch Screen, 2 GB RAM, 32 GB, 4G LTE - Granite Grey",
  "size"=> "6.53",
  "brand"=> "Xiaomi",
  "model"=> "Redmi 9A",
  "rate"=> "4.4",
  "capacity"=> "32",
  "pic"=> "https://m.media-amazon.com/images/I/41F7qu-NKdL._AC_SY445_.jpg",
  "price"=> "2399"
],
6 =>
[
  "id"=> "B09G1Q82CH",
  "name"=> "Samsung Galaxy A52s Dual SIM - 128GB, 8GB RAM, 5G, Violet",
  "size"=> "6.5",
  "brand"=> "Samsung",
  "model"=> "A52s",
  "rate"=> "4.4",
  "capacity"=> "128",
  "pic"=> "https://images-na.ssl-images-amazon.com/images/I/61VzZozPuxL.__AC_SX300_SY300_QL70_ML2_.jpg",
  "price"=> "8299"
],
7 =>
[
  "id"=> "B09LT6P6SS",
  "name"=> "Apple iPhone 13 Pro Max with FaceTime - 256GB, 6GB RAM, 4G LTE, Sierra Blue, Single SIM & E-SIM",
  "size"=> "6.1",
  "brand"=> "Apple",
  "model"=> "iPhone 13 Pro Max",
  "rate"=> "3.8",
  "capacity"=> "256",
  "pic"=> "https://m.media-amazon.com/images/I/614fbeOTjDL._AC_SY550_.jpg",
  "price"=> "28840"
],
8 =>
[
  "id"=> "B09M46BZ72",
  "name"=> "Oppo A55 4GB RAM, 128GB - RAINBOW BLUE",
  "size"=> "6",
  "brand"=> "OPPO",
  "model"=> "A55",
  "rate"=> "5",
  "capacity"=> "128",
  "pic"=> "https://m.media-amazon.com/images/I/41pyjSajHoL._AC_.jpg",
  "price"=> "4600"
],
9 =>
[
  "id"=> "B09QSB3LWX9",
  "name"=> "HUAWEI MatePad 10.4 WIFI 2022",
  "size"=> "10.4",
  "brand"=> "HUAWEI",
  "model"=> "MatePad 10.4",
  "rate"=> "4.3",
  "capacity"=> "64",
  "pic"=> "https://img01.huaweifile.com/sg/ms/eg/pms/uomcdn/EG_HW_B2B2C/pms/202202/gbom/6941487250264/428_428_A03DDE497385EA3484E21D391A2828FDmp.jpg",
  "price"=> "13971"
],
10 =>
[
  "id"=> "B09474BV8510",
  "name"=> "HUAWEI MatePad T 10 Kids Edition",
  "size"=> "6.4",
  "brand"=> "HUAWEI",
  "model"=> "MatePad T 10",
  "rate"=> "4.3",
  "capacity"=> "32",
  "pic"=> "https://img01.huaweifile.com/sg/ms/eg/pms/uomcdn/EG_HW_B2B2C/pms/202202/gbom/6901443446797/428_428_35287D45BC0DFB51AA6C9B790A0E0CE0mp.jpg",
  "price"=> "7499"
],
11 =>
[
  "id"=> "B09G1PK13J11",
  "name"=> "HUAWEI WATCH GT Runner",
  "size"=> "1.5",
  "brand"=> "HUAWEI",
  "model"=> "WATCH GT Runner",
  "rate"=> "4.7",
  "capacity"=> "2",
  "pic"=> "https://img01.huaweifile.com/sg/ms/eg/pms/uomcdn/EG_HW_B2B2C/pms/202202/gbom/6941487240227/428_428_04A23E51B069CD005D04EB5C091047F5mp.jpg",
  "price"=> "7989"
],
12 =>
[
  "id"=> "B09FPW9SQ212",
  "name"=> "HUAWEI WATCH GT 3 Brown 46mm",
  "size"=> "1.5",
  "brand"=> "HUAWEI",
  "model"=> "WATCH GT 3",
  "rate"=> "4.7",
  "capacity"=> "2",
  "pic"=> "https://img01.huaweifile.com/sg/ms/eg/pms/uomcdn/EG_HW_B2B2C/pms/202201/gbom/6941487224609/428_428_4D421FCCF2D2C3355FA2ACF63173DD2Dmp.jpg",
  "price"=> "8199"
],
13 =>
[
  "id"=> "B09SHS78P613",
  "name"=> "HUAWEI nova 9",
  "size"=> "6",
  "brand"=> "HUAWEI",
  "model"=> "nova 9",
  "rate"=> "4.7",
  "capacity"=> "256",
  "pic"=> "https://img01.huaweifile.com/sg/ms/eg/pms/product/6941487238323/428_428_52DD1249D34247C10537A087EF6F2D52D9FA711B2CA426FEmp.png",
  "price"=> "12220"
],
14 =>
[
  "id"=> "B08CGXVPXW14",
  "name"=> "HUAWEI MatePad 10.4 LTE",
  "size"=> "7.53",
  "brand"=> "HUAWEI",
  "model"=> "Redmi 9A",
  "rate"=> "4.1",
  "capacity"=> "64",
  "pic"=> "https://img01.huaweifile.com/sg/ms/eg/pms/product/6901443391448/428_428_281615D07DA55D4ACA63C01DC73AFDF8143C0B2E85D8D781mp.jpg",
  "price"=> "11399"
],
15 =>
[
  "id"=> "B09G1Q82CH15",
  "name"=> "HUAWEI nova 8",
  "size"=> "6.4",
  "brand"=> "HUAWEI",
  "model"=> "nova 8",
  "rate"=> "4.7",
  "capacity"=> "128",
  "pic"=> "https://img01.huaweifile.com/sg/ms/eg/pms/product/6941487231065/428_428_FD61A9421C311E66AC897AD3C761188CDFB8BB69E7BFB56Bmp.jpg",
  "price"=> "10299"
],
16 =>
[
  "id"=> "B09LT6P6SS16",
  "name"=> "HUAWEI Y5p",
  "size"=> "6",
  "brand"=> "HUAWEI",
  "model"=> "Y5p",
  "rate"=> "3.9",
  "capacity"=> "256",
  "pic"=> "https://img01.huaweifile.com/sg/ms/eg/pms/product/6901443394562/428_428_1FC52836A073405DC6C8C950CEAE842E1C68E2643261C097mp.jpg",
  "price"=> "118840"
],
17 =>
[
  "id"=> "B09M46BZ7217",
  "name"=> "HUAWEI MateBook X Pro 2021",
  "size"=> "15.4",
  "brand"=> "HUAWEI",
  "model"=> "MateBook X Pro",
  "rate"=> "5",
  "capacity"=> "1500",
  "pic"=> "https://img01.huaweifile.com/sg/ms/eg/pms/product/6941487210763/428_428_C9B572788641F9DC3490C8DE4521936B0AE1369586F9D684mp.jpg",
  "price"=> "24600"
],
18 =>
[
  "id"=> "B09QSB3LWX18",
  "name"=> "OPPO Find X5 Pro",
  "size"=> "6.2",
  "brand"=> "OPPO",
  "model"=> "Find X5 Pro",
  "rate"=> "4.2",
  "capacity"=> "128",
  "pic"=> "https://image.oppo.com/content/dam/oppo/common/mkt/v2-2/find-x5-pro-en/listpage/findx5-pro-black-v2.png.thumb.webp",
  "price"=> "5271"
],
19 =>
[
  "id"=> "B09474BV8519",
  "name"=> "OPPO Find X5",
  "size"=> "6.2",
  "brand"=> "OPPO",
  "model"=> "Find X5",
  "rate"=> "4.2",
  "capacity"=> "46",
  "pic"=> "https://image.oppo.com/content/dam/oppo/common/mkt/v2-2/find-x5-en/listpage/findx5-white-v2.png.thumb.webp",
  "price"=> "3499"
],
20 =>
[
  "id"=> "B09G1PK13J20",
  "name"=> "OPPO Find X3 Pro",
  "size"=> "6.5",
  "brand"=> "OPPO",
  "model"=> "Find X3 Pro",
  "rate"=> "4.4",
  "capacity"=> "128",
  "pic"=> "https://image.oppo.com/content/dam/oppo/common/mkt/v2-2/navigation/find-series/find-x3-pro/Fussi-Black.png.thumb.webp",
  "price"=> "17989"
],
21 =>
[
  "id"=> "B09FPW9SQ221",
  "name"=> "OPPO Reno6 5G",
  "size"=> "6.5",
  "brand"=> "OPPO",
  "model"=> "Reno6 5G",
  "rate"=> "3.7",
  "capacity"=> "128",
  "pic"=> "https://image.oppo.com/content/dam/oppo/common/mkt/v2-2/reno6-5g-oversea/listpage/Phone-list-product-list-Aurora-427-x-600.png.thumb.webp",
  "price"=> "7199"
],
22 =>
[
  "id"=> "B09SHS78P622",
  "name"=> "OPPO A95 Gray",
  "size"=> "6.5",
  "brand"=> "OPPO",
  "model"=> "A95",
  "rate"=> "3.7",
  "capacity"=> "32",
  "pic"=> "https://image.oppo.com/content/dam/oppo/common/mkt/v2-2/a95/navigation/A95-navigation-silver.png.thumb.webp",
  "price"=> "3220"
],
23 =>
[
  "id"=> "B08CGXVPXW23",
  "name"=> "OPPO A74 Blue",
  "size"=> "5.9",
  "brand"=> "OPPO",
  "model"=> "A74",
  "rate"=> "4.6",
  "capacity"=> "32",
  "pic"=> "https://image.oppo.com/content/dam/oppo/common/mkt/v2-2/beta-f19/navigation/F19-navigation-blue-v2.png.thumb.webp",
  "price"=> "4399"
],
24 =>
[
  "id"=> "B09G1Q82CH24",
  "name"=> "OPPO A16 Light-Blue",
  "size"=> "6.1",
  "brand"=> "OPPO",
  "model"=> "A16",
  "rate"=> "4.5",
  "capacity"=> "256",
  "pic"=> "https://image.oppo.com/content/dam/oppo/common/mkt/v2-2/a16/listpage/A16-productlist-blue-427x600-v2.png.thumb.webp",
  "price"=> "18299"
],
25 =>
[
  "id"=> "B09LT6P6SS25",
  "name"=> "Nokia 110 - 1.77-inch Dual SIM Mobile Phone - Black",
  "size"=> "1.77",
  "brand"=> "Nokia",
  "model"=> "110",
  "rate"=> "1.8",
  "capacity"=> "2",
  "pic"=> "https://eg.jumia.is/unsafe/fit-in/300x600/filters:fill(white)/product/45/405332/1.jpg",
  "price"=> "470"
],
26 =>
[
  "id"=> "B09M46BZ7226",
  "name"=> "Nokia 110 - 1.77-inch Dual SIM Mobile Phone - Blue",
  "size"=> "1.77",
  "brand"=> "Nokia",
  "model"=> "110",
  "rate"=> "1.8",
  "capacity"=> "2",
  "pic"=> "https://eg.jumia.is/unsafe/fit-in/300x600/filters:fill(white)/product/15/795422/1.jpg",
  "price"=> "475"
],
27 =>
[
  "id"=> "B09QSB3LWX27",
  "name"=> "Nokia C1 - 5.45-inch 16GB/1GB Dual SIM Mobile Phone - Charcoal",
  "size"=> "4.43",
  "brand"=> "Nokia",
  "model"=> "C1",
  "rate"=> "2.3",
  "capacity"=> "4",
  "pic"=> "https://eg.jumia.is/unsafe/fit-in/300x600/filters:fill(white)/product/87/461252/1.jpg?6288",
  "price"=> "1355"
],
28 =>
[
  "id"=> "B09474BV8528",
  "name"=> "Nokia 5310 (2020) - 2.4-inch Dual SIM Mobile Phone - White/Red",
  "size"=> "2.4",
  "brand"=> "Nokia",
  "model"=> "5310",
  "rate"=> "3.3",
  "capacity"=> "4",
  "pic"=> "https://eg.jumia.is/unsafe/fit-in/300x600/filters:fill(white)/product/67/764622/1.jpg?3127",
  "price"=> "1000"
],
29 =>
[
  "id"=> "B09G1PK13J29",
  "name"=> "Nokia 125 Dual SIM Mobile Phone - Black",
  "size"=> "3.5",
  "brand"=> "Nokia",
  "model"=> "125",
  "rate"=> "1.3",
  "capacity"=> "128",
  "pic"=> "https://eg.jumia.is/unsafe/fit-in/300x600/filters:fill(white)/product/37/569922/1.jpg?2033",
  "price"=> "527"
],
30 =>
[
  "id"=> "B09FPW9SQ230",
  "name"=> "Nokia 106 (2018) - Mobile 1.8",
  "size"=> "2.5",
  "brand"=> "Nokia",
  "model"=> "106",
  "rate"=> "3",
  "capacity"=> "0.25",
  "pic"=> "https://eg.jumia.is/unsafe/fit-in/300x600/filters:fill(white)/product/52/908432/1.jpg?1368",
  "price"=> "399"
],
31 =>
[
  "id"=> "B09SHS78P631",
  "name"=> "Apple iPhone 12 Pro Max with FaceTime - 128GB - Silver",
  "size"=> "6.5",
  "brand"=> "Apple",
  "model"=> "12 Pro",
  "rate"=> "4.7",
  "capacity"=> "128",
  "pic"=> "https://eg.jumia.is/unsafe/fit-in/300x600/filters:fill(white)/product/29/964051/1.jpg?3027",
  "price"=> "25800"
],
32 =>
[
  "id"=> "B08CGXVPXW32",
  "name"=> "Apple iPhone 11 - 64GB - White",
  "size"=> "6.53",
  "brand"=> "Apple",
  "model"=> "iPhone 11",
  "rate"=> "4.4",
  "capacity"=> "64",
  "pic"=> "https://eg.jumia.is/unsafe/fit-in/300x600/filters:fill(white)/product/93/690352/1.jpg?0545",
  "price"=> "15555"
],
33 =>
[
  "id"=> "B09G1Q82CH33",
  "name"=> "Apple iPhone 12 Dual SIM with FaceTime - 128GB - Black",
  "size"=> "6.5",
  "brand"=> "Apple",
  "model"=> "iPhone 12",
  "rate"=> "4.6",
  "capacity"=> "128",
  "pic"=> "https://eg.jumia.is/unsafe/fit-in/300x600/filters:fill(white)/product/53/683142/1.jpg?4665",
  "price"=> "17045"
],
34 =>
[
  "id"=> "B09LT6P6SS34",
  "name"=> "Apple iPhone 13 Single SIM with FaceTime - 128GB - Pink",
  "size"=> "6.1",
  "brand"=> "Apple",
  "model"=> "iPhone 13",
  "rate"=> "4.8",
  "capacity"=> "128",
  "pic"=> "https://eg.jumia.is/unsafe/fit-in/300x600/filters:fill(white)/product/06/775822/1.jpg?9570",
  "price"=> "18999"
],
35 =>
[
  "id"=> "B09M46BZ7235",
  "name"=> "Apple Watch Series 7 GPS, 45mm Starlight Aluminium Case with Starlight Sport Band - Regular",
  "size"=> "2",
  "brand"=> "Apple",
  "model"=> "Watch Series 7",
  "rate"=> "4.8",
  "capacity"=> "2",
  "pic"=> "https://m.media-amazon.com/images/I/71pgrQW0A9L._AC_UL480_FMwebp_QL65_.jpg",
  "price"=> "10650"
],
36 =>
[
  "id"=> "B09QSB3LWX36",
  "name"=> "Apple Watch Series 7 GPS, 41mm Midnight Aluminium Case with Midnight Sport Band - Regular",
  "size"=> "2",
  "brand"=> "Apple",
  "model"=> "Watch Series 7",
  "rate"=> "4.3",
  "capacity"=> "2",
  "pic"=> "https://m.media-amazon.com/images/I/71gg8mPlAuL._AC_UL480_FMwebp_QL65_.jpg",
  "price"=> "11699"
],
37 =>
[
  "id"=> "B09474BV8537",
  "name"=> "Apple iPhone 13 Pro Max with FaceTime - 256GB, 6GB RAM, 4G LTE, Black graphite, Single SIM & E-SIM",
  "size"=> "6.4",
  "brand"=> "Apple",
  "model"=> "iPhone 13 Pro Max with FaceTime",
  "rate"=> "4",
  "capacity"=> "256",
  "pic"=> "https://m.media-amazon.com/images/I/317CaqNXU8L._AC_UL480_FMwebp_QL65_.jpg",
  "price"=> "28900"
],
38 =>
[
  "id"=> "B09G1PK13J38",
  "name"=> "Sico Nile X Dual Sim - 64GB, 4GB RAM, 4G LTE, Blue",
  "size"=> "6.3",
  "brand"=> "Sico",
  "model"=> "Nile X",
  "rate"=> "2",
  "capacity"=> "64",
  "pic"=> "https://m.media-amazon.com/images/I/41QhUzVYZyL._AC_UL480_FMwebp_QL65_.jpg",
  "price"=> "5989"
],
39 =>
[
  "id"=> "B09FPW9SQ239",
  "name"=> "LG G7 ThinQ - 64GB, 4GB RAM, 4G LTE, Moroccan Blue",
  "size"=> "5.4",
  "brand"=> "LG",
  "model"=> "G7 ThinQ",
  "rate"=> "3.7",
  "capacity"=> "64",
  "pic"=> "https://m.media-amazon.com/images/I/61T0uaV4wVL._AC_UL480_FMwebp_QL65_.jpg",
  "price"=> "6888"
],
40 =>
[
  "id"=> "B09SHS78P640",
  "name"=> "Sony Xperia XZ Dual Sim - Waterproof, 64 GB, Ram 3 GB, 4G LTE, Mineral Black",
  "size"=> "6.1",
  "brand"=> "Sony",
  "model"=> "Xperia XZ",
  "rate"=> "5",
  "capacity"=> "64",
  "pic"=> "https://m.media-amazon.com/images/I/51Q710HCTfL._AC_UL480_FMwebp_QL65_.jpg",
  "price"=> "6666"
],
41 =>
[
  "id"=> "B08CGXVPXW41",
  "name"=> "Google Pixel 6 Pro Dual-SIM 128GB ROM + 12GB RAM - Stormy Black",
  "size"=> "6.5",
  "brand"=> "Google",
  "model"=> "Pixel 6 Pro",
  "rate"=> "4",
  "capacity"=> "128",
  "pic"=> "https://m.media-amazon.com/images/I/716n8eAia+L._AC_UL480_FMwebp_QL65_.jpg",
  "price"=> "10399"
],
42 =>
[
  "id"=> "B09G1Q82CH42",
  "name"=> "HONOR 50 Dual Sim 8GB RAM 256GB ROM 5G VLOG Smart Phone - Emerald Green",
  "size"=> "6.5",
  "brand"=> "HONOR",
  "model"=> "50",
  "rate"=> "4.7",
  "capacity"=> "256",
  "pic"=> "https://m.media-amazon.com/images/I/61gFCc3WYOL._AC_UL480_FMwebp_QL65_.jpg",
  "price"=> "18299"
],
43 =>
[
  "id"=> "B09LT6P6SS43",
  "name"=> "Infinix X612B Dual SIM Mobile Phone, 6.1 Inch Touch Screen, 2 GB RAM, 32 GB Storage, 4G LTE - Obsidian Black",
  "size"=> "6",
  "brand"=> "Infinix",
  "model"=> "X612B",
  "rate"=> "5",
  "capacity"=> "32",
  "pic"=> "https://m.media-amazon.com/images/I/41efq4dfIIL._AC_UL480_FMwebp_QL65_.jpg",
  "price"=> "5840"
],
44 =>
[
  "id"=> "B09M46BZ7244",
  "name"=> "HONOR 50 Lite Mobile Phone, SIM-Free Unlocked Smartphone with 64MP Camera",
  "size"=> "6.3",
  "brand"=> "HONOR",
  "model"=> "50 Lite",
  "rate"=> "5",
  "capacity"=> "32",
  "pic"=> "https://m.media-amazon.com/images/I/51xvDv+CeQL._AC_UL480_FMwebp_QL65_.jpg",
  "price"=> "4400"
],
45 =>
[
  "id"=> "B09QSB3LWX45",
  "name"=> "Xiaomi Redmi Note 9S Dual SIM - 6.67 Inch, 64 GB, 4 GB RAM, 4G LTE - Glacier White",
  "size"=> "6.43",
  "brand"=> "Xiaomi",
  "model"=> "Redmi Note 9S",
  "rate"=> "4.7",
  "capacity"=> "64",
  "pic"=> "https://m.media-amazon.com/images/I/717xIRqampS._AC_UL480_FMwebp_QL65_.jpg",
  "price"=> "3455"
],
46 =>
[
  "id"=> "B09474BV8546",
  "name"=> "Samsung Galaxy Note 20 Dual SIM 256GB 8GB RAM 4G LTE - Mystic Gray",
  "size"=> "6.6",
  "brand"=> "Samsung",
  "model"=> "Galaxy Note 20",
  "rate"=> "4",
  "capacity"=> "256",
  "pic"=> "https://m.media-amazon.com/images/I/51CwvkajPPS._AC_UL480_FMwebp_QL65_.jpg",
  "price"=> "15499"
],
47 =>
[
  "id"=> "B09G1PK13J47",
  "name"=> "Cat S60 Rugged Smartphone LTE, Black",
  "size"=> "5.5",
  "brand"=> "Cat",
  "model"=> "S60",
  "rate"=> "3.3",
  "capacity"=> "32",
  "pic"=> "https://m.media-amazon.com/images/I/41PDesD9ueL._AC_UL480_FMwebp_QL65_.jpg",
  "price"=> "9989"
],
48 =>
[
  "id"=> "B09FPW9SQ248",
  "name"=> "Lava A1-5.0-inch 16GB Dual SIM 4G Mobile Phone - Black",
  "size"=> "6.4",
  "brand"=> "Lava",
  "model"=> "A1",
  "rate"=> "3.8",
  "capacity"=> "128",
  "pic"=> "https://m.media-amazon.com/images/I/31R3bcpLzQS._AC_UL480_FMwebp_QL65_.jpg",
  "price"=> "1666"
],
49 =>
[
  "id"=> "B09SHS78P649",
  "name"=> "iKU K2-5'' Dual Sim,Camera 8MP-Metal-Grey",
  "size"=> "5",
  "brand"=> "iKU",
  "model"=> "K2",
  "rate"=> "2.7",
  "capacity"=> "32",
  "pic"=> "https://m.media-amazon.com/images/I/41VbjrCy+tS._AC_UL480_FMwebp_QL65_.jpg",
  "price"=> "1249"
],
50 =>
[
  "id"=> "B08CGXVPXW50",
  "name"=> "Xiaomi Mi 8 Dual Sim - 64 GB, 6 GB Ram, 4G LTE, Blue - International Version",
  "size"=> "6.53",
  "brand"=> "Xiaomi",
  "model"=> "Mi 8",
  "rate"=> "5.4",
  "capacity"=> "64",
  "pic"=> "https://m.media-amazon.com/images/I/515yoVLc4BL._AC_UL480_FMwebp_QL65_.jpg",
  "price"=> "5555"
],
51 =>
[
  "id"=> "B09G1Q82CH51",
  "name"=> "Xiaomi Redmi Note 10S Dual SIM - 6.43 Inches, 128 GB, 6 GB RAM, 4G LTE - Onyx Gray",
  "size"=> "6.1",
  "brand"=> "Xiaomi",
  "model"=> "A52s",
  "rate"=> "3",
  "capacity"=> "128",
  "pic"=> "https://m.media-amazon.com/images/I/41q5dgCDoOS._AC_UL480_FMwebp_QL65_.jpg",
  "price"=> "5899"
],
52 =>
[
  "id"=> "B09LT6P6SS52",
  "name"=> "Lava Z91 Dual SIM - 32GB, 3GB RAM, 4G LTE, Blue",
  "size"=> "5.1",
  "brand"=> "Lava",
  "model"=> "Z91",
  "rate"=> "5",
  "capacity"=> "32",
  "pic"=> "https://m.media-amazon.com/images/I/31zbAet2nLL._AC_UL480_FMwebp_QL65_.jpg",
  "price"=> "2490"
],
53 =>
[
  "id"=> "B09M46BZ7253",
  "name"=> "Nokia 5.3 TA-1234 Dual SIM Mobile Phone, 6.55 Inch, 4 GB RAM, 64 GB, 4G LTE - Cyan",
  "size"=> "5.3",
  "brand"=> "Nokia",
  "model"=> "TA-1234",
  "rate"=> "4",
  "capacity"=> "64",
  "pic"=> "https://m.media-amazon.com/images/I/414rN5dP0oS._AC_UL480_FMwebp_QL65_.jpg",
  "price"=> "2777"
],
54 =>
[
  "id"=> "B09QSB3LWX54",
  "name"=> "Huawei P10 VTR-L29 Dual Sim - 64GB, 4GB RAM, 4G LTE, Prestige Gold, 5.1 Inch",
  "size"=> "5.1",
  "brand"=> "Huawei",
  "model"=> "P10 VTR-L29",
  "rate"=> "4.3",
  "capacity"=> "64",
  "pic"=> "https://m.media-amazon.com/images/I/21xktNHb+nL._AC_UL480_FMwebp_QL65_.jpg",
  "price"=> "4444"
],
55 =>
[
  "id"=> "B09474BV8555",
  "name"=> "Apple Iphone XS Max With Facetime - 64 GB, 4G LTE, Silver, 4 GB Ram, Single Sim & E-Sim",
  "size"=> "6.4",
  "brand"=> "Apple",
  "model"=> "Iphone XS Max",
  "rate"=> "3.8",
  "capacity"=> "64",
  "pic"=> "https://m.media-amazon.com/images/I/6184ZQjelFL._AC_UL480_FMwebp_QL65_.jpg",
  "price"=> "16000"
],
56 =>
[
  "id"=> "B09G1PK13J56",
  "name"=> "Apple Iphone 8 Plus With Facetime - 128 GB, 4G LTE, Gold, 3 GB Ram, Single Sim",
  "size"=> "4.5",
  "brand"=> "Apple",
  "model"=> "Iphone 8 Plus",
  "rate"=> "4.3",
  "capacity"=> "128",
  "pic"=> "https://m.media-amazon.com/images/I/417itLFBzrL._AC_UL480_FMwebp_QL65_.jpg",
  "price"=> "12200"
],
57 =>
[
  "id"=> "B09FPW9SQ257",
  "name"=> "Apple iPhone XR 128GB Yellow",
  "size"=> "6.5",
  "brand"=> "Apple",
  "model"=> "iPhone XR",
  "rate"=> "3.7",
  "capacity"=> "128",
  "pic"=> "https://m.media-amazon.com/images/I/514gQUoVIvS._AC_UL480_FMwebp_QL65_.jpg",
  "price"=> "17199"
],
58 =>
[
  "id"=> "B09SHS78P658",
  "name"=> "Meizu M6T Dual Sim - 32GB,3GB RAM, 4G LTE, Red",
  "size"=> "5",
  "brand"=> "Meizu",
  "model"=> "M6T",
  "rate"=> "2.9",
  "capacity"=> "32",
  "pic"=> "https://m.media-amazon.com/images/I/31-F+D7GXzL._AC_UL480_QL65_.jpg",
  "price"=> "2699"
],
59 =>
[
  "id"=> "B08CGXVPXW59",
  "name"=> "Apple iPhone 12 128GB White",
  "size"=> "6.5",
  "brand"=> "Apple",
  "model"=> "iPhone 12",
  "rate"=> "4.9",
  "capacity"=> "128",
  "pic"=> "https://m.media-amazon.com/images/I/71jSvoDwrlL._AC_UL480_QL65_.jpg",
  "price"=> "15610"
]
];
if(!$_SESSION['products'])
$_SESSION['products'] = $products_list;