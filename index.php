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
  <body class="bodyColor">
    <div class="container-fluid">
      <!-- Header starts here -->
      <?php  include "main-navbar.php" ?>
           <!-- slider starts here -->
          <div class="row  slider p-0">
          <div id="carouselExampleInterval" class="carousel slide p-0" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active" data-bs-interval="5000">
                  <img src="images/student1.jpg" class="d-block w-100" alt="School images">
                  <div class="carousel-caption d-none d-md-block bg-secondary bg-opacity-75 text-light caption">
                    <h1 class="fw-bolder">Welcome to HVM Convent Sr. Sec. School</h1>
                    <p class="fw-bold fs-5">Our aim is that students work with enthusiasm and interest<br>
                    because God always blesses and helps those who help themselves.</p>
                  </div>
                </div>
                <div class="carousel-item" data-bs-interval="4000">
                  <img src="images/student2.jpg" class="d-block w-100" alt="School images">
                  <div class="carousel-caption d-none d-md-block bg-secondary bg-opacity-75 text-light ">
                    <h1 class="fw-bolder">Welcome to HVM Convent Sr. Sec. School</h1>
                    <p class="fw-bold fs-5">Learn as much as you can while you are young, since life becomes too busy later.</p>
                  </div>
                </div>
                <div class="carousel-item" data-bs-interval="4000">
                  <img src="images/student3.jpg" class="d-block w-100" alt="School images">
                  <div class="carousel-caption d-none d-md-block bg-secondary bg-opacity-75 text-light ">
                    <h1 class="fw-bolder">Welcome to HVM Convent Sr. Sec. School</h1>
                    <p class="fw-bold fs-5">Education is our passport to the future, for tomorrow belongs to the people who prepare for it today.</p>
                  </div>
                </div>
              </div>
              <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
              </button>
              <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
              </button>
              
          </div>
          </div>
          <!-- slider ends here -->
           <!-- welcome section starts here -->
            <div class="row bg-light">
                <div class="col-1"></div>
                <div class="col-4 mt-5 pb-5 ">
                    <div class="display-6 fw-bolder ">
                      Welcome To HVM &nbsp; &nbsp;
                      <i class="fa-solid fa-school"></i>
                      <hr>
                    </div>
                    <div class="mt-3 text-body-tertiary">
                      <p>
                        HVM Convent School is promoted under the umbrella of Harsh Education Society (Regd.). President Mr. D.P. Sharma and Mrs. Meena Sharma, renowned educationists and visionaries fulfilled the dream of starting a CBSE school on April 1, 2009 with the vision and mission for the holistic development of each child through quality education.<br>
                        <br>
                        It came into existence in April 2009 with classes from Nursery to VIII. Now it takes pride in the galaxy of 2000 students up to XII. It is located on a sprawling 2 (two) acre area. The infrastructural facilities of the school are excellent and are equipped with modern educational and allied amenities.
                      </p>
                    </div>

                </div>
                <div class="col-1"></div>
                <div class="col-4">
                    <div class=" border border-3 border-danger mt-5 p-4 principal-message ">
                      <p class="fs-4 fw-bolder  text-danger mt-3 mb-0">Mrs. Sunita </p> 
                      <p class="fs-5 mt-0 text-body-tertiary">Principal</p>
                      <p class="text-body-tertiary">It is my privilege and <br> pride in acknowledging <br> that HVM Convent <br>School has taken <br>rapid strides to <br>establish ...</p>
                      <a href="principal-message.php"><button type="button" class="btn btn-danger">Read More</button> </a>
                      
                    </div>
                  
                </div>
                <div class="col-1">
                  <img src="images/principal.jpg" alt="Principal" class="principal_photo">
                </div>
            </div>
            <!-- welcome and message section ends here -->
             <!-- vision mission section starts here -->
             <div class="row vision-color text-light pt-5 pb-5 mt-2">
                <div class="col-1 "><img src="images/vision.png" alt="vision"></div>
                <div class="col-2 p-0">
                  <h3>Our Vision</h3>
                  <p>HVM Convent School aims to promote holistic development by nurturing and training the HVMians to grow into global citizens by equipping them with 21st century skills and values to meet all the challenges of a rapidly changing society. </p>
                </div>
                <div class="col-1"></div>
                <div class="col-1 "><img src="images/mission.png" alt="mision"></div>
                <div class="col-2 p-0">
                  <h3>Our Mission</h3>
                  <p>Our mission is to provide a safe, conducive and dynamic learning environment to promote the talents of students at all levels so that they can work towards attainment of their goals and enrich the society with their works and values. </p>
                </div>
                <div class="col-1"></div>
                <div class="col-1 "><img src="images/moto.png" alt="vision"></div>
                <div class="col-2 p-0">
                  <h3>Our Motto</h3>
                  <p>Our motto is "Work is worship" that means students must treat the work they do as an art of worship so that they can rise and soar high to fulfill their aims to reach the zenith of success in their lives. </p>
                </div>
                <div class="col-1"></div>
               
             </div>
             <!-- vision mission section ends here -->
              <!-- toppers section starts here -->
              <div class="row background mt-2 pt-5 pb-3">
                        <div class="row">
                            <div class="col-4"></div>
                            <div class="col-4">
                              <span class="fw-bolder fs-3  bg-light ms-5"> OUR <span class="text-warning">TOPPERS </span> (2023-24)</span><br/>
                              <img src="images/separate.png" alt="separate" class="separate">
                            </div>
                            <div class="col-4"></div>
                        </div>
                        <div class="row">
                          <div class="col-1"></div>
                          <!-- class 10 toper starts here -->
                            <div class="col-3 mt-3 ms-4">
                              <p> <span class="fw-bolder fs-5  bg-danger text-light p-2" >  Class 10<sup>th</sup> <span class="text-warning">Toppers </span>  </span></p>
                              <div id="carouselExample" class="carousel slide" data-bs-ride="carousel">
                                <div class="carousel-inner">
                                  <div class="carousel-item active" data-bs-interval="2300" >
                                      <img src="images/simran.jpg"   style="height:355px" class="d-block w-100" alt="...">
                                      <div class="carousel-caption d-none d-md-block mt-3">
                                          <h5 class="bg-danger  text-light bg-gradient rounded-end-circle rounded-start-circle p-2">Simran Kaur</h5>
                                          <p class="bg-danger  text-light bg-gradient rounded-end-circle rounded-start-circle p-2">95%</p>
                                      </div>
                                  </div>
                                  <div class="carousel-item" data-bs-interval="2300" >
                                    <img src="images/preeti.jpeg" style="height:355px" class="d-block w-100" alt="...">
                                    <div class="carousel-caption d-none d-md-block">
                                        <h5 class="bg-danger  text-light bg-gradient rounded-end-circle rounded-start-circle p-2">Preeti Sharma</h5>
                                        <p class="bg-danger  text-light bg-gradient rounded-end-circle rounded-start-circle p-2">98%</p>
                                    </div>
                                  </div>
                                  <div class="carousel-item" data-bs-interval="2300" >
                                    <img src="images/mansi.jpeg"   style="height:355px" class="d-block w-100" alt="...">
                                    <div class="carousel-caption d-none d-md-block">
                                        <h5 class="bg-danger  text-light bg-gradient rounded-end-circle rounded-start-circle p-2">Mansi</h5>
                                        <p class="bg-danger  text-light bg-gradient rounded-end-circle rounded-start-circle p-2">89%</p>
                                    </div>
                                  </div>
                                </div>
                                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
                                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                  <span class="visually-hidden">Previous</span>
                                </button>
                                <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
                                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                  <span class="visually-hidden">Next</span>
                                </button>
                                
                              </div>
                            </div>
                            <!-- class 10 toper ends -->
                            <div class="col-3"> 
                              
                            </div>
                            <!-- class 12 toppers -->
                            <div class="col-3 mt-3 ms-4">
                              <p> <span class="fw-bolder fs-5  bg-danger text-light p-2" >  Class 12<sup>th</sup>  <span class="text-warning">Toppers </span> </span></p>
                              <div id="carouselExample1" class="carousel slide" data-bs-ride="carousel">
                                <div class="carousel-inner">
                                  <div class="carousel-item active" data-bs-interval="2300">
                                    <img src="images/harsh.jpeg"   style="height:355px" class="d-block w-100 " alt="...">
                                    <div class="carousel-caption d-none d-md-block mt-3">
                                        <h5 class="bg-danger  text-light bg-gradient rounded-end-circle rounded-start-circle p-2">Harsh</h5>
                                        <p class="bg-danger  text-light bg-gradient rounded-end-circle rounded-start-circle p-2">95%</p>
                                    </div>
                                  </div>
                                  <div class="carousel-item "  data-bs-interval="2300">
                                    <img src="images/anurag.jpeg"  style="height:355px" class="d-block w-100 " alt="...">
                                    <div class="carousel-caption d-none d-md-block">
                                        <h5 class="bg-danger  text-light bg-gradient rounded-end-circle rounded-start-circle p-2">Anurag Virag</h5>
                                        <p class="bg-danger  text-light bg-gradient rounded-end-circle rounded-start-circle p-2">98%</p>
                                    </div>
                                  </div>
                                  <div class="carousel-item" data-bs-interval="2300">
                                    <img src="images/sanya.jpg"   style="height:355px" class="d-block w-100 " alt="...">
                                    <div class="carousel-caption d-none d-md-block">
                                        <h5 class="bg-danger  text-light bg-gradient rounded-end-circle rounded-start-circle p-2">Sanya Mehra</h5>
                                        <p class="bg-danger  text-light bg-gradient rounded-end-circle rounded-start-circle p-2">89%</p>
                                    </div>
                                  </div>
                                </div>
                                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample1" data-bs-slide="prev">
                                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                  <span class="visually-hidden">Previous</span>
                                </button>
                                <button class="carousel-control-next" type="button" data-bs-target="#carouselExample1" data-bs-slide="next">
                                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                  <span class="visually-hidden">Next</span>
                                </button>
                                
                              </div>
                            </div>
                            <div class="col-1"></div>
                        </div>
                        <!-- class 12 toppers ends -->
                        
                
              </div>
              <!-- toppers section starts here -->
               <!-- kindergarten section starts here -->
               <div class="row kindergarten bg-light mt-2">
                <div class="col-8"></div>
                <div class="col-4">
                    <div class="fw-bold fs-3 mt-5 pt-5 ">
                      Kindergarten Section
                       
                    </div>
                    <p class="fs-6">
                        The aim of education should be to teach the <br> "Child To Think , Not What To Think". Do And Learn' 
                      <br> is the principal followed to improve children <br> so that they can orient themselves to <br> the tangible 
                        world of space <br> and time to formulate their ideas.
                    </p>
                    <a href="kindergarten.php"><button type="button" class="btn btn-danger">Read More</button> </a>
                </div>
               </div>
               <!-- kindergarten section ends here -->
               <!--  footer starts here -->
                 <?php   include "footer.php" ?>
                   <!--  footer ends here -->

    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>