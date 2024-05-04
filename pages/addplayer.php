<?php
include 'conixion.php';
if (isset($_POST['submit'])) {

    $image = $_FILES['img']['name'];
    $tempname = $_FILES['img']['tmp_name'];
    $folder = "../assets/img/" . $image;

    if (move_uploaded_file($tempname, $folder)) {
        echo 'gambar diunggah';
    }

    $name = $_POST['name'];
    $age = $_POST['age'];
    $club = $_POST['club'];
    $position = $_POST['position'];

    $requete = $con->prepare("INSERT INTO players(img,name,age,club,position) VALUES('$image','$name','$age','$club','$position')");
    $requete->execute();
}

header('location:players.php');
