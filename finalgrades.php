
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="./csssheet.css">
    <title></title>
  </head>
  <section id="nav">
    <?php
          require("connection.php");

          $command = 'SELECT ID, Discription, Grade FROM final_grades';

          $result = mysqli_query($connn, $command);

          $grds = mysqli_fetch_all($result, MYSQLI_ASSOC);

          mysqli_free_result($result);

          if (!$result) {
            echo 'Connection Error' . mysqli_connection_error();
          }

          mysqli_close($connn);

        
     ?>
  <nav>
      <ul>
          <li><a href="./">Individual Grades</a></li>
          <li><a href="./finalgrades.php">Final Grades</a></li>


      </ul>
  </nav>
  </section>


  <body>
    <div  id="table">
      <label for="#container-2"></label>


        <div class="container container-1">
          <table >
              <tr>
                  <th>ID</th>
                  <th>Discription</th>
                  <th>Final Grade</th>
              </tr>
              <?php foreach ($grds as $grd): ?>
              <tr>
                  <td><?= $grd['ID']; ?></td>
                  <td><?= $grd['Discription']; ?></td>
                  <td><?php echo $final = $grd['Grade']/3;  ?></td>
              </tr>
              <?php endforeach; ?>
          </table>

        </div>

  </body>
</html>
