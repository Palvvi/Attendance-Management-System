<?php
require("Datastore/teacherdatastore.php");


// pagniation



$teachers = TeacherDataStore::getTeacher();
?>
<!doctype html>
<html lang="en">
  <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>HVM Convent School</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        
        <link rel="stylesheet" href="style.css">
        <script type="text/javascript">
          
           

        </script>
  </head>
 
  <body class="customBody">
    
        <div class="container-fluid bg-light border shadow  mb-5  mt-2 bg-body-tertiary rounded">
        <div class="row px-4 pt-4">

            
            <div class=" p-2 col customBody rounded text-primary-emphasis">
                
                <p class=" d-inline h4 text-start">&nbsp;Teacher List</p>
            </div>
            <!-- form for class selection -->
            
                
                
            <!-- table to show student data -->
            
            <div class="row p-4">
                <div class="col">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th scope="col">S.No</th>
                                <th scope="col">Fullname</th>
                                <th scope="col" style="width:10%">DOB</th>
                                <th scope="col">Gender</th>
                                <th scope="col">Mobile No</th>
                                <th scope="col">Class </th>
                                <th scope="col">Section </th>
                                <th scope="col">Address</th>
                                <th scope="col">State</th>
                                <th scope="col">City</th>
                                <th scope="col">Email</th>
                                <th scope="col">Password</th>
                            
                            </tr>
                        </thead>
                        <tbody>

                            <? 
                            $teacher="";
                            $sno=1;
                            
                            foreach($teachers as $teacher) {  
                               
                                ?>
                                <tr>
                                    <td><?=$sno?></td>
                                    <td><?= $teacher["fullname"] ?></td>
                                    <td><?=$teacher["dateofbirth"] ?></td>
                                    <td><?=$teacher["gender"] ?></td>
                                    <td><?=$teacher["mobileno"] ?></td>
                                    <td><?=$teacher["classassign"] ?></td>
                                    <td><?=$teacher["classsection"] ?></td>
                                    <td><?=$teacher["address"] ?></td>
                                    <td><?=$teacher["state"] ?></td>
                                    <td><?=$teacher["city"] ?></td>
                                    <td><?=$teacher["email"] ?></td>
                                    <td><?=$teacher["password"] ?></td>
                                    <?$sno++;?>
                                </tr>
                            <?}?>
                            <form action="editteacher.php" method = "POST" class="editingteacherForm" name="editingteacherForm">
                                <input type="hidden" name="action" value="edit">
                                <input type="hidden" class="editingSeq" name="seq" >
                            </form>
                            <form action="teacherlist.php" method = "POST" class="deleteteacherForm" name="deleteteacherForm">
                                <input type="hidden" name="action" value="delete">
                                <input type="hidden" class="deletingSeq" name="seq" >
                            </form>
                            
                        </tbody>
                    </table>
                                 
                </div>
            </div>


        </div>
               
               

            
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="javascript.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>

