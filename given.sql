CREATE TABLE `users` (
  `id` int(11) UNSIGNED NOT NULL,
  `name` varchar(60) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `user_level` int(11) NOT NULL,
  `mobile` varchar(10) NOT NULL,
  `mail` varchar(50) NOT NUll,
  `last_login` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `users` (`id`, `name`, `username`, `password`, `user_level`, `last_login`) VALUES
(1, 'me@me', 'me@me', ' 6dc00a30f8eea8a90ae9ed1396908832', 1,  '2020-08-11 07:03:23');

INSERT INTO `users`(`mail`,`mobile`)
values (`me@me`,9876543210)



create table `book`(
  bkid varchar(20),
	isbn varchar(20),
  author vachar(20),
	title varchar(20),
	category varchar(20),
  years int,
  arr_date date,
	price int,
  Quantity int
);
