<?php
session_start();
require_once("Datastore/studentdatastore.php");
require_once("Datastore/teacherdatastore.php");
require_once("Datastore/attendancedatastore.php");
$currentDate = date('Y-m-d');
$students = array();
$getattendance=array();
if (isset($_POST["attendance"])) {
   
    $_SESSION["attclass"]=$_POST['class'];
    $_SESSION["attsection"]=$_POST['section'];
    $_SESSION["attdate"]=$_POST['attendancedate'];
    $students=StudentDataStore::getStudentsForAttendance($_SESSION["attclass"],$_SESSION["attsection"]);
    
}
if(isset($_REQUEST["success"])   )
{
    $students=StudentDataStore::getStudentsForAttendance($_SESSION["attclass"],$_SESSION["attsection"]);
}
?>
<!doctype html>
<html lang="en">
  <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>HVM Convent School</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
       <style>
            

        button {
            
            position: relative;
            padding: 5px;
            font-size: 16px;
            font-weight: 600;
            border: none;
            border-radius: 6px;
            cursor: pointer;
            outline: none;
            overflow: hidden;
            transition: all 0.3s ease;
        }
        .btn-outline {
            background-color: transparent;
            color: rgb(105, 172, 206);
            border: 2px solid rgb(154, 197, 218);
            border-radius: 7px;
            transition: all 0.1s;
            z-index: 1;
        }

        .btn-outline::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 0%;
            height: 100%;
            background-color: #EBD8D0;
            transition: all 0.5s;
            z-index: -1;
        }

        
        </style>
             
        
        <link rel="stylesheet" href="style.css">
        
  </head>
 
  <body class="customBody">
    <?php include 'navbar.php';?>
    <?php include 'menu.php';?>
        <div class="container-sm bg-light border shadow p-3 mb-5  mt-2 bg-body-tertiary rounded">
        <div class="row px-4 pt-2">

      
            <div class=" p-2 col  rounded text-primary-emphasis customBody" >
                <img src="images/attendance.png" alt="attendance" height="50px">
                <p class=" d-inline h4 text-start">&nbsp; Mark Attendance</p>
            </div>
            <!-- form for class selection -->
            <div class="row p-4">
                <div class="col">
                    <form class="row g-3 mb-5 text-primary-emphasis fw-medium column-gap-3" name="studentlist " action="#
                    " method="post">
                                <div class="col-12 col-lg-3 mt-4">
                                    <label for="class" class="form-label ">Select Class</label>
                                    <select id="class" class="form-select " name="class" >
                                        <option selected >--Select Class/Grade--</option>
                                       
                                        <option value="I" <?php
                                        if (isset($_POST["attendance"])||isset($_REQUEST["success"])) { 
                                        if($_SESSION["attclass"]=="I")
                                        { echo "selected";}
                                        }?>>I</option>
                                        <option value="II" <?php
                                        if (isset($_POST["attendance"])||isset($_REQUEST["success"])) { 
                                        if($_SESSION["attclass"]=="II")
                                        { echo "selected";}
                                        }?>>II</option>
                                        <option value="III" <?php
                                        if (isset($_POST["attendance"])||isset($_REQUEST["success"])) { 
                                        if($_SESSION["attclass"]=="III")
                                        { echo "selected";}
                                        }?>>III</option>
                                        <option value="IV" 
                                        <?php
                                        if (isset($_POST["attendance"])||isset($_REQUEST["success"])) { 
                                        if($_SESSION["attclass"]=="IV")
                                        { echo "selected";}
                                        }?>>IV</option>
                                        <option value="V" <?php
                                        if (isset($_POST["attendance"])||isset($_REQUEST["success"])) { 
                                        if($_SESSION["attclass"]=="V")
                                        { echo "selected";}
                                        }?>>V</option>
                                    </select>
                                </div>   

                                <div class="col-12 col-lg-3 mt-4">
                                    <label for="section" class="form-label">Select Section</label>
                                    <select id="section" class="form-select " name="section" required>
                                        <option selected value="">--Select Section--</option>
                                        <option value="A" <?php
                                        if (isset($_POST["attendance"])||isset($_REQUEST["success"])) { 
                                        if($_SESSION["attsection"]=="A")
                                        { echo "selected";}
                                        }?>>A</option>
                                        <option value="B" <?php
                                        if (isset($_POST["attendance"])||isset($_REQUEST["success"])) { 
                                        if($_SESSION["attsection"]=="B")
                                        { echo "selected";}
                                        }?>>B</option>
                                        
                                    </select>
                                </div>
                                <div class="col-12 col-lg-3 mt-4 ms-3">
                                    <label for="attendancedate" class="form-label ">Select Date</label>
                                    <input type="date" class="form-control" id="attendancedate" name="attendancedate" value="<?=$currentDate;?>" required>
                                </div>   
                               

                                <div class="col-lg-2 col-3 ms-2 mt-5 pt-1 btn-container"> 
                               
                                    <button class=" btn-outline " name="attendance" type="submit">
                                       Take Attendance
                                    </button>
                                </div>
                               
                    </form>

            </div>
            <p id="attendance-message" style="display:none" class="message">
                    Class Attendance has been marked 
            </p>
        </div>
             <!-- table to show student data -->
             <?php
            if (isset($_POST["attendance"]) || isset($_GET["success"]) || isset($_REQUEST["attendancesubmit"])) { ?>
            <div class="row mb-2 p-1 bg-warning-subtle rounded text-primary-emphasis">
                <div class="col-3">
                    <span class="fs-5">Class:- <?=strtoupper($_SESSION["attclass"]) ?></span>
                </div>
            </div>
            
            <div class="row ">
                <div class="col-12">
                <form class="row  mb-5"  name="attedance " action="actions/attendanceAction.php" method="get">

                    <table class="table">
                        <thead>
                            <tr>
                                <th></th>
                                <th scope="col">Rollno</th>
                                <th scope="col">Adm No</th>
                                <th scope="col">Fullname</th>
                                <th scope="col">Section</th>
                                <th scope="col">Attendance</th>
                                <th></th>
                            
                            </tr>
                        </thead>
                        <tbody>

                            <? 
                            $student="";
                            $_SESSION["serialNumber"]=1; 
                            $attendancedetail=array();
                            foreach($students as $student) {  
                               
                                ?>
                                <tr>
                                    <td></td>
                                    <td><?= $student["rollno"] ?></td>
                                    <td><?=$student["admissionnumber"] ?></td>
                                    <td><?=$student["fullname"] ?></td>
                                    <td><?=$student["section"] ?></td>
                                    <td><select id="markattendance" class="form-select "  name="markattendance<?= $_SESSION["serialNumber"];?>"  style="width:auto;" required>
                                        <?php $getattendance=AttendanceDataStore::getAttendance($student["seq"],$_SESSION["attdate"]);
                                       if($getattendance)
                                        {
                                            if($getattendance['studentseq']==$student['seq'])
                                            {
                                                $a=$getattendance['seq'];
                                                echo $a;
                                            }
                                        }
                                        else
                                        {
                                            $a="";
                                        }
                                        
                                        ?>
                                        <option value="P<?= $student["rollno"] ?>" selected <?php 
                                        
                                            
                                            if($getattendance)
                                            {
                                            if($getattendance['studentseq']==$student['seq'])
                                            {
                                               if( $getattendance['attendance']=='P') echo "selected";
                                            }
                                        }
                                        ?>>Present</option>
                                        <option value="A<?= $student["rollno"] ?>" 
                                        <?php 
                                        
                                          
                                            if($getattendance)
                                            {
                                            if($getattendance['studentseq']==$student['seq'])
                                            {
                                               if( $getattendance['attendance']=='A') echo "selected";
                                            }
                                        }
                                        ?>>Absent</option>
                                        <option value="L<?= $student["rollno"] ?>" 
                                        <?php 
                                        
                                           
                                            if($getattendance)
                                            {
                                            if($getattendance['studentseq']==$student['seq'])
                                            {
                                               if( $getattendance['attendance']=='L') echo "selected";
                                            }
                                        }
                                        ?>>Leave</option>
                                        
                                    </select></td>
                                   <td>
                                    <input type="hidden" name="seq<?= $_SESSION["serialNumber"];?>" value="<?=$a?>"></td>
                                   <td></td>
                                    
                                    <? $_SESSION["serialNumber"]++;?>
                                </tr>
                            <?}?>
                            
                            
                        </tbody>
                    </table>
                    <button type="submit" name="attendancesubmit"> Submit Attendance</button>
                <?php }    ?>
                
              </form>
                </div>
            </div>  
               

            
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="javascript.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>

<?php

    if($getattendance)
    
    {?>
    <script>
    $("#attendance-message").show().delay(5000).fadeOut(500);
</script>
  <?php }

?>
