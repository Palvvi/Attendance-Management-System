

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>HVM CONVENT SCHOOL</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  </head>
  <body >
    
        <div class="table-design rounded-top bg-secondary-subtle mx-5">
                            <div class=" bg-dark rounded-top    ">
                                <div class="text-light fs-3 center fw-bolder "> 
                                    <span >Faculties & Facilities</span>
                                </div>
                            </div>
                            <div class="d-grid gap-2 col-10 mx-auto mt-4 table-link ">
                                <a href="admission-rules.php" class="link1"><button class="btn  rounded-0  col-12" type="button">Admission Rules</button></a>
                                <a href="fee-structure.php" class="link1"><button class="btn  rounded-0   col-12" type="button">Fee structure</button></a>
                                <a  class="link1" href="teachers.php"><button class="btn    rounded-0  col-12" type="button">Teachers</button></a>
                                <a href="strength.php" class="link1"><button class="btn   rounded-0   col-12" type="button">Student Strength</button></a>
                                <a href="streams.php" class="link1"><button class="btn   rounded-0   col-12" type="button">Streams offered</button></a>
                                <a href="infrastructure.php" class="link1"><button class="btn    rounded-0   col-12" type="button">Our infrastructure</button></a>
                                &nbsp;
                            </div>   
                                
        </div>
        
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>
<?php
$uri=$_SERVER['REQUEST_URI'];
?>

<script>


    var element = document.querySelectorAll('.link1');
    for (var i=0;i<element.length;i++) {
        var href1 = element[i].getAttribute('href');
         
       if( ("<?=$uri?>".includes(href1)))
       {
        
       
        Array.prototype.forEach.call(element,function(item){
            if(item.href.match(href1)){
            var child=item.children[0];
            child.classList.add("color");
            }
        });


       }
          
    }


</script>
<?php

?>