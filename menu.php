<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>School Pad</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>
  
  <body class="customBody">
    <div class="container-sm  bg-light border shadow p-3  bg-body-tertiary rounded">
        <div class="row p-0">
          <!-- menu icon -->
          <div class="col-xl-1 col-1 mt-1"> 
                <button class="btn   bgColor myLink" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasExample" aria-controls="offcanvasExample">
                      <i class="fa-solid fa-bars"></i>
                </button>
                  
                  <div class="offcanvas  offcanvas-start" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">
                    <div class="offcanvas-header">
                     
                      <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body">
                      <div class="wrapper" tabindex="0">
                          <div class="btn-group  btn-group-sm " role="group" aria-label="Large button group">
                              <ul  class="gap-2 ">
                                  <li class="menu-item"> <button type="button" class="btn"><a href="allmodule.php" class=" link-body-emphasis fs-5  link-underline-light  link-offset-2 link-underline-opacity-0 ">Home</a></button></li>
                                  <li class="menu-item">  <button type="button" class="btn  "><a href="studentlist.php" class=" link-body-emphasis fs-5  link-underline-light  link-offset-2 link-underline-opacity-0">Class Details </a></button></li>
                                  <li class="menu-item"> <button type="button" class="btn"><a href="teacherlist.php" class=" link-body-emphasis  fs-5  link-underline-light  link-offset-2 link-underline-opacity-0">Teacher Details</a></button></li>
                                  <li class="menu-item"> <button type="button" class="btn"><a href="attendance.php" class=" link-body-emphasis  fs-5  link-underline-light  link-offset-2 link-underline-opacity-0 ">Attendance</a></button></li>
                                  <li class="menu-item"> <button type="button" class="btn"><a href="attendancereport.php" class=" link-body-emphasis  fs-5  link-underline-light  link-offset-2 link-underline-opacity-0 ">Attendance Report</a></button></li>
                                  <li class="menu-item"> <button type="button" class="btn"><a href="add-student.php" class=" link-body-emphasis  fs-5  link-underline-light  link-offset-2 link-underline-opacity-0 ">Add Student</a></button></li>
                                  <li class="menu-item"> <button type="button" class="btn"><a href="add-teacher.php" class=" link-body-emphasis  fs-5  link-underline-light  link-offset-2 link-underline-opacity-0 ">Add Teacher</a></button></li>
                                </ul>
                          </div>
                      </div>
                    </div>
                  </div>
            </div>


        
            <div class="col-6 col-sm-6"></div>
            <div class="col-1 col-sm-1 p-0">
              <i class="fa-solid fa-circle-user fs-1 mt-2 ms-xl-2 ms-md-2 ms-sm-1 ms-0 "></i>
            </div>
          
            <div class="col-4 col-sm-3 text-primary-emphasis p-0">
              <p class="fw-bold m-0 mt-2">School Admin</p>
              <p >Designation : Administrator</p>
            </div>
           
        </div>
        <div class="row menurow">
          <div class=" d-none d-lg-block">
              <div class="row d-none d-lg-block ">
                  <div class="btn-group  btn-group-sm gap-1 " role="group" aria-label="Large button group">
                    <button type="button" class="btn myButton bgColor"><a href="allmodule.php" class=" fs-5 myLink link-underline-light  link-offset-2 link-underline-opacity-0 ">Home</a></button>
                    <button type="button" class="btn   myButton bgColor"><a href="studentlist.php" class=" fs-5 myLink link-underline-light  link-offset-2 link-underline-opacity-0">Class Details </a></button>
                    <button type="button" class="btn myButton bgColor"><a href="teacherlist.php" class="fs-5 myLink link-underline-light  link-offset-2 link-underline-opacity-0">Teacher Details</a></button>
                    <button type="button" class="btn myButton bgColor"><a href="attendance.php" class="fs-5 myLink link-underline-light  link-offset-2 link-underline-opacity-0 ">Attendance</a></button>
                    <button type="button" class="btn myButton bgColor"><a href="attendancereport.php" class="fs-5 myLink link-underline-light  link-offset-2 link-underline-opacity-0 ">Attendance Report</a></button>
                  </div>
            </div>  
          </div>
        </div>
        
        
        
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    </div>
  </body>
</html>