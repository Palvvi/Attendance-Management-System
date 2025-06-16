<?php
session_start();
session_destroy();
?>

<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Admit Student</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="timeline.css">
       
    </head>
  <body class="customBody">
    <?php
    include 'navbar.php';
    include 'menu.php';
    ?>
    <div class="container-sm  border shadow p-3 background-image rounded">
        <!-- <div class="row">
            
            <div class="col-12">
                <img src="images/attendance.jpg" alt="Attendance" class="attendance-image img-fluid">
            </div>
        </div> -->
        <div class="row mt-5 ">
        <div class="main-timeline3">
            <div class="pb-5 mb-5">
                <!-- add teacher -->
              <div class="timeline animate__animated animate__fadeInUp "  onclick="window.location.href='add-teacher.php';" style="cursor: pointer;" >
                <div class="timeline-icon "><span class="year"><img src="images/addteachers.png" class="mt-3" alt="add-teacher" height="70px"  width="70px;" style="margin-top:-100px"></span></div>
                   
                    <div class="timeline-content ">
                      <h3 class="title">Add teacher </h3>
                      <p class="description">
                        Add new teachers and assign them roles.         
                      </p>
                    </div>
              </div>
            </div>

              <!-- manage teacher -->
              <div class="timeline animate__animated animate__fadeInUp "  onclick="window.location.href='teacherlist.php';" style="cursor: pointer;" >
                <div class="timeline-icon"><span class="year"><img src="images/teacher.png"  alt="Teacher" height="70px"  width="70px;" style="margin-top:-15px"></span></div>
                    <div class="timeline-content">
                      <h3 class="title">Teacher Details  </h3>
                      <p class="description">
                        Review the details of teachers involved in the school.         
                      </p>
                    </div>
              </div>
              
              <!-- add student -->
              <div class="timeline animate__animated animate__fadeInUp mt-1"  onclick="window.location.href='add-student.php';" style="cursor: pointer;" >
                <div class="timeline-icon"><span class="year"><img src="images/addstudent.png"  alt="add-student" height="70px"  width="70px;" style="margin-top:-15px"></span></div>
                    <div class="timeline-content">
                      <h3 class="title">Add Student </h3>
                      <p class="description">
                        Add the details of new student.         
                      </p>
                    </div>
              </div>

              <!-- class list -->
              <div class="timeline animate__animated animate__fadeInUp mt-1"  onclick="window.location.href='studentlist.php';" style="cursor: pointer;" >
                <div class="timeline-icon"><span class="year"><img src="images/classlist.png"  alt="student" height="70px"  width="70px;" style="margin-top:-15px"></span></div>
                    <div class="timeline-content">
                      <h3 class="title">Class Details </h3>
                      <p class="description">
                        Review the list of students in classes and make changes in the details          
                      </p>
                    </div>
              </div>

              <!-- take attendance -->
              <div class="timeline animate__animated animate__fadeInUp mt-1"  onclick="window.location.href='attendance.php';" style="cursor: pointer;" >
                <div class="timeline-icon"><span class="year"><img src="images/takeattendance.png"  alt="attendance" height="70px"  width="70px;" style="margin-top:-15px"></span></div>
                    <div class="timeline-content">
                      <h3 class="title">Take Attendance </h3>
                      <p class="description">
                        Mark the attendance of students on daily basis          
                      </p>
                    </div>
              </div>

              <!-- attedance report -->
              <div class="timeline animate__animated animate__fadeInUp mt-1"  onclick="window.location.href='attendancereport.php';" style="cursor: pointer;" >
                <div class="timeline-icon"><span class="year"><img src="images/report.png"  alt="attendance-report" height="70px"  width="70px;" style="margin-top:-15px"></span></div>
                    <div class="timeline-content">
                      <h3 class="title">Attendance Report </h3>
                      <p class="description">
                        View the different statistics of attendance          
                      </p>
                    </div>
              </div>
              
          
         </div>
















            

    </div>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="javascript.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>
<script>
            $(document).ready(function(){

                $(".menurow").hide();


            });
            </script>