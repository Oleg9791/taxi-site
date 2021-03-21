-- Чтобы подключить тестовую базу данных, нужно создать у себя на компьютере новую БД с именем текущего файла и
-- скопировать содержимое данного файла в SQL запрос
CREATE TABLE `datatest` (
  `id_test` int UNSIGNED NOT NULL,
  `question1` varchar(100) COLLATE utf8_bin NOT NULL,
  `question2` varchar(100) COLLATE utf8_bin NOT NULL,
  `question3` varchar(100) COLLATE utf8_bin NOT NULL,
  `question4` varchar(100) COLLATE utf8_bin NOT NULL,
  `question5` varchar(100) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;


INSERT INTO `datatest` (`id_test`, `question1`, `question2`, `question3`, `question4`, `question5`) VALUES
(1, 'Несколько раз в месяц', 'Поездка в аэропорт/ из аэропорта', 'Утром, в первой половине дня', 'Цена', 'По телефону'),
(2, 'Один раз в месяц', 'Поездка на работу/ с работы', 'После обеда', 'Неприятные чувства', 'По Интернету'),
(3, 'Несколько раз в месяц', 'Поездка за развлечением / домой', 'Вечером', 'Плохой опыт с таксистами', 'Я ищу стоянку такси'),
(4, 'Несколько раз в месяц', 'Поездка на работу/ с работы', 'Вечером', 'Неприятные чувства', 'По Интернету'),
(5, 'Один раз в месяц', 'Поездка за развлечением / домой', 'Вечером', 'Цена', 'По телефону'),
(6, 'Несколько раз в год', 'Поездка в аэропорт/ из аэропорта', 'Утром, в первой половине дня', 'Цена', 'По телефону'),
(7, 'Никогда', 'Поездка в аэропорт/ из аэропорта', 'Утром, в первой половине дня', 'Цена', 'По телефону'),
(8, 'Никогда', 'Поездка за развлечением / домой', 'Утром, в первой половине дня', 'Цена', 'По телефону'),
(9, 'Никогда', 'Поездка в аэропорт/ из аэропорта', 'После обеда', 'Цена', 'По телефону'),
(10, 'Никогда', 'Поездка за развлечением / домой', 'Вечером', 'Цена', 'По телефону'),
(11, 'Никогда', 'Поездка за развлечением / домой', 'Ночью', 'Неприятные чувства', 'По телефону'),
(12, 'Один раз в месяц', 'Поездка в аэропорт/ из аэропорта', 'Утром, в первой половине дня', 'Цена', 'По Интернету'),
(13, 'Несколько раз в год', 'В случае спешки', 'После обеда', 'Цена', 'Лично, помахав рукой'),
(14, 'Один раз в месяц', 'Поездка в аэропорт/ из аэропорта', 'Утром, в первой половине дня', 'Цена', 'По телефону'),
(15, 'Никогда', 'Поездка в аэропорт/ из аэропорта', 'После обеда', 'Неприятные чувства', 'По телефону');


CREATE TABLE `usersdata` (
  `id_user` int UNSIGNED NOT NULL,
  `name` varchar(50) COLLATE utf8_bin NOT NULL,
  `login` varchar(100) COLLATE utf8_bin NOT NULL,
  `password` varchar(32) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;


INSERT INTO `usersdata` (`id_user`, `name`, `login`, `password`) VALUES
(1, 'oleg', 'oleg123', 'f094323a8fd67ead3769fcf2fdc6f418'),
(2, 'pavel', 'svet', '02339e1c5d051d6f007c08688290ee9d'),
(3, 'Svetlana', 'renata', '02339e1c5d051d6f007c08688290ee9d');

ALTER TABLE `datatest`
  ADD PRIMARY KEY (`id_test`);

ALTER TABLE `usersdata`
  ADD PRIMARY KEY (`id_user`);

ALTER TABLE `datatest`
  MODIFY `id_test` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

ALTER TABLE `usersdata`
  MODIFY `id_user` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

