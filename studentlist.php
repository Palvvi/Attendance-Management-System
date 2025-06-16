<?php
session_start();
require "Datastore/studentdatastore.php";


$students = array();
if (isset($_POST["search"])) {
   
    $_SESSION["class"]=$_POST['grade'];
    $_SESSION["sortby"]=$_POST['sortby'];
    $_SESSION["section"]=$_POST['section'];
    $students=StudentDataStore::getstudents($_SESSION["class"],$_SESSION["section"],$_SESSION["sortby"]);
    
}
$isDelete=null;
if(isset($_POST["action"]))
  {
    if($_POST["action"]=="delete")
    {
      $deletestudentseq=$_POST["seq"];

      $isDelete=StudentDataStore::deletestudentbyseq($deletestudentseq);
     
     
    }
  }

if (isset($_REQUEST["backAction"]) || isset($_GET["success"]) || isset($_POST["action"]) || isset($_GET["updated"]) )
{
   
   $students=StudentDataStore::getstudents($_SESSION["class"],$_SESSION["section"],$_SESSION["sortby"]);
}




?>


<!doctype html>
<html lang="en">
  <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Admit Student</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        
        <link rel="stylesheet" href="style.css">
        <script type="text/javascript">
            function editStudent($seq)
            {
                
                $(".editingSeq").val($seq);
                $(".editingStudentForm").submit();
            }
            function deleteStudent($seq)
            {
                var confirmDelete=confirm("Are you sure to Delete ");
                
                if (confirmDelete)
                {
                    $(".deletingSeq").val($seq);
                    $(".deleteStudentForm").submit();
                    
                }
                else{
                    alert("No action taken")
                }
                
            }

        </script>
  </head>
 
  <body class="customBody">
    <?php include 'navbar.php';?>
    <?php include 'menu.php';?>
        <div class="container-sm bg-light border shadow p-3 mb-5  mt-2 bg-body-tertiary rounded">
        <div class="row px-4 pt-4">

            <p id="thank-you-message" style="display:none" class="message">
                Student details has been added succesfully.
            </p>
            <p id="update-message" style="display:none" class="message">
                Student details has been updated succesfully.
            </p>
            <p id="delete-message" style="display:none" class="message">
                Student record has been deleted Successfully.
            </p>
            <div class=" p-2 col customBody rounded text-primary-emphasis">
                <i class=" fs-4 d-inline fa-solid fa-list-ol"></i>
                <p class=" d-inline h4 text-start">&nbsp; Student List</p>
            </div>
            <!-- form for class selection -->
            <div class="row p-4">
                <div class="col">
                    <form class="row g-3 mb-5 text-primary-emphasis fw-medium column-gap-3" name="studentlist " action="studentlist.php" method="post">
                       
                    
                                <div class="col-12 col-lg-3 mt-4">
                                    <label for="grade" class="form-label ">Select Class</label>
                                    <select id="grade" class="form-select " name="grade" >
                                        <option selected >--Select Class/Grade--</option>
                                        
                                        <option value="I" <?php 
                                        if (isset($_POST["search"])|| isset($_REQUEST["backAction"]) || isset($_GET["success"]) ||  $isDelete===true || isset($_GET["updated"])) { 
                                            if($_SESSION["class"]=="I"){ echo "selected";}
                                        }?>>I</option>
                                        <option value="II" <?php 
                                        if (isset($_POST["search"])|| isset($_REQUEST["backAction"]) || isset($_GET["success"]) ||  $isDelete===true || isset($_GET["updated"])) { 
                                            if($_SESSION["class"]=="II"){ echo "selected";}
                                        }?>>II</option>
                                        <option value="III" <?php 
                                        if (isset($_POST["search"])|| isset($_REQUEST["backAction"]) || isset($_GET["success"]) ||  $isDelete===true || isset($_GET["updated"])) { 
                                            if($_SESSION["class"]=="III"){ echo "selected";}
                                        }?>>III</option>
                                        <option value="IV" <?php 
                                        if (isset($_POST["search"])|| isset($_REQUEST["backAction"]) || isset($_GET["success"]) ||  $isDelete===true || isset($_GET["updated"])) { 
                                            if($_SESSION["class"]=="IV"){ echo "selected";}
                                        }?>>IV</option>
                                        <option value="V" <?php 
                                        if (isset($_POST["search"])|| isset($_REQUEST["backAction"]) || isset($_GET["success"]) ||  $isDelete===true || isset($_GET["updated"])) { 
                                            if($_SESSION["class"]=="V"){ echo "selected";}
                                        }?>>V</option>
                                    </select>
                                </div>   

                                <div class="col-12 col-lg-3 mt-4">
                                    <label for="section" class="form-label">Select Section</label>
                                    <select id="section" class="form-select " name="section" >
                                        <option selected value="">--Select Section--</option>
                                        <option value="A" <?php 
                                        if (isset($_POST["search"])|| isset($_REQUEST["backAction"]) || isset($_GET["success"]) ||  $isDelete===true || isset($_GET["updated"])) { 
                                            if($_SESSION["section"]=="A"){ echo "selected";}
                                        }?>>A</option>
                                        <option value="B" <?php
                                        if (isset($_POST["search"])|| isset($_REQUEST["backAction"]) || isset($_GET["success"]) ||  $isDelete===true || isset($_GET["updated"])) { 
                                             if($_SESSION["section"]=="B"){ echo "selected";}
                                        }?>>B</option>
                                        
                                    </select>
                                </div>
                                <div class="col-12 col-lg-3 mt-4 ms-3">
                                    <label for="sortby" class="form-label ">Sort By</label>
                                    <select id="sortby" class="form-select " name="sortby" >
                                        <option selected value="">--Sort By--</option>
                                        <option value="rollNo" <?php 
                                        if (isset($_POST["search"])|| isset($_REQUEST["backAction"]) || isset($_GET["success"]) ||  $isDelete===true || isset($_GET["updated"])) { 
                                            if($_SESSION["sortby"]=="rollNo"){ echo "selected";}
                                        }?>>Rollno</option>
                                        <option value="fullName" <?php 
                                        if (isset($_POST["search"])|| isset($_REQUEST["backAction"]) || isset($_GET["success"]) ||  $isDelete===true || isset($_GET["updated"])) { 
                                            if($_SESSION["sortby"]=="fullName"){ echo "selected";}
                                        }?>>Name</option>
                                        <option value="admissionNumber" <?php 
                                        if (isset($_POST["search"])|| isset($_REQUEST["backAction"]) || isset($_GET["success"]) ||  $isDelete===true || isset($_GET["updated"])) { 
                                            if($_SESSION["sortby"]=="admissionNumber"){ echo "selected";}
                                        }?>>Admission No</option>
                                        <option value="section" <?php
                                        if (isset($_POST["search"])|| isset($_REQUEST["backAction"]) || isset($_GET["success"]) ||  $isDelete===true || isset($_GET["updated"])) {  
                                            if($_SESSION["sortby"]=="section"){ echo "selected";}
                                        }?>>Section</option>
                                    </select>
                                </div>   
                               

                                <div class="col-lg-2 col-3 ms-2 mt-5 pt-1"> 
                                    
                                    <button class="btn  py-2 myButton bgColorforserach " name="search" type="submit">
                                    &nbsp;  Show &nbsp; 
                                    </button>
                                </div>
                               
                    </form>

            </div>
            <!-- table to show student data -->
             <?php
            if (isset($_POST["search"])|| isset($_REQUEST["backAction"]) || isset($_GET["success"]) ||  $isDelete===true || isset($_GET["updated"])) { ?>
            <div class="row mb-2 p-1 bg-warning-subtle rounded text-primary-emphasis">
                <div class="col-3">
                    <span class="fs-5">Class:- <?=strtoupper($_SESSION["class"]) ?></span>
                </div>
                <div class="col-1"></div>
                <div class="col-3 ">
                    <span class="fs-5">
                        Total Student:- <?php echo count($students); ?>
                    </span>
                </div>
                <div class="col-3"></div>
                <div class="col-2">
                    <a href="studentdetails.php" style="text-decoration:none; color:black">
                        <img src="images/detail.png" alt="detail" height="40px">
                        <span class="fw-bold">Detail View</span>
                    </a>
                </div>
            </div>
            
            <div class="row ">
                <div class="col-12">
                    

                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col"></th>
                                <th scope="col">Rollno</th>
                                <th scope="col">Adm No</th>
                                <th scope="col">Fullname</th>
                                <th scope="col">Section</th>
                                <th scope="col">DOB</th>
                                <th scope="col">Gender</th>
                                <th scope="col">Mobile No</th>
                                <th scope="col"></th>
                                <th scope="col"></th>
                                
                            
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
                                    <td><?=$student["dateofbirth"] ?></td>
                                    <td><?=$student["gender"] ?></td>
                                    <td><?=$student["mobileno"] ?></td>
                                    
                                    <td><a href="javascript:editStudent(<?=$student["seq"] ?>)" ><img src="images/edit.png" alt="edit" style="height:30px"/></a></td>
                                   
                                    <td><a href="javascript:deleteStudent(<?=$student["seq"] ?>)" ><img src="images/delete.png" alt="edit" style="height:30px"/></a></td>
                                    
                                    <? $serialNumber++;?>
                                </tr>
                            <?}?>
                            <form action="editstudent.php" method = "POST" class="editingStudentForm" name="editingStudentForm">
                                <input type="hidden" name="action" value="edit">
                                <input type="hidden" class="editingSeq" name="seq" >
                            </form>
                            <form action="studentlist.php" method = "POST" class="deleteStudentForm" name="deleteStudentForm">
                                <input type="hidden" name="action" value="delete">
                                <input type="hidden" class="deletingSeq" name="seq" >
                            </form>
                            
                        </tbody>
                    </table>
                <?php }    ?>
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

<?php

$successMessage = "";
if(isset($_GET["success"]))
{
    if($_GET["success"]==1)
    {?>
        <script>
            $("#thank-you-message").show().delay(10000).fadeOut(500);
        </script>
      <?php
    }
}
if(isset($_GET["updated"]))
{
    if($_GET["updated"]==1)
    {?>
        <script>
            $("#update-message").show().delay(10000).fadeOut(500);
        </script>
      <?php
    }
}

if($isDelete===true)
  {
    
    ?>
      <script>
            $("#delete-message").show().delay(10000).fadeOut(500);
      </script>
      <?php
     $isDelete=false;
     
    
  }

       
?>