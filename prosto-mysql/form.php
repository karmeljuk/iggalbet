<?php

$host = "localhost";
$user = "iggalbet";
$password = "iggalbet";

// Функції
function mysql_insert($table, $inserts) {
    $values = array_map('mysql_real_escape_string', array_values($inserts));
    $keys = array_keys($inserts);

    return mysql_query('INSERT INTO `'.$table.'` (`'.implode('`,`', $keys).'`) VALUES (\''.implode('\',\'', $values).'\')');
}

// Спроба підключення до серверу MySQL:
if (!mysql_connect($host, $user, $password))
{
  echo "<h2> Отакої. В MySQL якась помилка!</h2>";
  exit;
}
mysql_query('SET NAMES utf8');

$link = mysql_connect($host, $user, $password);

if (!$link) {
  die('Not connected : ' . mysql_error());
}

$db_selected = mysql_select_db('prosto-mysql', $link);

if (!$db_selected) {
    die ('Не можу використати базу даних : ' . mysql_error());
}

mysql_insert('category', array('grocery' => 'Бакалія', 'barrel' => 'Спиртне', 'chemicals' => 'Хімія'));

mysql_insert('pruduct', array('name' => 'Борошно', 'price' => '12', 'category_name' => 'grocery'));

mysql_insert('pruduct', array('name' => 'Вино', 'price' => '47', 'category_name' => 'Спиртне'));

mysql_insert('pruduct', array('name' => 'Мило', 'price' => '2', 'category_name  ' => 'Хімія'));

