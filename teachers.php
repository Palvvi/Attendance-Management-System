<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>HVM Convent School</title>
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
                                Faculty Details
                            </div>
                            <ol class="breadcrumb fs-3 ">
                            <li class="breadcrumb-item breadcrum text-light ">Home</li>
                            <li class="breadcrumb-item active breadcrum text-light " aria-current="page"> Faculty Details</li>
                            </ol>
                        </nav>
                </div>
            </div>
            <div class="row mt-5 bs-light">
                <div class="col-4">
                    <? include "navigation.php" ?>
                </div>
                <div class="col-7">
                <h1 style="text-align:center">Staff Details</h1>
                <table class="table" border="1">
                    <tbody>
                        <tr >
                            <th >Name</th>
                            <th >Designation</th>
                        </tr>
                        <tr>
                            <td>Ms. Radhika Jain</td>
                            <td>Director</td>
                        </tr>
                        <tr>
                            <td>Ms. Sunita Kumari </td>
                            <td>Principal </td>
                        </tr>
                        <tr>
                            <td>Ms. Maninder Kaur </td>
                            <td>Vice Principal </td>
                        </tr>
                        <tr>
                            <td>Mr. Parveen Thakur</td>
                            <td>Admin Coordinator</td>
                        </tr>
                        <tr>
                            <td>Mr. Mohandeep</td>
                            <td>Coordinator</td>
                        </tr>
                    </tbody>
                </table>
                <h1 style="text-align:center">Office Executives</h1>
                <table class="table" border="1">
                    <tbody>
                        <tr>
                            <th>Name</th>
                            
                        </tr>
                        <tr>
                            <td>Mr. Ranbir Rana</td>
                            
                        </tr>
                        <tr>
                            <td>Mr. Sanjeev Kumar</td>
                            
                        </tr>
                        <tr>
                            <td>Ms. Pooja Bhardwaj </td>
                            
                        </tr>
                        <tr>
                            <td>Ms. Shivani</td>
                            
                        </tr>
                        <tr>
                            <td>Ms. Pooja</td>
                            
                        </tr>
                        <tr>
                            <td>Ms. Vanisha</td>
                            
                        </tr>
                    </tbody>
                </table>
                
                <h1 style="text-align:center">Primary Teachers</h1>
                <table class="table" border="1">
                    <tbody>
                        <tr >
                            <th >Class</th>
                            <th >Teacher's Name</th>
                        </tr>
                        <tr>
                            <td>Pre-Nursery</td>
                            <td>Ms. Jiwan Jyoti</td>
                        </tr>
                        <tr>
                            <td>Nursery </td>
                            <td>Ms. Neha </td>
                        </tr>
                        <tr>
                            <td>LKG </td>
                            <td>Ms. Geetu </td>
                        </tr>
                        <tr>
                            <td>UKG</td>
                            <td>Ms. Mandeep</td>
                        </tr>
                        <tr>
                            <td>I</td>
                            <td>Ms. Kiran</td>
                        </tr>
                        <tr>
                            <td>II</td>
                            <td>Ms. Sonia</td>
                        </tr>
                    </tbody>
                </table>
                <br/>
                <table class="table" border="1" cellpadding="10" style="width:100%">
                    <tbody>
                        <tr>
                            <th>Dept. of English</th>
                            <th>Dept. of Mathematics</th>
                            <th>Dept. of Science</th>
                            <th>Dept. of Social Science</th>
                          
                        </tr>
                        <tr>
                            <td>
                                Ms. Rozy<br />
                                Ms. Anjali<br />
                                Ms. Veena Rani<br />
                                Ms. Kalpna<br />
                                Ms. Jaspreet Kaur<br />
                                
                            </td>
                            <td>
                                Mr. Rohit Gupta<br />
                                Ms. Harsharan Kaur<br />
                                Ms. Renu Arora<br />
                                Ms. Neha<br />
                                
                            </td>
                            <td>
                                Ms. Maninder Kaur<br />
                                Ms. Neelam<br />
                                Ms. Madhuri<br />
                                Ms. Hitasha<br />
                               
                            </td>
                            <td>
                                Ms. Pooja Sharma<br />
                                Mr. Parveen Thakur<br />
                                Ms. Pragati<br />
                                Mr. Gautam<br />
                               
                            </td>
                            
                        </tr>
                    </tbody>
                </table>

                </div>
            </div>
            <?php  include "footer.php" ?>
        </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>