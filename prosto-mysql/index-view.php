<?php include_once 'header.php'; ?>

<a class="btn" data-toggle="modal" href="#myModal">Launch Modal</a>
<div class="modal" id="myModal">
  <div class="modal-header">
    <a class="close" data-dismiss="modal">&times;</a>
    <h3>Modal header</h3>
  </div>
  <div class="modal-body">
    <p><strong>Вітаємо вас</strong> Спасибі за користування нашою формою. вас цікавить <?php echo $_POST['product-name']; ?></p>
  </div>
  <div class="modal-footer">
    <a href="#" class="btn btn-primary">Save changes</a>
    <a href="#" class="btn">Close</a>
  </div>
</div>


<?php include_once 'footer.php'; ?>
