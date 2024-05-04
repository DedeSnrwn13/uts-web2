<?php
include 'conixion.php';
$id = $_GET['id'];

if (isset($id)) {
    $stmt = $con->prepare("DELETE FROM players WHERE id = $id");
    $stmt->execute();
}
header('location:players.php');
