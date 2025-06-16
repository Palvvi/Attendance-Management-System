<?php
require("datastore/attendancedatastore.php");
require_once("datastore/studentdatastore.php");
$classsection=$_GET['class'];
$class = strtok($classsection, '-');
$section=substr($classsection,-1);
$date=$_GET['date'];
$classattendancereport=AttendanceDataStore::getstudentattendance($class,$section,$date)
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
        <style>
            #attendance
            {
                text-align: center;
            }
        </style>
  </head>
 
  <body class="customBody">
   
        <div class="container bg-light border shadow p-3 mb-5  mt-2 bg-body-tertiary rounded">
        <div class="row ">
            <form action="attendancereport.php" method="get" >
            <input type="hidden" class="form-control mt-4" id="attendancedate" name="attendancedate" value="<?=$date?>">
            <button type="submit" name="backAction" class="btn btn-secondary">BACK</button>
          </form>
            
            
            <div class="row p-4">
                <div class="col-2"></div>
                <div class="col-8">
                    <div>
                        <p>Class:- <?echo $class."-".$section ?></p>
                    </div>
                <table class="table  table-bordered" id="attendance">
                    <thead>
                        <tr>
                        <th scope="col" >Rollno</th>
                        <th scope="col" >Name</th>
                        <th scope="col" >Attendance</th>
                     </tr>
                    </thead>
                    <tbody>

                        <? 
                       
                        foreach($classattendancereport as $classreport) {  
                            ?>
                        <tr>
                        <td><?=$classreport["rollno"] ?></td>
                        <td><?=$classreport["fullname"] ?></td>
                        <td><?=$classreport["attendance"] ?></td>
                        
                        
                        
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