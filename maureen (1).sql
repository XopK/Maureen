-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3308
-- Время создания: Июн 24 2023 г., 15:52
-- Версия сервера: 8.0.24
-- Версия PHP: 8.0.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `maureen`
--

-- --------------------------------------------------------

--
-- Структура таблицы `order`
--

CREATE TABLE `order` (
  `id_order` int NOT NULL,
  `code_order` varchar(200) NOT NULL,
  `product` int NOT NULL,
  `user` int NOT NULL,
  `adress` varchar(100) NOT NULL,
  `date_order` datetime NOT NULL,
  `status` int NOT NULL,
  `count` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `order`
--

INSERT INTO `order` (`id_order`, `code_order`, `product`, `user`, `adress`, `date_order`, `status`, `count`) VALUES
(31, '90922', 8, 5, 'Уфа ул. Кирова 23', '2023-06-24 01:06:13', 2, '1'),
(32, '90922', 13, 5, 'Уфа ул. Кирова 23', '2023-06-24 01:06:25', 2, '1'),
(33, '99267', 7, 3, 'Москва ул. Арбат', '2023-06-24 01:06:25', 2, '1');

-- --------------------------------------------------------

--
-- Структура таблицы `product`
--

CREATE TABLE `product` (
  `id_product` int NOT NULL,
  `name` varchar(50) NOT NULL,
  `photo_product` varchar(300) NOT NULL,
  `description` varchar(2000) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `amount` int NOT NULL,
  `cost` int NOT NULL,
  `date_added` datetime NOT NULL,
  `id_seller` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `product`
--

INSERT INTO `product` (`id_product`, `name`, `photo_product`, `description`, `amount`, `cost`, `date_added`, `id_seller`) VALUES
(7, 'Сухой корм Whiskas', '6439208757.webp', 'Whiskas это: Оптимальное сочетание питательных веществ и нутриентов для подержания обмена веществ  Витамин Е и цинк для иммунитета  Омега-6 и цинк для здоровья кожи и шерсти  Баланс кальция и фосфора для здоровья костей  Витамин А и таурин для хорошего зрения  Высоко усваиваемые ингредиенты и клетчатка для пищеварения  Сухая текстура корма для удаления зубного налета', 5000, 1100, '2023-06-23 22:19:22', 2),
(8, 'Сушилка для овощей и фруктов ', '6543623642.webp', 'С электросушилкой Kitfort KT-1906 у вас под рукой будет всегда живая еда. Прибор насушит на всю зиму помидоры, кабачки, баклажаны, клубнику, абрикосы, персики, тыкву, грибы, зелень, рыбу и многое другое.', 400, 8990, '2023-06-23 22:20:47', 2),
(9, 'Вафельница Kitfort КТ-1617', '1017796937.webp', 'Электрическая вафельница Kitfort KT-1617 поможет испечь тонкие русские вафли. Она оснащена световыми индикаторами включения и готовности к работе, независимыми нагревателями в каждой половинке формы и отсеком для хранения шнура', 500, 1950, '2023-06-23 22:24:42', 2),
(12, 'Приправа для плова', '6307032266.webp', 'В наших приправах могут встречаться комочки - это признак использования свежих ингредиентов. Разомните их пальцами, добавьте в своё блюдо и насладитесь восхитительным вкусом и ароматом!\r\nМы предлагаем своим покупателям не просто вкусные смеси специй и пряностей, эти приправы - лучшее, что Вы можете попробовать в своих блюдах!', 650, 250, '2023-06-23 23:51:24', 4),
(13, 'Милые плюшевые игрушки', '6442355251.webp', 'плюшевые игрушки являются отличным выбором для подарков использоваться в качестве праздничного украшения, чтобы показать праздничную атмосферу, кому это понравится. это отличный подарок для детей, друзей и семьи\r\nИгрушки легко носить. Вы можете играть дома или взять их с собой, чтобы поиграть с друзьями.', 455, 1100, '2023-06-24 00:30:51', 4),
(15, 'Таблетки для посудомоечной машины', '6370508381.webp', 'Экологичные капсулы Fairy Platinum All in One с лимоном обеспечивают защиту компонентов посудомоечной машины и удаляют сложные загрязнения с посуды с первого раза, сообщая посуде приятный цитрусовый аромат, а посудомойке — чистоту и свежесть. Таблетки не содержат фосфатов. \r\nОсобенности таблеток «Фейри Платинум» для посудомоечных машин.', 488, 1590, '2023-06-24 15:23:40', 4);

-- --------------------------------------------------------

--
-- Структура таблицы `request`
--

CREATE TABLE `request` (
  `id_request` int NOT NULL,
  `id_user` int NOT NULL,
  `num_ogrnip` varchar(150) NOT NULL,
  `passport` varchar(300) NOT NULL,
  `num_ip` varchar(200) NOT NULL,
  `date_request` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `request`
--

INSERT INTO `request` (`id_request`, `id_user`, `num_ogrnip`, `passport`, `num_ip`, `date_request`) VALUES
(3, 3, '37538533434343', 'passport.pdf', '378353453453', '2023-06-24');

-- --------------------------------------------------------

--
-- Структура таблицы `review`
--

CREATE TABLE `review` (
  `id_review` int NOT NULL,
  `comment` varchar(500) NOT NULL,
  `product` int NOT NULL,
  `user` int NOT NULL,
  `date_review` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `review`
--

INSERT INTO `review` (`id_review`, `comment`, `product`, `user`, `date_review`) VALUES
(2, 'ХАХХАХА', 13, 2, '2023-06-24'),
(3, 'Плюшка красивая', 13, 4, '2024-06-20');

-- --------------------------------------------------------

--
-- Структура таблицы `role`
--

CREATE TABLE `role` (
  `id_role` int NOT NULL,
  `name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `role`
--

INSERT INTO `role` (`id_role`, `name`) VALUES
(1, 'Администратор'),
(2, 'Покупатель'),
(3, 'Продавец');

-- --------------------------------------------------------

--
-- Структура таблицы `status`
--

CREATE TABLE `status` (
  `id_status` int NOT NULL,
  `name_status` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `status`
--

INSERT INTO `status` (`id_status`, `name_status`) VALUES
(1, 'Доставлен'),
(2, 'Не доставлен'),
(3, 'Не сформирован');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id_user` int NOT NULL,
  `name` varchar(50) NOT NULL,
  `surname` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `role` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id_user`, `name`, `surname`, `password`, `phone`, `email`, `role`) VALUES
(1, 'admin', 'admin', 'dfkjsn34342D', '89774188547', 'admin', 1),
(2, 'Егор', 'Иванов', '555666ASd', '88005553535', 'test@mail.ru', 3),
(3, 'Арслан', 'Гилязетдинов', '727WOIWI34j', '89177544847', 'test2@mail.ru', 2),
(4, 'Данил', 'Махмутов', '727727uhdbfspDDDD', '89961038964', 'test3@mail.ru', 3),
(5, 'Валерий', 'Софийский', '1234sdfsfk4D', '89271566485', '12@mail.ru', 2),
(6, 'Антон', 'Антонович', '478343JSDFjd', '89177544842', 'grishaidk@mail.ru', 2);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`id_order`),
  ADD KEY `product` (`product`),
  ADD KEY `status` (`status`),
  ADD KEY `user` (`user`);

--
-- Индексы таблицы `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id_product`),
  ADD KEY `id_seller` (`id_seller`);

--
-- Индексы таблицы `request`
--
ALTER TABLE `request`
  ADD PRIMARY KEY (`id_request`),
  ADD KEY `id_user` (`id_user`);

--
-- Индексы таблицы `review`
--
ALTER TABLE `review`
  ADD PRIMARY KEY (`id_review`),
  ADD KEY `product` (`product`),
  ADD KEY `user` (`user`);

--
-- Индексы таблицы `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`id_role`);

--
-- Индексы таблицы `status`
--
ALTER TABLE `status`
  ADD PRIMARY KEY (`id_status`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_user`),
  ADD KEY `role` (`role`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `order`
--
ALTER TABLE `order`
  MODIFY `id_order` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT для таблицы `product`
--
ALTER TABLE `product`
  MODIFY `id_product` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT для таблицы `request`
--
ALTER TABLE `request`
  MODIFY `id_request` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT для таблицы `review`
--
ALTER TABLE `review`
  MODIFY `id_review` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT для таблицы `role`
--
ALTER TABLE `role`
  MODIFY `id_role` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT для таблицы `status`
--
ALTER TABLE `status`
  MODIFY `id_status` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id_user` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `order`
--
ALTER TABLE `order`
  ADD CONSTRAINT `order_ibfk_1` FOREIGN KEY (`status`) REFERENCES `status` (`id_status`) ON DELETE RESTRICT ON UPDATE CASCADE,
  ADD CONSTRAINT `order_ibfk_2` FOREIGN KEY (`user`) REFERENCES `users` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `order_ibfk_3` FOREIGN KEY (`product`) REFERENCES `product` (`id_product`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ограничения внешнего ключа таблицы `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `product_ibfk_1` FOREIGN KEY (`id_seller`) REFERENCES `users` (`id_user`) ON DELETE CASCADE;

--
-- Ограничения внешнего ключа таблицы `request`
--
ALTER TABLE `request`
  ADD CONSTRAINT `request_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `users` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ограничения внешнего ключа таблицы `review`
--
ALTER TABLE `review`
  ADD CONSTRAINT `review_ibfk_1` FOREIGN KEY (`product`) REFERENCES `product` (`id_product`) ON DELETE CASCADE,
  ADD CONSTRAINT `review_ibfk_2` FOREIGN KEY (`user`) REFERENCES `users` (`id_user`) ON DELETE CASCADE;

--
-- Ограничения внешнего ключа таблицы `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_ibfk_1` FOREIGN KEY (`role`) REFERENCES `role` (`id_role`) ON DELETE RESTRICT ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
