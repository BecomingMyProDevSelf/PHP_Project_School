<?php

require_once("connection.php");





if($connn){

  $query = 'INSERT INTO averages (ID,Discription,Grade) SELECT ID, Discription, Grade/3 as Grade FROM final_grades';

  $results = mysqli_query($connn, $query);


  if (!$query) {
    echo 'Connection error' . mysqli_connect_error();
  }

}




?>
