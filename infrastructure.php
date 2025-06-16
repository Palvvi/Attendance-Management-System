<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>HVM Convent School </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="javascript.js"></script>  
</head>
  <body class="bg-light">
    
  <div class="container-fluid">
        <?php  include "main-navbar.php" ?>
    </div>
        <div class="container-fluid index">
            <div class="row mt-2 bg-dark ">
                <div class="col-12 ">
                    <img src="images/background.jpeg" alt="School" class="galleryImage ">
                    
                        <nav aria-label="breadcrumb " class="position">
                            <div class="display-5 text-light fw-bolder">
                            Our Infrastructure
                            </div>
                            <ol class="breadcrumb fs-3 ">
                            <li class="breadcrumb-item breadcrum text-light ">Home</li>
                            <li class="breadcrumb-item active breadcrum text-light " aria-current="page">Our Infrastructure</li>
                            </ol>
                        </nav>
                </div>
            </div>
            <div class="row mt-5 bs-light">
                <div class="col-4" id="data">
                    <?php
                     include "navigation.php"; 
                   ?>
                </div>
                <div class="col-8 mb-5 pb-5">
                    <div class="row mt-5 mb-5">
                        <div class="col-7">
                            <h2>Library</h2>

                            <p class="justify">
                                A school library is a structure within the school that houses a collection of books, Middle and High School with 300 volumes of encyclopedias & more than 12000 books.
                                <br /><br />
                                All the students visit library as per their classroom visit schedule. Library cards are to be carried to visit library. Our librarian is very helpful in locating and selecting books as per our needs. We are allowed to borrow one book at a time and the records for the same are maintained by the librarian. We need to ensure that the books are not damaged by us and are returned on time.
                            </p>
                        </div>
                        <div class="col-4 mt-5">
                            <img id="mainPhoto">
                                <img src="images/lib1.jpg" class="border border-5" style="display: none" >
                                <img src="images/lib2.jpg" class="border border-5" style="display: none" >
                                <img src="images/lib3.jpg" class="border border-5" style="display: none" >
                        </div>
                        <div class="col-1"></div>
                    </div>
                    <hr class="dashed">
                    <!-- science lab -->
                    <div class="row mt-5 mb-5">
                        <div class="col-7">
                            <h2>Science Laboratories</h2>

                            <p class="justify">
                                Multi-purpose science labs that can support different disciplines are important. Biology, chemistry, physics – these subjects require different materials, facilities and teaching methods, and therefore have different requirements for a laboratory environment.
                                <br /><br />
                                Lightweight furnishings and non-fixed pieces of equipment can help create a flexible classroom which can be altered and changed before or during a lesson. As curriculums and class sizes continue to change and grow, it is important that all science laboratories can accommodate this.
                            </p>
                        </div>
                        <div class="col-4 mt-5">
                            <img id="SciencePhoto">
                                <img src="images/sci1.jpg" class="border border-5" style="display: none" >
                                <img src="images/sci2.jpg" class="border border-5" style="display: none" >
                                <img src="images/sci3.jpg" class="border border-5" style="display: none" >
                        </div>
                        <div class="col-1"></div>
                    </div>
                    <hr class="dashed">

                    <!-- Smart Classes -->
                    <div class="row mt-5 mb-5">
                        <div class="col-7">
                            <h2>Smart-Classrooms</h2>
                            <p class="justify">
                                Our school computer lab have 250 computers for our students! Students have the opportuinity to visit our computer lab with their classroom each week. Students practice typing, complete digital media projects and participate in supplemental Language Arts and Math programs in the computer lab. In addition, our computer lab is used daily as part of our grade level intervention block. Student instruction is differentiated during intervention block and the computer lab is used as a resource to support student achievement during this time.
                            </p>
                        </div>
                        <div class="col-4 mt-5">
                            <img id="SmartPhoto">
                                <img src="images/smart1.jpg" class="border border-5" style="display: none" >
                                <img src="images/Smart2.jpg" class="border border-5" style="display: none" >
                                <img src="images/smart3.jpg" class="border border-5" style="display: none" >
                        </div>
                    </div>
                    <hr class="dashed">
                   
                <!-- Computer Lab -->
                <div class="row mt-5 mb-5">
                        <div class="col-7">
                            <h2>Computer Labs</h2>
                            <p class="justify">Our classroom is a learning space, a room in which both children and adults learn. Our Classrooms are found in educational institutions of all kinds, ranging from preschools to universities, and may also be found in other places where education or training is provided, such as corporations and religious and humanitarian organizations. The classroom provides a space where learning can take place uninterrupted by outside distractions.</p>
                        </div>
                        <div class="col-4 mt-5">
                            
                            <img id="ComPhoto">
    
                                <img src="images/lab1.jpg" class="border border-5" style="display: none" >
                                <img src="images/lab2.jpg" class="border border-5" style="display: none" >
                                <img src="images/lab1.jpg" class="border border-5" style="display: none" >
                                
                        </div>
                        <div class="col-1"></div>
                    </div>
                </div>
            </div>
            <?php  include "footer.php" ?>
        </div>
        <script src="javascript.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>