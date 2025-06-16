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
                            Management Members
                            </div>
                            <ol class="breadcrumb fs-3 ">
                            <li class="breadcrumb-item breadcrum text-light ">Home</li>
                            <li class="breadcrumb-item active breadcrum text-light " aria-current="page">Management Members</li>
                            </ol>
                        </nav>
                </div>
            </div>
            <div class="row mt-5 bs-light">
                <div class="col-4">
                    <div class="table-design rounded-top bg-secondary-subtle mx-5">
                        <div class=" bg-dark rounded-top    ">
                            <div class="text-light fs-3 center fw-bolder "> 
                                <span >About Us</span>
                            </div>
                        </div>
                        <div class="d-grid gap-2 col-10 mx-auto mt-4 table-link ">
                            <a href="vision.php" ><button class="btn  rounded-0  col-12" type="button">Vision & Mission</button></a>
                            <a href="management.php"><button class="btn  rounded-0  color col-12" type="button">HVM Management</button></a>
                            &nbsp;
                        </div>   
                            
                    </div>
                </div>
                <div class="col-6 mb-5">
                <p class="justify">The institution is running under Harsh Educational Society registered under the Society Registration Act 1860. Registration no. of the society is 0048.</p>
                <table class="table" border="1" cellpadding="10" style="width:100%">
                    <tr><th>S. No.</th><th>Name</th><th>Designation</th></tr>
                        <tr><td>1</td><td>S. Dilbagh Singh</td><td>Chairman</td></tr>                       
                        <tr><td>2</td><td>Mr. D.P. Sharma</td><td>President</td></tr>                       
                        <tr><td>3</td><td>S. Satnaam Singh</td><td>Secretary</td></tr>                       
                        <tr><td>4</td><td>Ms. Meena Sharma</td><td>Director</td></tr>                       
                        <tr><td>5</td><td>Mrs. Sunita Kumari</td><td>Principal</td></tr>                       
                        <tr><td>6</td><td>Mr. Harsh Sharma</td><td>Cashier</td></tr>                       
                        <tr><td>7</td><td>Dr. Ms. Poornima Sharma</td><td>Executive Member</td></tr>                       
                        <tr><td>8</td><td>S. Jaspal Singh</td><td>Executive Member</td></tr>                       
                        <tr><td>9</td><td>Dr. S. Harpal Singh</td><td>Executive Member</td></tr>                       
                        <tr><td>10</td><td>Mrs. Maninder Kaur</td><td>Executive Member</td></tr>                       
                        <tr><td>11</td><td>Mr. Ramakant</td><td>Executive Member</td></tr>                       
                        <tr><td>12</td><td>Mr. Parveen Thakur</td><td>Teacher Member</td></tr>                       
                        <tr><td>13</td><td>Mrs. Veena Deora</td><td>Teacher Member</td></tr>                       
                        <tr><td>14</td><td>Mrs. Baljit Kaur</td><td>Parent Member</td></tr>                       
                        <tr><td>15</td><td>Mr. Ranbir Singh Rana</td><td>Parent Member</td></tr>                       
                </table>
                </div>
            </div>
            <?php  include "footer.php" ?>
        </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>