<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Home Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  </head>
  <body>

  
      <!-- Header starts here -->
      <header >
          <!-- logo starts here -->
          <div class="row p-3  bg-secondary bg-gradient ">
                <div class="col-6 ">
                    <img src="images/logo.png" alt="logo" class="image ms-5">
                </div>
                <div class="col-3"></div>
                <div class="col-2">
                    <a href="https://www.facebook.com/hvmludhiana" target="_blank" > 
                      <img src="images/facebook.png" alt="Facebook" class="mt-3">
                    </a>
                    <a href="https://www.instagram.com/hvmldh/" target="_blank" > 
                      <img src="images/instagram.png"  alt="Instagram" class="mt-3">
                    </a>
                    <a href="https://www.youtube.com/channel/UClWtmVXMpiAjqqMnF2zLALw" target="_blank" > 
                      <img src="images/youtube.png"  alt="Youtube" class="mt-3">
                    </a>
                </div>
                
          </div>
          <!-- logo ends here -->
           <!-- Main menu starts here -->
          <div class="row  navstyle  ">
              <div class="main-menu footer-color bg-opacity-75 fixeme">
              <nav class="navbar navbar-expand-lg p-0 ">
                <div class="container-fluid">
                  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                  </button>
                  <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-5 gap-2">
                        <li class="nav-item">
                          <a class="nav-link active link-light " aria-current="page" href="index.php">HOME</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link  link-light ms-2" aria-current="page" href="kindergarten.php">KINDERGARTEN</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link  link-light ms-2" aria-current="page" href="gallery.php">GALLERY</a>
                        </li>

                      <li class="nav-item dropdown dropdownStyle ">
                          <a class="nav-link dropdown-toggle link-light ms-2" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            FACULTIES & FACILITIES
                          </a>
                          <ul class="dropdown-menu  dropdown-menu-dark">
                            <li><a class="dropdown-item" href="admission-rules.php">ADMISSION RULE </a></li>
                            <li><a class="dropdown-item" href="fee-structure.php">FEE STRUCTURE</a></li>
                            <li><a class="dropdown-item" href="teachers.php">TEACHERS</a></li>
                            <li><a class="dropdown-item" href="strength.php">STUDENT STRENGTH</a></li>
                            <li><a class="dropdown-item" href="streams.php">STREAMS OFFERED</a></li>
                            <li><a class="dropdown-item" href="infrastructure.php">OUR INFRASTRUCTURE</a></li>
                          </ul>
                      </li>
               
                      <li class="nav-item">
                          <a class="nav-link  link-light ms-2" aria-current="page" href="contact.php">CONTACT US</a>
                        </li>
                        <li class="nav-item dropdown dropdownStyle ">
                          <a class="nav-link dropdown-toggle link-light ms-2" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            ABOUT US
                          </a>
                          <ul class="dropdown-menu  forward dropdown-menu-dark">
                            <li><a class="dropdown-item" href="vision.php">VISION, MISSION, MOTTO </a></li>
                            <li><a class="dropdown-item" href="management.php">HVM MANAGEMENT</a></li>
                          </ul>
                      </li>
                       
                      
                    </ul>
                    
                  </div>
                  <div class="col-1 ">
                    <i class="fa-solid fa-right-from-bracket text-light fs-5"></i> &nbsp;
                    <a href="login.php" class=" fs-5 mt-1 link-underline-light link-light link-offset-2 link-underline-opacity-0 link-underline-opacity-100-hover" data-toggle="modal" data-target="#logoutModal">Login</a>
                </div>
                </div>
              </nav>
              </div>
            </div>
            <!-- main menu ends here -->
          </header>
          <!-- header ends here -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>