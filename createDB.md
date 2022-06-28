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