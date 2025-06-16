<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Navbar</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
    <div class="container-fluid">
      <div class="row">
        <nav class="navbar navbar-expand-lg bgColor mynavbar border-bottom border-body" data-bs-theme="dark">
            <div class="container-fluid  ">
              <div class="row w-100 h-75">
                  <div class="col-lg-4 col-6 mt-1">
                    <img src="images/schoollogo.jpg" alt="School Logo" class="img-fluid" style="height:50px;"/>
                        <span class="navbar-brand mb-0 h1 ">
                            &nbsp;Attendance Management System
                        </span>
                  </div>
                <div class="col-6 col-lg-3 mt-1">
                  <!-- <form class="d-flex ">
                      <div class="input-group input-group-sm text-white bg-light col-6 border-start rounded-start border-end rounded-end">
                          <input class="  form-control form-control-lg bg-light no-border border-end border-0" type="search" placeholder="Search for student or teacher" aria-label="Search">
                          <button class="btn  px-4 " type="submit">
                            <i class="fa-solid fa-magnifying-glass text-secondary fs-5"></i>
                          </button>
                      </div>
                  </form> -->
                </div>
                <!-- session -->
                <div class="col-lg-2 col-12 ms-lg-5">
                  <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <p class="navbar-brand text-white">Session 2025-26</p>
                  </div>
                </div>
                <!-- logout -->
                <div class="col-lg-2 ms-lg-5 col-12 ">
                  <div class="collapse navbar-collapse " id="navbarSupportedContent">
                    <i class="fa-solid fa-right-from-bracket text-light fs-4"></i> &nbsp;
                    <a href="index.php" class=" fs-5 mt-1 link-underline-light link-light link-offset-2 link-underline-opacity-0 link-underline-opacity-100-hover" data-toggle="modal" data-target="#logoutModal">Logout</a>
                  </div>
                </div>

                  <button class="navbar-toggler mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                  </button>
                
                
              </div>
            </div>
        </nav>
      </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>