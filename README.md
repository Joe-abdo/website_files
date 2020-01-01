# Joe-abdo
A simple attempt to create an open source social media platform 

## Server:  
* Apache  
* Database client version: libmysql - mysqlnd 5.0.12-dev  
* PHP extension: mysqli curl mbstring  
* PHP version: 7.3.2  

## SQL:
```SQL
CREATE TABLE `table1` (
 `id` int(11) NOT NULL AUTO_INCREMENT,
 `file` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
 `image` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
 `width` int(11) DEFAULT NULL,
 `height` int(11) DEFAULT NULL,
 `date` date NOT NULL,
 `time` time NOT NULL,
 PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=0 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci
```
## Copyright info
This project is licensed under the terms of the MIT license.  
In other words: you can do whatever you want with this code, I don't fucking care.  
