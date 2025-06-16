<!doctype html>
<html lang="en">
  <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>HVM Convent School</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        
        <link rel="stylesheet" href="style.css">
       
    
 </style>
    </head>
 
  <body class="customBody">
  <?php include 'navbar.php';?>
  <?php include 'menu.php';?>
    <div class="container-sm bg-light border shadow p-3 mb-5  mt-2 bg-body-tertiary rounded">
        
        <p id="thank-you-message" style="display:none" class="message">
            Student has been added succesfully.
        </p>
        
        



        <!-- Admit student heading -->
        <div class="row px-4 pt-4">
            <div class=" p-2 col customBody rounded text-primary-emphasis">
                <i class=" fs-4 d-inline fa fa-user-plus"></i>
                <p class=" d-inline h4 text-start">&nbsp; Admit Student</p>
            </div>
        </div>
        <!-- buttons for student information and parents information-->
         <div class="row p-4">
            
            <!-- Student information -->
            
              
                    <div class="row border">
                        <div class="col-12 mt-4"> 
                            <p class="text-primary-emphasis fs-5 fw-semibold mb-1">
                                Student Information
                            </p>
                        </div>
                        <hr>
                        <div class="col">
                            <form class="row g-3 mb-5 text-primary-emphasis fw-medium column-gap-3" action="actions/addStudentAction.php" method="post">
                              <input type="hidden" name="seq" value="">
                                <div class="col-12 col-lg-5 mt-4">
                                    <label for="fullName" class="form-label required">Full Name</label>
                                    <input type="text" class="form-control" id="fullName" name="fullName"   required>
                                </div>
                                <div class="col-12 col-lg-5 mt-4 g-3">
                                    <label for="fatherName" class="form-label required">Father's Name</label>
                                    <input type="text" class="form-control" id="fatherName"  name="fatherName" required>
                                      
                                </div>
                                <div class="col-12 col-lg-5 mt-4">
                                  <label for="admissionNumber" class="form-label required">Admission Number</label>
                                  <input type="text" class="form-control" id="admissionNumber" name="admissionNumber"  required>
                                </div>
                               
                                  <div class="col-12 col-lg-5 mt-4">
                                    <label for="rollNo" class="form-label required" >Roll No</label>
                                    <input type="text" class="form-control" id="rollNo" name="rollNo"  required>
                                  </div>
                                <div class="col-12 col-lg-5 mt-4">
                                    <label for="dateOfBirth" class="form-label required">Date of Birth</label>
                                    <input type="date" class="form-control" id="dateOfBirth" name="dateOfBirth"  required>
                                  </div>
                                  <div class="col-lg-9"></div>
                                <div class="col-12 col-lg-5 mt-4">
                                    <label for="grade" class="form-label required">Enrolment in Grade/Class</label>
                                    <select id="grade" class="form-select " name="grade"  required>
                                        <option selected >--Select Class/Grade--</option>
                                        
                                        <option value="I" >I</option>
                                        <option value="II" >II</option>
                                        <option value="III" >III</option>
                                        <option value="IV" >IV</option>
                                        <option value="V" selected>V</option>
                                    </select>
                                </div>
                                <div class="col-12 col-lg-5 mt-4">
                                    <label for="section" class="form-label required">Enrolment in Section</label>
                                    <select id="section" class="form-select " name="section" required >
                                        <option selected >--Select Section--</option>
                                        <option value="A" selected >A</option>
                                        <option value="B" >B</option>
                                        
                                    </select>
                                </div>
                                <div class="col-12 col-lg-5 mt-4">
                                    <label for="gender" class="form-label required" >Gender</label>
                                        <div class="mt-2">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="gender" value="Male" id="studentGender"  required>
                                                <label class="form-check-label" for="studentGender">
                                                Male
                                                </label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input " type="radio" name="gender" value="Female" id="studentGender" required>
                                                <label class="form-check-label " for="studentGender">
                                                Female
                                                </label>
                                            </div>
                                        </div>
                                  </div>
                                
                                
                                  
                                  <div class="col-12 col-lg-5 mt-4">
                                    <label for="mobileNumber" class="form-label required">Mobile No</label>
                                    <input type="text" class="form-control" id="mobileNumber" name="mobileNumber"  required>
                                  </div>
                                  
                                 
                                  
                                  <!-- Permanent Address -->
                                

                                <div class="col-12 col-lg-9 mt-4">
                                    <label for="fullAddress" class="form-label required" >Full Address</label>
                                    <input type="text" class="form-control" id="fullAddress" name="fullAddress"  required>
                                </div>
                               
                                <div class="col-12 col-lg-3 mt-4">
                                  <label for="state" class="form-label required">State</label>
                                  <input type="text" class="form-control" id="state" name="state" Value="Punjab" required>
                                
                                </div>
                                
                                <div class="col-12 col-lg-3 mt-4   city">
                                    <label for="city" class="form-label required">City</label>
                                    <input type="text" class="form-control" id="city" name="city" value="Ludhiana" required>
                                  </div>
                                  <!-- Adhar Card Details -->
                                   <div class="row mt-5">
                                   <div class="col-3"></div>
                                  <div class="col-3"> <button type="submit" class="btn btn-secondary col-10" name="addnewstudent">Add New Student</button></div>
                                  <div class="col-3"> <button type="submit" name="savebutton" value="savebutton" class="btn btn-secondary col-10">Save</button></div>
                                  <div class="col-3"><button type="reset" class="btn btn-secondary col-10">Reset</button></div>
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
