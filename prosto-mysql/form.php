<?php

include_once 'mysql_connect.php';

// Функції
function mysql_insert($table, $inserts) {
    $values = array_map('mysql_real_escape_string', array_values($inserts));
    $keys = array_keys($inserts);

    return mysql_query('INSERT INTO `'.$table.'` (`'.implode('`,`', $keys).'`) VALUES (\''.implode('\',\'', $values).'\')');
}

function mysql_delete($table, $id) {
    $values = array_map('mysql_real_escape_string');
    //$keys = array_keys($delete);

    //return mysql_query('DELETE FROM `'.$table.'` (`'.implode('`,`', $keys).'`) VALUES (\''.implode('\',\'', $values).'\')');
    return mysql_query("DELETE FROM $table where id='$id'");
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

  if(empty($_REQUEST['add-category-name'])) {
    echo "<p>Ви не написали жодної категорії</p>";
  }

  else {
    mysql_insert('category', array('cat_name' => $_POST['add-category-name']));
    mysql_insert_id();

    echo
    '
      <p>Спасибі, що скористалися нашою формою. Ви додали категорію <strong>' . $_POST['add-category-name'] . '</strong>
    ';
  }
}

elseif (isset($_POST['category-del'])) {
/*
  mysql_delete('category', array('cat_name' => $_POST['del-category-name']));

  echo
  '
    <p>Спасибі, що скористалися нашою формою. Ви видалили категорію <strong>' . $_POST['del-category-name'] . '</strong>
  '; */

  if(empty($_REQUEST['item'])) {
    echo "<p>Ви не вибрали жодної категорії</p>";
  }
  else {
      foreach($_REQUEST['item'] as $id) {
      mysql_delete('category', array('id' => $_POST['item[]']));

      echo
      '
        <p>Спасибі, що скористалися нашою формою. Ви видалили категорію <strong>' . $_POST['del-category-name'] . '</strong>
      ';
    }
  }
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
