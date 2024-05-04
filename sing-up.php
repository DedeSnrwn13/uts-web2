<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Daftar</title>
  <link rel="stylesheet" href="css/bootstrap.css">
  <link rel="stylesheet" href="./css/style.css">
</head>

<body>
  <main class="bg-sign-in d-flex justify-content-center align-items-center">

    <div class="sign-up bg-white mt-2 h-auto mb-2 text-center pt-4 pb-3 pe-4 ps-4 d-flex flex-column">
      <div>
        <h2 class=" sign-in text-uppercase">daftar</h2>
      </div>
      <form method="POST" id="signup" action="createaccout.php" onsubmit="return validateInput();">
        <div class="mb-3 mt-3 text-start">
          <label for="username">username:</label>
          <input type="text" class="form-control" id="username" placeholder="Masukkan username" name="username" required>
        </div>
        <div class="mb-3 text-start">
          <label for="email">Email:</label>
          <input type="email" class="form-control" id="Email" placeholder="Masukkan Email" name="email" required>
        </div>
        <div class="mb-3 text-start">
          <label for="pwd">Password:</label>
          <input type="password" class="form-control" id="Pwd" placeholder="Masukkan password" name="pass" required>
        </div>
        <div class="mb-3 text-start">
          <label for="conPwd">Konfirmasi Password:</label>
          <input type="password" class="form-control" id="conPwd" placeholder="Konfirmasi password" name="conPass" required>
        </div>
        <button type="submit" name="submit" class="btn text-white w-100 text-uppercase">daftar</button>
        <p class="mt-4">Anda punya akun? <a href="index.php">login</a></p>
      </form>
    </div>

  </main>
  <script src="./js/validation.js"></script>
</body>

</html>