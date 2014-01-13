<?php include_once 'header.php'; ?>

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
      <label class="control-label" for="singlebutton"></label>
      <div class="controls">
        <button id="singlebutton" name="singlebutton" class="btn btn-primary">Додати</button>
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
    <label class="checkbox" for="checkboxes-0">
      <input type="checkbox" name="checkboxes" id="checkboxes-0" value="Категоія one">
      Категоія one
    </label>
    <label class="checkbox" for="checkboxes-1">
      <input type="checkbox" name="checkboxes" id="checkboxes-1" value="Категоія two">
      Категоія two
    </label>
    <label class="checkbox" for="checkboxes-2">
      <input type="checkbox" name="checkboxes" id="checkboxes-2" value="Категоія one">
      Категоія one
    </label>
    <label class="checkbox" for="checkboxes-3">
      <input type="checkbox" name="checkboxes" id="checkboxes-3" value="Категоія two">
      Категоія two
    </label>
  </div>
</div>

<!-- Button -->
<div class="control-group">
  <label class="control-label" for="singlebutton"></label>
  <div class="controls">
    <button id="singlebutton" name="singlebutton" class="btn btn-danger">Знищити</button>
  </div>
</div>

</fieldset>
</form>



<?php include_once 'footer.php'; ?>
