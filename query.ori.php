<?php


$sqls = 'SELECT ID, Discription, Exam_1, Exam_2, Project  FROM individual_grades';

$results = mysqli_query($connn, $sqls);

$grades = mysqli_fetch_all($results, MYSQLI_ASSOC);

mysqli_free_result($results);

mysqli_close($connn);






 ?>
