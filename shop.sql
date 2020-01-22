-- Adminer 4.7.1 MySQL dump

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

DROP TABLE IF EXISTS `categories`;
CREATE TABLE `categories` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `description` text,
  `image` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `categories` (`id`, `name`, `description`, `image`) VALUES
(1,	'Ноутбуки',	'Ноутбук – незаменимое устройство для поездок, командировок и путешествий. Он известен своей компактностью, мобильностью и автономностью.',	'uploads/notebooks.png'),
(2,	'Компъютеры',	'Компью́тер — устройство или система, способная выполнять заданную, чётко определённую, изменяемую последовательность операций.',	'uploads/computers.png'),
(3,	'Телефоны',	'Каждый день на рынок мобильной техники выходят все более совершенные модели телефонов.',	'uploads/phones.jpg'),
(4,	'Мониторы',	'Мониторы являются одним из основных элементов компьютера. В первое внимание покупатели обычно уделяют внимание процессору, видеокарте и объему памяти.',	'uploads/monitors.png');

DROP TABLE IF EXISTS `products`;
CREATE TABLE `products` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `category_id` int(11) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `description` text,
  `price` int(11) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `category_id` (`category_id`),
  CONSTRAINT `products_ibfk_1` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `products` (`id`, `category_id`, `name`, `description`, `price`, `image`) VALUES
(1,	1,	'Ноутбук ASUS ZenBook 13 UX333FA-A4151T',	'<p><b>Завораживающее изображение</b><br>Экран ZenBook 13 выполнен в максимально компактном корпусе, чтобы ничто не отвлекало взгляд пользователя от великолепного изображения. Добиться этого удалось благодаря невероятно узкой экранной рамке. Ее толщина составляет всего 2.8 мм по бокам, 3.3 мм внизу и 5.9 мм над экраном (чтобы вместить встроенную камеру). За счет отсутствия четких границ картинка практически сливается с реальностью, а сам ZenBook 13 сравним по своему размеру с листом формата A4, являясь одним из самых компактных 13-дюймовых моделей на рынке.</p>',	22000,	'uploads/asus_90nb0jv3_m03610_images_11244691308.jpg'),
(2,	1,	'Ноутбук Dell Inspiron 3582',	'<p>Универсальный 15.6-дюймовый ноутбук по доступной цене <b>Dell Inspiron 3582</b>, оснащенный развлекательными возможностями, которые обеспечивают великолепное качество воспроизведения мультимедийных материалов.</p>',	18500,	'uploads/dell_i3582c54h5niw_bk_images_12364760804.jpg'),
(3,	1,	'Ноутбук Lenovo IdeaPad 330S-15IKB',	'<p><b>Тонкий и легкий</b><br>15.6-дюймовый IdeaPad 330S — это стильный, элегантный и удивительно компактный ноутбук. Он идеально подходит как для удаленной работы, так и для просмотра фильмов в дороге и не станет обузой благодаря малому весу.</p>',	31000,	'uploads/lenovo_81gc0083ra_images_12891727950.jpg'),
(4,	1,	'Ноутбук HP Pavilion Gaming 15-cx0038ua',	'<p>Уверенность и комфорт при выполнении повседневных задач. Что бы вам ни приходилось делать на ноутбуке — отправлять сообщения, фотографии, выполнять платежи, прослушивать музыку, этот надежный ноутбук — теперь с более тонким легким корпусом — выполняет все это день за днем.</p>',	26000,	'uploads/copy_hp_pavilion_15_8kr18ea_5db02802d5a4f_images_14634594071.jpg'),
(5,	1,	'Ноутбук ASUS ZenBook 13 UX333FA-A4151T',	'<p><b>Завораживающее изображение</b><br>Экран ZenBook 13 выполнен в максимально компактном корпусе, чтобы ничто не отвлекало взгляд пользователя от великолепного изображения. Добиться этого удалось благодаря невероятно узкой экранной рамке. Ее толщина составляет всего 2.8 мм по бокам, 3.3 мм внизу и 5.9 мм над экраном (чтобы вместить встроенную камеру). За счет отсутствия четких границ картинка практически сливается с реальностью, а сам ZenBook 13 сравним по своему размеру с листом формата A4, являясь одним из самых компактных 13-дюймовых моделей на рынке.</p>',	22000,	'uploads/asus_90nb0jv3_m03610_images_11244691308.jpg'),
(6,	1,	'Ноутбук Dell Inspiron 3582',	'<p>Универсальный 15.6-дюймовый ноутбук по доступной цене <b>Dell Inspiron 3582</b>, оснащенный развлекательными возможностями, которые обеспечивают великолепное качество воспроизведения мультимедийных материалов.</p>',	18500,	'uploads/dell_i3582c54h5niw_bk_images_12364760804.jpg'),
(7,	1,	'Ноутбук Lenovo IdeaPad 330S-15IKB',	'<p><b>Тонкий и легкий</b><br>15.6-дюймовый IdeaPad 330S — это стильный, элегантный и удивительно компактный ноутбук. Он идеально подходит как для удаленной работы, так и для просмотра фильмов в дороге и не станет обузой благодаря малому весу.</p>',	31000,	'uploads/lenovo_81gc0083ra_images_12891727950.jpg'),
(8,	1,	'Ноутбук HP Pavilion Gaming 15-cx0038ua',	'<p>Уверенность и комфорт при выполнении повседневных задач. Что бы вам ни приходилось делать на ноутбуке — отправлять сообщения, фотографии, выполнять платежи, прослушивать музыку, этот надежный ноутбук — теперь с более тонким легким корпусом — выполняет все это день за днем.</p>',	26000,	'uploads/copy_hp_pavilion_15_8kr18ea_5db02802d5a4f_images_14634594071.jpg'),
(12,	1,	'Ноутбук Acer',	'<p><b>Завораживающее изображение</b><br>Экран ZenBook 13 выполнен в максимально компактном корпусе, чтобы ничто не отвлекало взгляд пользователя от великолепного изображения. Добиться этого удалось благодаря невероятно узкой экранной рамке. Ее толщина составляет всего 2.8 мм по бокам, 3.3 мм внизу и 5.9 мм над экраном (чтобы вместить встроенную камеру). За счет отсутствия четких границ картинка практически сливается с реальностью, а сам ZenBook 13 сравним по своему размеру с листом формата A4, являясь одним из самых компактных 13-дюймовых моделей на рынке.</p>',	22000,	'uploads/asus_90nb0jv3_m03610_images_11244691308.jpg'),
(13,	1,	'Ноутбук Dell Inspiron 3582',	'<p>Универсальный 15.6-дюймовый ноутбук по доступной цене <b>Dell Inspiron 3582</b>, оснащенный развлекательными возможностями, которые обеспечивают великолепное качество воспроизведения мультимедийных материалов.</p>',	18500,	'uploads/dell_i3582c54h5niw_bk_images_12364760804.jpg'),
(14,	1,	'Ноутбук Lenovo IdeaPad 330S-15IKB',	'<p><b>Тонкий и легкий</b><br>15.6-дюймовый IdeaPad 330S — это стильный, элегантный и удивительно компактный ноутбук. Он идеально подходит как для удаленной работы, так и для просмотра фильмов в дороге и не станет обузой благодаря малому весу.</p>',	31000,	'uploads/lenovo_81gc0083ra_images_12891727950.jpg'),
(15,	1,	'Ноутбук HP Pavilion Gaming 15-cx0038ua',	'<p>Уверенность и комфорт при выполнении повседневных задач. Что бы вам ни приходилось делать на ноутбуке — отправлять сообщения, фотографии, выполнять платежи, прослушивать музыку, этот надежный ноутбук — теперь с более тонким легким корпусом — выполняет все это день за днем.</p>',	26000,	'uploads/copy_hp_pavilion_15_8kr18ea_5db02802d5a4f_images_14634594071.jpg'),
(16,	1,	'Ноутбук ASUS ZenBook 13 UX333FA-A4151T',	'<p><b>Завораживающее изображение</b><br>Экран ZenBook 13 выполнен в максимально компактном корпусе, чтобы ничто не отвлекало взгляд пользователя от великолепного изображения. Добиться этого удалось благодаря невероятно узкой экранной рамке. Ее толщина составляет всего 2.8 мм по бокам, 3.3 мм внизу и 5.9 мм над экраном (чтобы вместить встроенную камеру). За счет отсутствия четких границ картинка практически сливается с реальностью, а сам ZenBook 13 сравним по своему размеру с листом формата A4, являясь одним из самых компактных 13-дюймовых моделей на рынке.</p>',	22000,	'uploads/asus_90nb0jv3_m03610_images_11244691308.jpg'),
(17,	1,	'Ноутбук Dell Inspiron 3582',	'<p>Универсальный 15.6-дюймовый ноутбук по доступной цене <b>Dell Inspiron 3582</b>, оснащенный развлекательными возможностями, которые обеспечивают великолепное качество воспроизведения мультимедийных материалов.</p>',	18500,	'uploads/dell_i3582c54h5niw_bk_images_12364760804.jpg'),
(18,	1,	'Ноутбук Lenovo IdeaPad 330S-15IKB',	'<p><b>Тонкий и легкий</b><br>15.6-дюймовый IdeaPad 330S — это стильный, элегантный и удивительно компактный ноутбук. Он идеально подходит как для удаленной работы, так и для просмотра фильмов в дороге и не станет обузой благодаря малому весу.</p>',	31000,	'uploads/lenovo_81gc0083ra_images_12891727950.jpg'),
(19,	1,	'Ноутбук HP Pavilion Gaming 15-cx0038ua',	'<p>Уверенность и комфорт при выполнении повседневных задач. Что бы вам ни приходилось делать на ноутбуке — отправлять сообщения, фотографии, выполнять платежи, прослушивать музыку, этот надежный ноутбук — теперь с более тонким легким корпусом — выполняет все это день за днем.</p>',	26000,	'uploads/copy_hp_pavilion_15_8kr18ea_5db02802d5a4f_images_14634594071.jpg'),
(27,	1,	'Ноутбук ASUS ZenBook 13 UX333FA-A4151T',	'<p><b>Завораживающее изображение</b><br>Экран ZenBook 13 выполнен в максимально компактном корпусе, чтобы ничто не отвлекало взгляд пользователя от великолепного изображения. Добиться этого удалось благодаря невероятно узкой экранной рамке. Ее толщина составляет всего 2.8 мм по бокам, 3.3 мм внизу и 5.9 мм над экраном (чтобы вместить встроенную камеру). За счет отсутствия четких границ картинка практически сливается с реальностью, а сам ZenBook 13 сравним по своему размеру с листом формата A4, являясь одним из самых компактных 13-дюймовых моделей на рынке.</p>',	22000,	'uploads/asus_90nb0jv3_m03610_images_11244691308.jpg'),
(28,	1,	'Ноутбук Dell Inspiron 3582',	'<p>Универсальный 15.6-дюймовый ноутбук по доступной цене <b>Dell Inspiron 3582</b>, оснащенный развлекательными возможностями, которые обеспечивают великолепное качество воспроизведения мультимедийных материалов.</p>',	18500,	'uploads/dell_i3582c54h5niw_bk_images_12364760804.jpg'),
(29,	1,	'Ноутбук Lenovo IdeaPad 330S-15IKB',	'<p><b>Тонкий и легкий</b><br>15.6-дюймовый IdeaPad 330S — это стильный, элегантный и удивительно компактный ноутбук. Он идеально подходит как для удаленной работы, так и для просмотра фильмов в дороге и не станет обузой благодаря малому весу.</p>',	31000,	'uploads/lenovo_81gc0083ra_images_12891727950.jpg'),
(30,	1,	'Ноутбук HP Pavilion Gaming 15-cx0038ua',	'<p>Уверенность и комфорт при выполнении повседневных задач. Что бы вам ни приходилось делать на ноутбуке — отправлять сообщения, фотографии, выполнять платежи, прослушивать музыку, этот надежный ноутбук — теперь с более тонким легким корпусом — выполняет все это день за днем.</p>',	26000,	'uploads/copy_hp_pavilion_15_8kr18ea_5db02802d5a4f_images_14634594071.jpg'),
(31,	1,	'Ноутбук ASUS ZenBook 13 UX333FA-A4151T',	'<p><b>Завораживающее изображение</b><br>Экран ZenBook 13 выполнен в максимально компактном корпусе, чтобы ничто не отвлекало взгляд пользователя от великолепного изображения. Добиться этого удалось благодаря невероятно узкой экранной рамке. Ее толщина составляет всего 2.8 мм по бокам, 3.3 мм внизу и 5.9 мм над экраном (чтобы вместить встроенную камеру). За счет отсутствия четких границ картинка практически сливается с реальностью, а сам ZenBook 13 сравним по своему размеру с листом формата A4, являясь одним из самых компактных 13-дюймовых моделей на рынке.</p>',	22000,	'uploads/asus_90nb0jv3_m03610_images_11244691308.jpg'),
(32,	1,	'Ноутбук Dell Inspiron 3582',	'<p>Универсальный 15.6-дюймовый ноутбук по доступной цене <b>Dell Inspiron 3582</b>, оснащенный развлекательными возможностями, которые обеспечивают великолепное качество воспроизведения мультимедийных материалов.</p>',	18500,	'uploads/dell_i3582c54h5niw_bk_images_12364760804.jpg'),
(33,	1,	'Ноутбук Lenovo IdeaPad 330S-15IKB',	'<p><b>Тонкий и легкий</b><br>15.6-дюймовый IdeaPad 330S — это стильный, элегантный и удивительно компактный ноутбук. Он идеально подходит как для удаленной работы, так и для просмотра фильмов в дороге и не станет обузой благодаря малому весу.</p>',	31000,	'uploads/lenovo_81gc0083ra_images_12891727950.jpg'),
(34,	1,	'Ноутбук HP Pavilion Gaming 15-cx0038ua',	'<p>Уверенность и комфорт при выполнении повседневных задач. Что бы вам ни приходилось делать на ноутбуке — отправлять сообщения, фотографии, выполнять платежи, прослушивать музыку, этот надежный ноутбук — теперь с более тонким легким корпусом — выполняет все это день за днем.</p>',	26000,	'uploads/copy_hp_pavilion_15_8kr18ea_5db02802d5a4f_images_14634594071.jpg'),
(35,	1,	'Ноутбук Acer',	'<p><b>Завораживающее изображение</b><br>Экран ZenBook 13 выполнен в максимально компактном корпусе, чтобы ничто не отвлекало взгляд пользователя от великолепного изображения. Добиться этого удалось благодаря невероятно узкой экранной рамке. Ее толщина составляет всего 2.8 мм по бокам, 3.3 мм внизу и 5.9 мм над экраном (чтобы вместить встроенную камеру). За счет отсутствия четких границ картинка практически сливается с реальностью, а сам ZenBook 13 сравним по своему размеру с листом формата A4, являясь одним из самых компактных 13-дюймовых моделей на рынке.</p>',	22000,	'uploads/asus_90nb0jv3_m03610_images_11244691308.jpg'),
(36,	1,	'Ноутбук Dell Inspiron 3582',	'<p>Универсальный 15.6-дюймовый ноутбук по доступной цене <b>Dell Inspiron 3582</b>, оснащенный развлекательными возможностями, которые обеспечивают великолепное качество воспроизведения мультимедийных материалов.</p>',	18500,	'uploads/dell_i3582c54h5niw_bk_images_12364760804.jpg'),
(37,	1,	'Ноутбук Lenovo IdeaPad 330S-15IKB',	'<p><b>Тонкий и легкий</b><br>15.6-дюймовый IdeaPad 330S — это стильный, элегантный и удивительно компактный ноутбук. Он идеально подходит как для удаленной работы, так и для просмотра фильмов в дороге и не станет обузой благодаря малому весу.</p>',	31000,	'uploads/lenovo_81gc0083ra_images_12891727950.jpg'),
(38,	1,	'Ноутбук HP Pavilion Gaming 15-cx0038ua',	'<p>Уверенность и комфорт при выполнении повседневных задач. Что бы вам ни приходилось делать на ноутбуке — отправлять сообщения, фотографии, выполнять платежи, прослушивать музыку, этот надежный ноутбук — теперь с более тонким легким корпусом — выполняет все это день за днем.</p>',	26000,	'uploads/copy_hp_pavilion_15_8kr18ea_5db02802d5a4f_images_14634594071.jpg'),
(39,	1,	'Ноутбук ASUS ZenBook 13 UX333FA-A4151T',	'<p><b>Завораживающее изображение</b><br>Экран ZenBook 13 выполнен в максимально компактном корпусе, чтобы ничто не отвлекало взгляд пользователя от великолепного изображения. Добиться этого удалось благодаря невероятно узкой экранной рамке. Ее толщина составляет всего 2.8 мм по бокам, 3.3 мм внизу и 5.9 мм над экраном (чтобы вместить встроенную камеру). За счет отсутствия четких границ картинка практически сливается с реальностью, а сам ZenBook 13 сравним по своему размеру с листом формата A4, являясь одним из самых компактных 13-дюймовых моделей на рынке.</p>',	22000,	'uploads/asus_90nb0jv3_m03610_images_11244691308.jpg'),
(40,	1,	'Ноутбук Dell Inspiron 3582',	'<p>Универсальный 15.6-дюймовый ноутбук по доступной цене <b>Dell Inspiron 3582</b>, оснащенный развлекательными возможностями, которые обеспечивают великолепное качество воспроизведения мультимедийных материалов.</p>',	18500,	'uploads/dell_i3582c54h5niw_bk_images_12364760804.jpg'),
(41,	1,	'Ноутбук Lenovo IdeaPad 330S-15IKB',	'<p><b>Тонкий и легкий</b><br>15.6-дюймовый IdeaPad 330S — это стильный, элегантный и удивительно компактный ноутбук. Он идеально подходит как для удаленной работы, так и для просмотра фильмов в дороге и не станет обузой благодаря малому весу.</p>',	31000,	'uploads/lenovo_81gc0083ra_images_12891727950.jpg'),
(42,	1,	'Ноутбук HP Pavilion Gaming 15-cx0038ua',	'<p>Уверенность и комфорт при выполнении повседневных задач. Что бы вам ни приходилось делать на ноутбуке — отправлять сообщения, фотографии, выполнять платежи, прослушивать музыку, этот надежный ноутбук — теперь с более тонким легким корпусом — выполняет все это день за днем.</p>',	26000,	'uploads/copy_hp_pavilion_15_8kr18ea_5db02802d5a4f_images_14634594071.jpg');

-- 2020-01-17 18:19:51
ALTER TABLE `products`
ADD `country` varchar(255) DEFAULT NULL

ALTER TABLE `products`
ADD  `number` int(11) NOT NULL DEFAULT 0  ;