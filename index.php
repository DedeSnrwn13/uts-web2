<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
  <link rel="stylesheet" href="css/bootstrap.css">
  <link rel="stylesheet" href="./css/style.css">
</head>

<body>
  <main class="bg-sign-in d-flex justify-content-center align-items-center">
    <div class=" form-sign-in bg-white mt-2 h-auto mb-2 text-center pt-2 pe-4 ps-4 d-flex flex-column">
      <h1 class="E-classe text-start ms-3 ps-1">E-Timnas U23</h1>
      <div>
        <h2 class=" sign-in text-uppercase">login</h2>
        <p>Masukkan kredensial Anda untuk mengakses akun Anda</p>
      </div>
      <?php
      if (isset($_GET['error'])) {
        if ($_GET['error'] == "Masukkan email atau Password") {
          echo '<div class="alert alert-danger" role="alert">
            Masukkan email atau Password
          </div>';
        } elseif ($_GET['error'] == "Email atau Password tidak ditemukan") {
          echo '<div class="alert alert-danger" role="alert">
              Email atau Password tidak ditemukan
          </div>';
        }
      }
      ?>
      <form method="POST" action="login.php">
        <div class="mb-3 mt-3 text-start">
          <label for="email">Email:</label>
          <input type="email" class="form-control" id="email" placeholder="Masukkan email" name="email" value="<?php if (isset($_COOKIE['email'])) {
                                                                                                                  echo $_COOKIE['email'];
                                                                                                                } ?>">
        </div>
        <div class="mb-3 text-start">
          <label for="pwd">Password:</label>
          <input type="password" class="form-control" id="pwd" placeholder="Masukkan password" name="pass" value="<?php if (isset($_COOKIE['password'])) {
                                                                                                                    echo $_COOKIE['password'];
                                                                                                                  } ?>" autocomplete="on">
        </div>
        <div class="mb-3 form-check d-flex gap-2">
          <input type="checkbox" class="form-check-input" id="exampleCheck1" name="check">
          <label class="form-check-label" for="exampleCheck1">Ingat Saya</label>
        </div>
        <button type="submit" name="submit" class="btn text-white w-100 text-uppercase">Masuk</button>
      </form>
      <button href="" class="btn-register btn btn-success my-3">Buat Akun</button>
    </div>

  </main>

  <div class="bg"></div>

  <div class="register d-flex justify-content-center align-items-center">
    <div class="sign-up bg-white mt-2 h-auto mb-2 text-center pt-4 pb-3 pe-4 ps-4 d-flex flex-column">
      <div>
        <h2 class=" sign-in text-uppercase">daftar</h2>
      </div>
      <form method="POST" id="signup" action="createaccout.php">
        <div class="mb-3 mt-3 text-start">
          <label class="label-signup" for="username">Username: <span class="valid"></span></label>
          <input type="text" class="form-control" id="username" placeholder="Masukkan username" name="username">
        </div>
        <div class="mb-3 text-start">
          <label class="label-signup" for="email">Email: <span class="valid"></span></label>
          <input type="email" class="form-control" id="Email" placeholder="Masukkan Email" name="email">
        </div>
        <div class="mb-3 text-start">
          <label class="label-signup" for="pwd">Password: <span class="valid"></span></label>
          <input type="password" class="form-control" id="Pwd" placeholder="Masukkan password" name="pass" autocomplete="on">
        </div>
        <div class="mb-3 text-start">
          <label class="label-signup" for="conPwd">Konfirmasi Password: <span class="valid"></span></label>
          <input type="password" class="form-control" id="conPwd" placeholder="Konfirmasi password" name="conPass" autocomplete="on">
        </div>
        <button type="submit" name="submit" class="btn text-white w-100 text-uppercase">daftar</button>
        <p class="mt-4">Anda punya akun? <a href="index.php">login</a></p>
      </form>
    </div>
  </div>
  <script src="/js/bootstrap.bundle.js"></script>
  <script src="./js/validation.js"></script>
</body>

</html>