<?php include_once 'header.php'; ?>

  <form class="form-horizontal form-signin" action="form.php" method="POST" role="form" id="index-form" >
    <fieldset>

      <!-- Form Name -->
      <legend><h2 class="form-signin-heading">Форма додавання всякого</h2></legend>

      <!-- Text input-->
      <div class="control-group">
        <label class="control-label" for="textinput">Додайте продукт</label>
        <div class="controls">
          <input id="textinput" name="product-name" type="text" placeholder="продукт..." class="input-xlarge" required="">
          <p class="help-block">Сюди можна тикнути продукт</p>
        </div>
      </div>

      <!-- Text input-->
      <div class="control-group">
        <label class="control-label" for="textinput">Додайте ціну</label>
        <div class="controls">
          <input id="textinput" name="product-price" type="text" placeholder="ціна..." class="input-xlarge" required="">
          <p class="help-block">Сюди можна тикнути ціну</p>
        </div>
      </div>

      <!-- Select Multiple -->
      <div class="control-group">
        <label class="control-label" for="selectmultiple">Вибрати категорію</label>
        <div class="controls">
          <select id="selectmultiple" name="category-name" class="input-xlarge" multiple="multiple">
            <option>Бакалія</option>
            <option>Спиртне</option>
            <option>Побутова хімія</option>
          </select>
        </div>
      </div>

      <!-- Button -->
      <div class="control-group">
        <label class="control-label" for="singlebutton">Тикнути</label>
        <div class="controls">
          <button id="singlebutton" name="singlebutton" class="btn btn-primary">Сюди</button>
        </div>
      </div>

    </fieldset>
  </form>

<?php include_once 'footer.php'; ?>
