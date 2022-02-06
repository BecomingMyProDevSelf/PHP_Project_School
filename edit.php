<?php


require_once('connection.php');


if(isset($_POST['update'])){
  $ID = $_GET["ids"];
  $progam = $_GET["discript"];
  $Exam1 = $_GET["exam"];
  $Exam2 = $_GET["ex2"];
  $project = $_GET["Proj"];


  $sequel = "UPDATE individual_grades SET ID='$ID', Discription='$progam', Exam_1='$Exam1', Exam_2='$Exam2', Project='$project' WHERE ID='$ID' ";


  $query_runs = mysqli_query($connn, $sequel);

  if ($query_runs) {
    echo '<script type="text/javascript"> alert("Data Saved") </script>';
  }else {
    echo '<script type="text/javascript"> alert("Data not saved") </script>';
  }

}


header("Location: gradestable.php");


 ?>
