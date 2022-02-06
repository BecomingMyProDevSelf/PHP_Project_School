<?php


  $mysqli = new mysqli('localhost', 'robert', 'mmpmrl5542', 'test') or die(mysqli_error($mysqli));


if(isset($_GET['delete'])){

    $id = $_GET['delete'];

    $mysqli->query("DELETE FROM individual_grades WHERE ID = '$id' ");
    $mysqli->query("DELETE FROM averages WHERE ID = '$id'");

    if (!$mysqli) {
      echo 'Connection error' . mysqli_connect_error();
    }

    header("Location: gradestable.php");
}






?>
