<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="../css/bootstrap.css">
  <link rel="stylesheet" href="../css/style.css">
</head>

<body>
  <?php
  session_start();
  include 'conixion.php';
  $_SESSION["id"] = $_GET['id'];
  $id = $_SESSION["id"];
  $statement = $con->prepare("SELECT * FROM players WHERE id = $id");
  $statement->execute();
  $table = $statement->fetch();

  ?>
  <div class="container w-50">


    <form method="POST" action="update.php" enctype="multipart/form-data">
      <div class="">
        <label for="recipient-name" class="col-form-label">Nama:</label>
        <input type="text" class="form-control" id="recipient-name" name="name" value="<?php echo $table['name'] ?>">
      </div>
      <div class="">
        <label for="recipient-name" class="col-form-label">Umur:</label>
        <input type="text" class="form-control" id="recipient-name" name="age" value="<?php echo $table['age'] ?>">
      </div>
      <div class="">
        <label for="recipient-name" class="col-form-label">Klub:</label>
        <input type="text" class="form-control" id="recipient-name" name="club" value="<?php echo $table['club'] ?>">
      </div>
      <div class="">
        <label for="recipient-name" class="col-form-label">Posisi:</label>
        <input type="text" class="form-control" id="recipient-name" name="position" value="<?php echo $table['position'] ?>">
      </div>
      <div class="modal-footer">
        <button type="submit" name="submit" class="btn btn-primary">Update pemain</button>
      </div>
    </form>
  </div>
  <script src="../js/script.js"></script>
  <script src="../js/bootstrap.bundle.js"></script>
</body>

</html>