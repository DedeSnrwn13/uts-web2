<?php
session_start();
if (isset($_POST['submit'])) {
    include './pages/conixion.php';
    $email = $_POST['email'];
    $password = $_POST['pass'];

    $requete = "SELECT * FROM admins WHERE email = '$email' and password = '$password'";
    $statment = $con->prepare($requete);
    $statment->execute();
    $result = $statment->fetch();
    if ($result['email'] === $email && $result['password'] === $password) {
        $_SESSION['name'] = $result['username'];
        $_SESSION['email'] = $result['pmail'];
        $_SESSION['password'] = $result['password'];
        if (isset($_POST['check'])) {
            setcookie('email', $_SESSION['email'], time() + 3600);
            setcookie('password', $_SESSION['password'], time() + 3600);
        }
        header("location:./pages/dashboard.php");
    } else if (empty($email) || empty($password)) {
        header("location:index.php?error=silakan masukkan email atau kata sandi Anda");
    } else {
        header("location:index.php?error=email atau kata sandi tidak ditemukan");
    }
}
