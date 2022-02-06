<?php

require_once('connection.php');

if(isset($_POST['add'])){
    $IDs = $_POST['IDs'];
    $Discpt = $_POST['Discript'];
    $Exa_1 = $_POST['Exam'];
    $Exa_2 = $_POST['Ex2'];
    $projt = $_POST['proj'];


    $qry = "INSERT INTO individual_grades(ID, Discription, Exam_1, Exam_2, Project) VALUES ('$IDs','$Discpt', '$Exa_1', '$Exa_2', '$projt')";
    $qry_run = mysqli_query($connn, $qry);

    if($qry_run){
        echo '<script> alert("Data Saved"); </script>';

    }
    else
    {
        echo '<script> alert("Data Not Saved"); </script>';
    }

    header("Location: index.php");
}

if (isset($_POST['add'])) {
  $sql = 'INSERT INTO final_grades (ID,Discription,Grade) SELECT ID, Discription, Exam_1+Exam_2+Project as Grade FROM individual_grades';
  $query_run = mysqli_query($connn, $sql);

  if (!$query_run) {
    echo 'Connection error' . mysqli_connect_error();
  }

}


?>
