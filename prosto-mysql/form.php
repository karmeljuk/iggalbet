<?php

include_once 'mysql_connect.php';

// Функції
function mysql_insert($table, $inserts) {
    $values = array_map('mysql_real_escape_string', array_values($inserts));
    $keys = array_keys($inserts);
    return mysql_query('INSERT INTO `'.$table.'` (`'.implode('`,`', $keys).'`) VALUES (\''.implode('\',\'', $values).'\')');
}

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


// категорій сторінка - додавання їх
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

  if(empty($_POST['item'])) {
    echo "<p>Ви не вибрали жодної категорії</p>";
  }
  else {
      foreach($_POST['item'] as $value) {

        $sql = "DELETE FROM category WHERE id ='$value'";
        mysql_query ($sql);

      echo
      '
        <p>Спасибі, що скористалися нашою формою. Ви видалили категорію <strong>' . $_POST['item'][0] . '</strong>
      ';
    }
  }
}

elseif (isset($_POST['add-product-name'])) {

  if(empty($_POST['product-name'])) {
    echo "<p>Ви не зазначили жодної продукту</p>";
  }
  else {
      mysql_insert('product',
        array(
          'product_name' => $_POST['product-name'],
          'price' => $_POST['product-price'],
          'category_id' => $_POST['item'][0]
          )
        );
      mysql_insert_id();
      // mysql_insert('category', array('cat_name' => $_POST['name'] ));


    echo
    '
      <p>Спасибі, що скористалися нашою формою. Ви додали продукт <strong>' . $_POST['product-name'][0] . '</strong>
    ';
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
