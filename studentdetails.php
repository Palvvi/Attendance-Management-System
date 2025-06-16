<?php
session_start();
require "Datastore/studentdatastore.php";
$students = array();

  
   $students=StudentDataStore::getstudents($_SESSION['class'],$_SESSION['section'],$_SESSION['sortby']);


?>



<!doctype html>
<html lang="en">
  <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>HVM COnvent School</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        
        <link rel="stylesheet" href="style.css">
  </head>
 
  <body class="customBody">
   
        <div class="container-fluid bg-light border shadow p-3 mb-5  mt-2 bg-body-tertiary rounded">
        <div class="row ">
            <form action="studentlist.php" method="post" >
                <button type="submit" name="backAction" class="btn btn-secondary">BACK</button>
          </form>
            
            
            <div class="row p-4">
                <div class="col">
                    <div>
                        <p>Class:- <?=strtoupper( $_SESSION['class']) ?></p>
                    </div>
                <table class="table  table-bordered">
                    <thead>
                        <tr>
                        <th scope="col"></th>
                        <th scope="col">Rollno</th>
                        <th scope="col">Adm No</th>
                        <th scope="col">Fullname</th>
                        <th scope="col">Section</th>
                        <th scope="col">Father's Name</th>
                        <th scope="col">DOB</th>
                        <th scope="col">Gender</th>
                        <th scope="col">Mobile No</th>
                        <th scope="col">Address</th>
                        <th scope="col">State</th>
                        <th scope="col">City</th>
                        
                        </tr>
                    </thead>
                    <tbody>

                        <? 
                        $student="";
                        $serialNumber=1; 
                        foreach($students as $student) {  
                            ?>
                        <tr>
                        <td><? echo $serialNumber   ?></td>
                        <td><?= $student["rollno"] ?></td>
                        <td><?=$student["admissionnumber"] ?></td>
                        <td><?=$student["fullname"] ?></td>
                        <td><?=$student["section"] ?></td>
                        <td><?=$student["fathername"] ?></td>
                        <td><?=$student["dateofbirth"] ?></td>
                        <td><?=$student["gender"] ?></td>
                        <td><?=$student["mobileno"] ?></td>
                        <td><?=$student["address"] ?></td>
                        <td><?=$student["state"] ?></td>
                        <td><?=$student["city"] ?></td>
                        
                        
                           <? $serialNumber++;?>
                        </tr>
                        <?}?>
                        
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