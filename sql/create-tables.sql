SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

CREATE TABLE IF NOT EXISTS `users` (
  id int(10) primary key,
  username varchar(128) not null,
  pass varchar(128) not null
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

INSERT INTO `users` (id, username, pass) values (
  1,
  'root',
  password('notyouraveragedefaultpassword')
)
