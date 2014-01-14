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

function mysql_delete($table, $delete) {
    $values = array_map('mysql_real_escape_string', array_values($delete));
    $keys = array_keys($delete);

    return mysql_query('DELETE FROM `'.$table.'` (`'.implode('`,`', $keys).'`) VALUES (\''.implode('\',\'', $values).'\')');
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
  die('Не з\'єднано : ' . mysql_error());
}

$db_selected = mysql_select_db('prosto-mysql', $link);

if (!$db_selected) {
    die ('Не можу використати базу даних : ' . mysql_error());
}

/*
Файл перегляду
*/

include_once 'header.php';
echo
'
<a class="btn" data-toggle="modal" href="#myModal">Launch Modal</a>
<div class="modal" id="myModal">
  <div class="modal-header">
    <a class="close" data-dismiss="modal">&times;</a>
    <h3>Вітаємо вас</h3>
  </div>
  <div class="modal-body">';


// головна сторінка - додавання продуктів
if (isset($_POST['category-add'])) {

  mysql_insert('category', array('cat-name' => $_POST['add-category-name']));
  mysql_insert_id();

echo
'
  <p>Спасибі, що скористалися нашою формою. Ви додали категорію <strong>' . $_POST['add-category-name'] . '</strong>
';
}

elseif (isset($_POST['category-del'])) {

  mysql_delete('category', array('cat-name' => $_POST['del-category-name']));

echo
'
  <p>Спасибі, що скористалися нашою формою. Ви видалили категорію <strong>' . $_POST['del-category-name'] . '</strong>
';
}

mysql_close();
echo
'
  </p>
  </div>
  <div class="modal-footer">
    <a href="#" class="btn btn-primary">Save changes</a>
    <a href="#" class="btn">Close</a>
  </div>
</div>
';

include_once 'footer.php';
