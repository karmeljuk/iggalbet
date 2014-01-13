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

/*

*/

$date = date('Y-m-d H:i:s');

mysql_insert('category', array($_POST['category-name']));

mysql_insert('product', array('name' => $_POST['product-name'], 'price' => $_POST['product-price'], 'category_name' => $_POST['category-name']));

mysql_insert('product-list', array('name' => $_POST['product-name'], 'date' => $date, 'price' => $_POST['product-price']));


// Файл відповіді
include_once 'header.php';

echo
'<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
</div>
<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
  <div class="alert alert-success">
  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
  <strong>Вітаємо вас</strong> Спасибі за користування нашою формою. ';
echo "Вас цікавить " . $_POST['product-name'] ;
echo "</div>";

include_once 'footer.php';
