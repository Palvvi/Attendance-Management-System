<?php

require "Datastore/teacherdatastore.php";
$editingTeacher=array();
$editingTeacher['seq']=null;
$editingTeacher['fullname']=null;
$editingTeacher['fathername']=null;
$editingTeacher['dateofbirth']=null;
$editingTeacher['gender']=null;
$editingTeacher['mobilenumber']=null;
$editingTeacher['fulladdress']=null;
$editingTeacher['state']=null;
$editingTeacher['city']=null;
$editingTeacher['email']=null;
$editingTeacher['password']=null;
$editingTeacher['class']=null;
$editingTeacher['section']=null;
  if(isset($_POST["action"]))
  {
    if($_POST["action"]=="edit")
    {
      $editingteacherseq=$_POST["seq"];
      $editingTeacher=TeacherDataStore::getteacherbyseq($editingteacherseq);
    }
  }


?><!doctype html>
<html lang="en">
  <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>HVM Convent School</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        
        <link rel="stylesheet" href="style.css">
       
  </head>
 
  <body class="customBody">
    <?php include 'navbar.php';?>
    <?php include 'menu.php';?>
    <div class="container-sm bg-light border shadow p-3 mb-5  mt-2 bg-body-tertiary rounded">
       
        <!-- Update student heading -->
        <div class="row px-4 pt-4">
            <div class=" p-2 col customBody rounded text-primary-emphasis">
                <img src="images/update.png" alt="update" height="40px">
                <p class=" d-inline h4 text-start">&nbsp; Update Teacher</p>
            </div>
        </div>
        <!-- buttons for student information and parents information-->
         <div class="row p-4">
            
            <!-- Student information -->
            
              
                    <div class="row border">
                        <div class="col-12 mt-4"> 
                            <p class="text-primary-emphasis fs-5 fw-semibold mb-1">
                                Teacher Information
                            </p>
                        </div>
                        <hr>
                        <div class="col">
                            <form class="row g-3 mb-5 text-primary-emphasis fw-medium column-gap-3" action="actions/addTeacherAction.php" method="post">
                              <input type="hidden" name="seq" value="<?=$editingTeacher['seq']?>">
                                <div class="col-12 col-lg-5 mt-4">
                                    <label for="fullname" class="form-label required">Full Name</label>
                                    <input type="text" class="form-control" id="fullname" name="fullname" value="<?=$editingTeacher['fullname']?>"   required>
                                </div>
                                <div class="col-12 col-lg-5 mt-4 g-3">
                                    <label for="fathername" class="form-label required">Father's Name</label>
                                    <input type="text" class="form-control" id="fathername"  name="fathername" value="<?=$editingTeacher['fathername']?>" required>
                                      
                                </div>
                                <div class="col-12 col-lg-5 mt-4">
                                    <label for="dateofbirth" class="form-label required">Date of Birth</label>
                                    <input type="date" class="form-control" id="dateofbirth" name="dateofbirth" value="<?=$editingTeacher['dateofbirth']?>" required>
                                </div>
                                <div class="col-12 col-lg-5 mt-4">
                                    <label for="gender" class="form-label required" >Gender</label>
                                        <div class="mt-2">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="gender" value="Male" id="teachergender" <?php if($editingTeacher['gender']=='Male') {echo 'checked'; }   ?> required>
                                                <label class="form-check-label" for="teachergender">
                                                Male
                                                </label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input " type="radio" name="gender" value="Female" id="teachergender"  <?php if($editingTeacher['gender']=='Female') {echo 'checked'; }   ?> required>
                                                <label class="form-check-label " for="teachergender">
                                                Female
                                                </label>
                                            </div>
                                        </div>
                                  </div>
                                  <div class="col-12 col-lg-5 mt-4">
                                    <label for="mobilenumber" class="form-label required">Mobile No</label>
                                    <input type="text" class="form-control" id="mobilenumber" name="mobilenumber"  value="<?=$editingTeacher['mobileno']?>"  required>
                                  </div>
                                  <div class="col-12 mt-4"> 
                                    <p class="text-primary-emphasis fs-6 fw-semibold mb-1">
                                        Address Details
                                    </p>
                                </div>
                                <hr style="margin-top:0px">
                                  <div class="col-12 col-lg-9 mt-2">
                                    <label for="fulladdress" class="form-label required" >Full Address</label>
                                    <input type="text" class="form-control" id="fulladdress" name="fulladdress" value="<?=$editingTeacher['address']?>"   required>
                                </div>
                               
                                <div class="col-12 col-lg-3 mt-4">
                                  <label for="state" class="form-label required">State</label>
                                  <input type="text" class="form-control" id="state" name="state" value="<?=$editingTeacher['state']?>"  required>
                                
                                </div>
                                <div class="col-12 col-lg-3 mt-4   city">
                                    <label for="city" class="form-label required">City</label>
                                    <input type="text" class="form-control" id="city" name="city" value="<?=$editingTeacher['city']?>"   required>
                                  </div>
                                <div class="col-12 mt-4"> 
                                    <p class="text-primary-emphasis fs-6 fw-semibold mb-1">
                                        Login Details
                                    </p>
                                </div>
                                <hr style="margin-top:0px">
                                
                                
                                  <div class="col-12 col-lg-5 mt-2">
                                  <label for="email" class="form-label required">Email</label>
                                  <input type="email" class="form-control" id="email" name="email" value="<?=$editingTeacher['email']?>"  required>
                                </div>
                                <div class="col-12 col-lg-5 mt-2">
                                  <label for="password" class="form-label required">Password</label>
                                  <input type="password" class="form-control" id="password" name="password" value="<?=$editingTeacher['password']?>"   required>
                                </div>
                                <div class="col-12 mt-4"> 
                                    <p class="text-primary-emphasis fs-6 fw-semibold mb-1">
                                        Class Assigned
                                    </p>
                                </div>
                                <hr style="margin-top:0px">

                                <div class="col-12 col-lg-5 mt-4">
                                    <label for="class" class="form-label required">Class Assign</label>
                                    <select id="class" class="form-select " name="class"  required>
                                        <option selected >--Select Class/Grade--</option>
                                        <option value="Nursery" <?php if($editingTeacher['classassign']=='Nursery') {echo 'selected'; }   ?> >Nursery</option>
                                        <option value="LKG"  <?php if($editingTeacher['classassign']=='LKG') {echo 'selected'; }   ?> >L.K.G</option>
                                        <option value="UKG" <?php if($editingTeacher['classassign']=='UKG') {echo 'selected'; }   ?>  >U.K.G</option>
                                        <option value="I"  <?php if($editingTeacher['classassign']=='I') {echo 'selected'; }   ?> >I</option>
                                        <option value="II" <?php if($editingTeacher['classassign']=='II') {echo 'selected'; }   ?> >II</option>
                                        <option value="III" <?php if($editingTeacher['classassign']=='III') {echo 'selected'; }   ?> >III</option>
                                        <option value="IV" <?php if($editingTeacher['classassign']=='IV') {echo 'selected'; }   ?> >IV</option>
                                        <option value="V" <?php if($editingTeacher['classassign']=='V') {echo 'selected'; }   ?> >V</option>
                                    </select>
                                </div>
                               
                                  
                                
                                <div class="col-12 col-lg-5 mt-4">
                                    <label for="section" class="form-label required">Section Assign</label>
                                    <select id="section" class="form-select " name="section" required >
                                        <option  >--Select Section--</option>
                                        <option value="A" <?php if($editingTeacher['classsection']=='A') {echo 'selected'; }   ?> >A</option>
                                        <option value="B" <?php if($editingTeacher['classsection']=='B') {echo 'selected'; }   ?> >B</option>
                                        
                                    </select>
                                </div>
                                
                                
                                
                                  
                                  
                                 
                                  
                                  <!-- Permanent Address -->
                                

                                
                                  <!-- Adhar Card Details -->
                                   <div class="row mt-5">
                                    <div class="col-5"></div>
                                    
                                    <div class="col-3"> <button type="submit" name="saveButton" value="saveButton" class="btn btn-success col-10 saveButton" >Update</button></div>
                                    
                                  </div>
                              </form>
                        </div>
                    
                    </div>
                </div>
                <!-- parents information -->
               

            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="javascript.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>
<?php
// require("/actions/addStudentAction.php") ;
// require("Datastore/studentdatastore.php");
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

    $_GET["success"]==0;
   
}
?>
 
