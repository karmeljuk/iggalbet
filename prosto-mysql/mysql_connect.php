<?php

$host = "localhost";
$user = "iggalbet";
$password = "iggalbet";

// Спроба підключення до серверу MySQL:
if (!mysql_connect($host, $user, $password))
{
  echo "<h2> Отакої. В MySQL якась помилка!</h2>";
  exit;
}
mysql_query('SET NAMES utf8');

$link = mysql_connect($host, $user, $password);

if (!$link) {
  die('Не з\'єднано : ' . mysql_error());
}

$db_selected = mysql_select_db('prosto-mysql', $link);

if (!$db_selected) {
    die ('Не можу використати базу даних : ' . mysql_error());
}
