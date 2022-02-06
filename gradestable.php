
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device_width, initial-scale=1.0">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">

    <link rel="stylesheet" href="./csssheet.css">
    <title></title>
  </head>
  <body>
    <div class="jumbotron">
      <section id="nav">
      <nav>
          <ul>
              <li><a href="./">Individual Grades</a></li>
              <li><a href="./finalgrades.php">Final Grades</a></li>
          </ul>
      </nav>
      </section>


    </div>

    <?php

require_once('connection.php');
  include 'query.ori.php';  ?>



     <!-- Modal -->
     <div class="modal fade" id="Gradesaddmodal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
       <div class="modal-dialog">
         <div class="modal-content">
           <div class="modal-header">
             <h5 class="modal-title" id="exampleModalLabel">Add Student Data</h5>
             <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
           </div>
           <form action="insert.php" method="POST">
                 <div class="modal-body">

                             <div class="form-group">
                                 <label for="">Course ID</label>
                                 <input type="text" name="IDs" class="form-control" placeholder="Enter Course ID" >
                             </div>
                             <div class="form-group">
                                 <label for="">Discription</label>
                                 <input type="text" name="Discript" class="form-control" placeholder="Enter Discription" >
                             </div>
                             <div class="form-group">
                                 <label for="">Exam 1/label>
                                 <input type="text" name="Exam" class="form-control" placeholder="Enter Exam 1 Grade" >
                             </div>
                             <div class="form-group">
                                 <label for="">Exam 2</label>
                                 <input type="text" name="Ex2" class="form-control" placeholder="Enter Exam 2 Grade" >
                             </div>
                             <div class="form-group">
                                 <label for="">Project</label>
                                 <input type="text" name="proj" class="form-control" placeholder="Enter Project Grade" >
                             </div>

                 </div>

                             <div class="modal-footer">
                                 <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                 <button type="submit" name="add" class="btn btn-primary">Save Data</button>
                             </div>
           </form>

         </div>
       </div>
     </div>
     <div class="card">
         <div class="card-body">
             <!-- Button trigger modal -->
                 <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#Gradesaddmodal">
                 Add Data
                 </button>
         </div>
     </div>
     <!-- Grades Table -->
     <form class="container container-2" action="./" method="POST">
          <div  id="table">
            <label for="#container-2"></label>

                  <table >

                    <thead>
                      <tr>
                         <th>Action</th>
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
                             <a href="edit.php?submit=<?php echo $grade['ID']; ?>" data-bs-toggle="modal" data-bs-target="#Updaterow"> <i class="fa fa-pencil text-info"></i></a>
                             <a href="process.php?delete=<?php echo $grade['ID']; ?>"> <i class="fa fa-trash text-danger" ></i> </a>
                            </td>
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
    </form>



    <!--Update Grades-->
    <div class="modal fade" id="Updaterow" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Update Grades</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <form action="edit.php" method="POST">
                <div class="modal-body">

                            <div class="form-group">
                                <label for="">Course ID</label>
                                <input type="text" name="ids" class="form-control" value="<?php echo $grade['ID']; ?>" placeholder="Enter Course ID" >
                            </div>
                            <div class="form-group">
                                <label for="">Discription</label>
                                <input type="text" name="discript" class="form-control"  value="<?php echo $grade['Discription'];  ?>" placeholder="Enter Discription" >
                            </div>
                            <div class="form-group">
                                <label for="">Exam 1/label>
                                <input type="text" name="exam" class="form-control" value="<?php echo $grade['Exam_1']; ?>" placeholder="Enter Exam 1 Grade" >
                            </div>
                            <div class="form-group">
                                <label for="">Exam 2</label>
                                <input type="text" name="ex2" class="form-control" value="<?php echo $grade['Exam_2']; ?>" placeholder="Enter Exam 2 Grade" >
                            </div>
                            <div class="form-group">
                                <label for="">Project</label>
                                <input type="text" name="Proj" class="form-control" value="<?php echo $grade['Project']; ?>" placeholder="Enter Project Grade" >
                            </div>

                </div>

                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <button type="submit" name="update" class="btn btn-primary">Save Data</button>
                            </div>
          </form>

        </div>
      </div>
    </div>

  
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-eMNCOe7tC1doHpGoWe/6oMVemdAVTMs2xqW4mwXrXsW0L84Iytr2wi5v2QjrP/xp" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.min.js" integrity="sha384-cn7l7gDp0eyniUwwAZgrzD06kc/tftFf19TOAs2zVinnD/C7E91j9yyk5//jjpt/" crossorigin="anonymous"></script>

  </body>
</html>
