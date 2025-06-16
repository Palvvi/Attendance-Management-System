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
        <div class="row">
          <!-- School logo according to different breakpoints -->
            <span class="col-lg-4 col-lg-4 col-md-4 d-none d-sm-none d-lg-none d-md-inline p-0">
              <img src="images/schoollogo.jpg" alt="School Logo" class="img-fluid" style="height:100px;">
            </span>
            <span class=" col-lg-4 col-lg-4 col-md-4 col-2 d-none  d-lg-inline p-0 mt-2">
              <img src="images/schoollogo.jpg" alt="School Logo" class="img-fluid" style="height:160px;">
            </span>
            <div class="col-lg-4 col-lg-4 col-md-4 col-4 d-md-none d-lg-none d-sm-inline p-0 mt-2">
              <img src="images/schoollogo.jpg" alt="School Logo" class="img-fluid" style="height:80px;">
            </div>
            <div class="col-3"></div>
            <div class="col-1 p-0">
              <i class="fa-solid fa-circle-user fs-1 mt-5 ms-xl-5 ms-md-2 ms-sm-1 ms-0 "></i>
            </div>
            <div class="col-3 text-primary-emphasis p-0">
              <p class="fw-bold m-0 mt-5">School Admin</p>
              <p >Designation : Administrator</p>
            </div>
        </div>
        <div class="row mt-3">
            <hr>
            <div class="col-xl-5 col-1"></div>
            <div class="col-xl-7 col-11 ">
              <form action="#">
              <div class="row mb-3">
                <label for="search" class="col-lg-4 col-md-4 col-5 col-form-label p-0 text-end mt-2">Menu Option Lookup</label>
                <div class=" col-lg-8 col-md-7 col-6">
                  <input type="text" class="form-control" id="search" placeholder="Type here to find menu options">
                </div>
              </div>
              </form>
            </div>
        </div>
        <!-- Menu options -->

        <div class="d-grid gap-2 col-12 mx-auto ">
            <button class="btn d-lg-none myButton bgColor myLink" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasResponsive" aria-controls="offcanvasResponsive">Menu</button>
        </div>
          <div class=" d-none d-lg-block">
              <div class="row d-none d-lg-block ">
                  <div class="btn-group  btn-group-sm " role="group" aria-label="Large button group">
                    <button type="button" class="btn myButton bgColor"><a href="#" class=" fs-5 myLink link-underline-light  link-offset-2 link-underline-opacity-0 ">HOME</a></button>
                    <button type="button" class="btn   myButton bgColor"><a href="#" class=" fs-5 myLink link-underline-light  link-offset-2 link-underline-opacity-0">CLASS DETAILS </a></button>
                    <button type="button" class="btn myButton bgColor"><a href="#" class="fs-5 myLink link-underline-light  link-offset-2 link-underline-opacity-0">TEACHER DETAILS</a></button>
                    <button type="button" class="btn myButton bgColor"><a href="#" class="fs-5 myLink link-underline-light  link-offset-2 link-underline-opacity-0 ">ATTENDANCE</a></button>
                  </div>
            </div>  
          </div>

          <!-- Menu Options below large screen -->
          <div class="offcanvas-lg offcanvas-end" tabindex="-1" id="offcanvasResponsive" aria-labelledby="offcanvasResponsiveLabel">
            <div class="offcanvas-header">
                <button type="button" class="offcanvas-title " id="offcanvasResponsiveLabel">Menu</button>
                <button type="button" class="btn-close" data-bs-dismiss="offcanvas" data-bs-target="#offcanvasResponsive" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body">
            <div class="btn-group  btn-group-sm " role="group" aria-label="Large button group">
              <ul type="none" class="gap-2">
                  <li> <button type="button" class="btn"><a href="#" class=" fs-5 myLink link-underline-light  link-offset-2 link-underline-opacity-0 ">HOME</a></button></li>
                  <li>  <button type="button" class="btn  "><a href="#" class=" fs-5 myLink link-underline-light  link-offset-2 link-underline-opacity-0">CLASS DETAILS </a></button></li>
                  <li> <button type="button" class="btn"><a href="#" class="fs-5 myLink link-underline-light  link-offset-2 link-underline-opacity-0">TEACHER DETAILS</a></button></li>
                  <li> <button type="button" class="btn"><a href="#" class="fs-5 myLink link-underline-light  link-offset-2 link-underline-opacity-0 ">ATTENDANCE</a></button></li>
              </ul>
            </div>
            </div>
          </div>
        
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    </div>
  </body>
</html>