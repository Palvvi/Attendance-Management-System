<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> HVM Convent School </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
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
                            Contact Us
                            </div>
                            <ol class="breadcrumb fs-3 ">
                            <li class="breadcrumb-item breadcrum text-light ">Home</li>
                            <li class="breadcrumb-item active breadcrum text-light " aria-current="page"> / Contact Us</li>
                            </ol>
                        </nav>
                </div>
            </div>
            <div class="row mt-5 bs-light">
                <div class="col-4"></div>
                    <div class="fw-bold fs-1 col-4 mx-auto"> 
                        <i class="fa-solid fa-address-book text-danger"></i>
                        Get in Touch
                        <i class="fa-solid fa-address-book text-danger"></i>
                    </div>
                 <div class="col-3"></div>   
            </div>

            <div class="row  bs-light">
                <div class="col-1">
                    
                </div>
                <div class="col-5  border-end me-2 ">
                    
                     <div class="mt-5 pt-3">
                        <p class="fs-2"> 
                            <i class="fa-solid fa-location-dot text-danger"></i>	
                            HVM CONVENT SR. SEC. SCHOOL
                        </p>
                        <p >
                            <button class="btn btn-outline-danger fs-4 border-2" type="button" data-bs-toggle="collapse" data-bs-target="#collapseWidthExample" aria-expanded="false" aria-controls="collapseWidthExample">
                                Affiliation No.
                            </button>
                        </p>
                        <div style="min-height: 120px;">
                            <div class="collapse collapse-horizontal" id="collapseWidthExample">
                                <div class="card card-body" style="width: 300px;">
                                HVM CONVENT SR. SEC. SCHOOL Ludhiana is Affiliated with C.B.S.E. New Delhi. School code 20632 & Affiliation No. 1630652.
                                </div>
                            </div>
                        </div>
                    </div>
                    <hr>

                    <!-- office location -->
                   
                     <div class="mt-5 pt-3">
                        <p class="fs-2"> 
                            <i class="fa-solid fa-location-dot text-danger"></i>	
                            THE OFFICE
                        </p>
                        <p >
                            <button class="btn btn-outline-danger border-2 fs-4" type="button" data-bs-toggle="collapse" data-bs-target="#collapseWidthExample2" aria-expanded="false" aria-controls="collapseWidthExample2">
                                Address
                            </button>
                        </p>
                        <div style="min-height: 120px;">
                            <div class="collapse collapse-horizontal" id="collapseWidthExample2">
                                <div class="card card-body" style="width: 300px;">
                                Karamsar Colony, New Subash Nagar,Ludhiana, Punjab. School No:20632
                                </div>
                            </div>
                        </div>
                    </div>
                    <hr>
                </div>

                <!-- Second section -->

                <div class="col-5 ms-2 ">
                    
                     <div class="mt-5 pt-3">
                        <p class="fs-2"> 
                        <i class="fa-solid fa-phone text-danger"></i>
                            	
                                    PHONE
                        </p>
                        <p >
                            <button class="btn btn-outline-danger border-2 fs-4" type="button" data-bs-toggle="collapse" data-bs-target="#collapseWidthExample3" aria-expanded="false" aria-controls="collapseWidthExample3">
                                Numbers
                            </button>
                        </p>
                        <div style="min-height: 120px;">
                            <div class="collapse collapse-horizontal" id="collapseWidthExample3">
                                <div class="card card-body" style="width: 300px;">
                                94640-98888
                                    <br/>
                                98150-98888
                                </div>
                            </div>
                        </div>
                    </div>
                    <hr>

                    <!-- office location -->
                   
                     <div class="mt-5 pt-3">
                        <p class="fs-2"> 
                            <i class="fa-solid fa-envelope text-danger"></i>
                            EMAIL ADDRESS
                        </p>
                        <p >
                            <button class="btn btn-outline-danger  border-2 fs-4" type="button" data-bs-toggle="collapse" data-bs-target="#collapseWidthExample4" aria-expanded="false" aria-controls="collapseWidthExample4">
                                EMAIL
                            </button>
                        </p>
                        <div style="min-height: 120px;">
                            <div class="collapse collapse-horizontal" id="collapseWidthExample4">
                                <div class="card card-body" style="width: 300px;">
                                    hvmconvent@gmail.com
                                </div>
                            </div>
                        </div>
                    </div>
                    <hr>
                </div>
            </div>
            <?php  include "footer.php" ?>
        </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>