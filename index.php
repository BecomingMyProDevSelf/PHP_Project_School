
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device_width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title></title>
    <link rel="stylesheet" href="./csssheet.css">
    <title></title>
  </head>
  <body>
    <section id="nav">
    <nav>
        <ul>
            <li><a href="./">Individual Grades</a></li>
            <li><a href="./finalgrades.php">Final Grades</a></li>
        </ul>
    </nav>
    </section>


    <?php
    require_once('connection.php');

  include 'query.ori.php';

     ?>
     <form class="container container-2" action="./gradestable.php" method="POST">
          <div  id="table">
            <label for="#container-2"></label>

                  <table >

                    <thead>
                      <tr>
                         <th>ID</th>
                         <th>Discription</th>
                         <th>exam-1</th>
                         <th>exam-2</th>
                         <th>Project</th>
                      </tr>
                    </thead>

                    <tbody>
                      <tr>
                        <?php foreach($grades as $grade): ?>
                          <tr>
                            <td>
                              <?= $grade['ID']; ?>
                            </td>
                            <td>
                              <?= $grade['Discription'];?>
                            </td>
                            <td>
                              <?= $grade['Exam_1'];?>
                            </td>
                            <td>
                            <?= $grade['Exam_2'];?>
                          </td>
                            <td>
                              <?= $grade['Project'];?>
                            </td>
                        <?php endforeach; ?>

                    </tbody>
                  </table>
              </div>
              <button type="submit" name="button" class="button">edit</button>

    </form>

    


  </body>
</html>
