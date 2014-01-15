<?php include_once 'header.php'; ?>
<?php include_once 'mysql_connect.php'; ?>

<form class="form-horizontal form-signin" action="form.php" method="POST" role="form">
  <fieldset>

    <!-- Form Name -->
    <legend><h2 class="form-signin-heading">Додавання категорії</h2></legend>

    <!-- Text input-->
    <div class="control-group">
      <label class="control-label" for="textinput">Напишіть назву категорії</label>
      <div class="controls">
        <input id="textinput" name="add-category-name" type="text" placeholder="категорія..." class="input-xlarge">

      </div>
    </div>

    <!-- Button -->
    <div class="control-group">
      <label class="control-label" for="category-add"></label>
      <div class="controls">
        <button id="singlebutton" name="category-add" class="btn btn-primary">Додати</button>
      </div>
    </div>

  </fieldset>
</form>

<form class="form-horizontal form-signin" action="form.php" method="POST" role="form">
  <fieldset>

<!-- Form Name -->
<legend></legend>

<!-- Multiple Checkboxes -->
<div class="control-group">
  <label class="control-label" for="checkboxes">Виберіть категорію</label>
  <div class="controls">
  <?php
    $sql = mysql_query("select * from category");
    $cat_name = mysql_fetch_object($sql);
    foreach ($cat_name as $name):
  ?>
    <label class="checkbox" for="checkboxes-0">
      <input type="checkbox" name="checkboxes" id="checkboxes-$cat_name" value="$name">
      <?php //echo $name[0];
      var_dump($name[0]); exit;
      ?>
    </label>
  <?php endforeach ?>

  </div>
</div>

<!-- Button -->
<div class="control-group">
  <label class="control-label" for="category-del"></label>
  <div class="controls">
    <button id="category-del" name="category-del" class="btn btn-danger">Знищити</button>
  </div>
</div>

</fieldset>
</form>

<?php include_once 'footer.php'; ?>

