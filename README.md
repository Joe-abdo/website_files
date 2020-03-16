# Joe-abdo
A simple attempt to create an open source social media platform 

## Setup
 Server:  
* Apache  
* Database client version: libmysql - mysqlnd 5.0.12-dev  
* PHP extension: mysqli curl mbstring  
* PHP version: 7.3.2  

i need to update this
SQL:
```SQL
CREATE TABLE `table1` (
 `id` int(11) NOT NULL AUTO_INCREMENT,
 `file` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
 `image` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
 `width` int(11) DEFAULT NULL,
 `height` int(11) DEFAULT NULL,
 `posted_by` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
 `handle` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
 `profile` text COLLATE utf8mb4_unicode_ci NOT NULL,
 `date` date NOT NULL,
 `time` time NOT NULL,
 PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=250 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci
```

```SQL
CREATE TABLE `users` (
 `id` int(11) NOT NULL AUTO_INCREMENT,
 `username` varchar(50) NOT NULL,
 `handle` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
 `profile` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
 `password` varchar(255) NOT NULL,
 `created_at` datetime DEFAULT current_timestamp(),
 PRIMARY KEY (`id`),
 UNIQUE KEY `username` (`username`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8mb4
```
## Copyright info
This project is licensed under the terms of the MIT license.  
In other words: you can do whatever you want with this code, I don't fucking care.  
