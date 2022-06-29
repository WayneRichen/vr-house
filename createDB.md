## 新增網站資料庫
```sql
CREATE DATABASE IF NOT EXISTS `vrhouse` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
USE `vrhouse`;
```

---
## 新增房東 ``landlord`` 資料表 
```sql
CREATE TABLE `landlord` (
  `id` int(11) NOT NULL,
  `email` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `enable` tinyint(1) NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
```

## ``landlord`` 資料表索引
```sql
ALTER TABLE `landlord`
  ADD PRIMARY KEY (`id`),
  ADD KEY `email` (`email`);
```

## 新增範例房東
```sql
INSERT INTO `landlord` (`id`, `email`, `password`, `name`, `phone`, `enable`, `created_at`) VALUES
(1, 'wayne@test.com', '$2y$10$.Zv061AGii6rP4BVEafGZuUCewmHqACyIotrgDGJJim8Wi206PAoC', 'Landlord', '0987654321', 1, '2022-06-28 13:41:56');
```
## 使用資料表自動遞增(AUTO_INCREMENT) `landlord`
```sql
ALTER TABLE `landlord`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
```

----

## 新增房客 ``tenant`` 資料表
```sql
CREATE TABLE `tenant` (
  `id` int(11) NOT NULL,
  `email` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `enable` tinyint(4) NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
```

## ``tenant`` 資料表索引
```sql
ALTER TABLE `tenant`
  ADD PRIMARY KEY (`id`),
  ADD KEY `email` (`email`);
```

## 新增範例房客
```sql
INSERT INTO `tenant` (`id`, `email`, `password`, `name`, `phone`, `enable`, `created_at`) VALUES
(1, 'wayne@test.com', '$2y$10$v22BiaTK0ozfKGf2hDFOtewNCOTKAuc39A.BnVfkPX/tyrQd/djT2', 'Wayne', '0912345678', 1, '2022-06-28 12:28:43');
```

## 使用資料表自動遞增(AUTO_INCREMENT) `tenant`
```sql
ALTER TABLE `tenant`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;
```

---

## 新增房屋 ``house`` 資料表
```sql
CREATE TABLE `house` (
  `id` int(11) NOT NULL,
  `landlord` int(11) NOT NULL,
  `title` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subtitle` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `city` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `region` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `rent` int(10) NOT NULL,
  `vr_url` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `images` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL CHECK (json_valid(`images`)),
  `enable` tinyint(4) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
```

## ``house`` 資料表索引
```sql
ALTER TABLE `house`
  ADD PRIMARY KEY (`id`),
  ADD KEY `landlord` (`landlord`);
```

## 使用資料表自動遞增(AUTO_INCREMENT) ``house``
```sql
ALTER TABLE `house`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
```

## 資料表的限制式 ``house``
--
ALTER TABLE `house`
  ADD CONSTRAINT `house_ibfk_1` FOREIGN KEY (`landlord`) REFERENCES `landlord` (`id`);
COMMIT;

## 新增範例房屋
```sql
INSERT INTO `house` (`id`, `landlord`, `title`, `subtitle`, `city`, `region`, `rent`, `vr_url`, `description`, `images`, `enable`, `created_at`) VALUES
(1, 1, 'sdf', 'dsag', '', 'dsfa', 23, 'sdf', 'sdag', '[1]', 1, '2022-06-29 17:13:16'),
(2, 1, '帶輕便行李.便可入住！可影片看屋', '3房2廳2衛45坪3F/7F電梯大樓', '', '中山區', 55000, 'https://vrhouse.richen.me/', '溫馨家居家俱齊全.乾淨舒服.生活機能優旁廣闊前港公園.綠地休閒處.福中公園<br>對面有-家樂福.全聯.郵局幼兒園托嬰中心.<br>.樓下有YouBike.百齡國小國中.陽明高中.北士商.公車站｛車位另租&nbsp;}:<br>【屋主出租】:0936-169457李小姐<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Line\r\n                iD:&nbsp;hua3037\r\n                附近有便利商店、傳統市場、百貨公司、公園綠地、學校、醫療機構、夜市。\r\n                本房屋近近劍潭捷運站..公車站、士林夜市公車站、士林運動中心捷運站。', '[\"https://picsum.photos/seed/2/200/200\"]', 1, '2022-06-29 17:14:52'),
(3, 2, '士林創富總部', '福邦開發股份有限公司', '', '士林區', 50000, 'https://newhouse.591.com.tw/home/housing/detail?hid=130095&bid=3165', '區域發展一橋之隔，北投士林科技園區陸續發展、搶先布局、連接內科、南軟科技廊道，串聯台北雙子星、台北藝術科學園區、大直商業區黃金地段淡水河岸第一排，超廣角3面環河景觀，座落於40米延平北路上，公車班次頻繁，往來大台北等地便捷完美規劃稀有雙併，格局方正，可合併使用，兩客梯一貨梯，全棟26戶，規劃單純、6米氣派大廳、雄偉石材外觀、室內全配備，輕鋼架天花板含燈具', '[\"https://picsum.photos/seed/2/200/200\"]', 1, '2022-06-29 17:33:37');
```