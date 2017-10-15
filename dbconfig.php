<?php

/*

notice table
CREATE TABLE `notice` ( `no` INT NOT NULL AUTO_INCREMENT , `time` INT NOT NULL , `notice` TEXT NOT NULL , PRIMARY KEY (`no`)) ENGINE = MyISAM CHARSET=utf8 COLLATE utf8_unicode_ci;

*/
$conn 	= mysqli_connect('localhost', 'pox', 'tmxkdnjwm!', 'poxctf');
mysqli_query($conn, "SET CHARSET UTF8");


?>
