<?php
session_start();
$id = $_SESSION['id'];
include 'conixion.php';
if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $age = $_POST['age'];
    $club = $_POST['club'];
    $position = $_POST['position'];
    $requete = $con->prepare("UPDATE players 
    SET 
    name = '$name',
    age = '$age',
    club = '$club',
    position = '$position'
    WHERE id = $id");
    $res = $requete->execute();
    header("location:players.php");
}
