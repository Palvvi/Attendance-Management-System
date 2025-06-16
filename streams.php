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
                            Streams Offered
                            </div>
                            <ol class="breadcrumb fs-3 ">
                            <li class="breadcrumb-item breadcrum text-light ">Home</li>
                            <li class="breadcrumb-item active breadcrum text-light " aria-current="page">Streams Offered</li>
                            </ol>
                        </nav>
                </div>
            </div>
            <div class="row mt-5 bs-light">
                <div class="col-4">
                    <? include "navigation.php" ?>
                </div>
                <div class="col-8 mb-5">
                <h2>STREAMS OFFERED</h2>

                    <p>Courses of the school have been invented with the purpose that students can take their secondary and Sr. Secondary school certificates examination according to CBSE pattern of education. The following options are available for the students of XI and XII.</p>

                    <ol>
                        <li>Comme<a name="_GoBack"></a>rce Group subjects &ndash; English, Business studies, Accountancy, Economics, Applied Mathematics or Physical Education OR Informatics practices OR Music.</li>
                        <li>Medical Group subjects &ndash; English, Physics, Chemistry, Biology, Physical Education OR Informatics practices OR Music.</li>
                        <li>Non - Medical Group Subjects - English, Physics, Chemistry, Mathematics, Physical Education OR Informatics practices OR Music.</li>
                        <li>Humanities Group subjects &ndash; English, Punjabi, Political Science, History, Applied Mathematics or Physical Education or Informatics practices OR Music.</li>
                    </ol>
                    <br/>
                    <br/>
                    <br/>
                    <br/>
                </div>
            </div>
            <?php  include "footer.php" ?>
        </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>