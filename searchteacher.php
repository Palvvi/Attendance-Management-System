<?php
require("Datastore/teacherdatastore.php");


// pagniation
$totalTeachers = TeacherDataStore::getTeachersTotalCount();

$page = 1;
$offset = 0;
$limit = 5;
if(!empty($_GET["page"])){
    $page = $_GET["page"];
    $offset = $page * $limit;
    $offset -= $limit;

}
$teachers = TeacherDataStore::getTeachers($limit,$offset);
?>
<!doctype html>
<html lang="en">
  <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>HVM Convent School</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        
        <link rel="stylesheet" href="style.css">
        <script type="text/javascript">
          
           

        </script>
  </head>
 
  <body class="customBody">
    <?php include 'navbar.php';?>
    <?php include 'menu.php';?>
        <div class="container-sm bg-light border shadow p-3 mb-5  mt-2 bg-body-tertiary rounded">
        <div class="row px-4 pt-4">

            <p id="thank-you-message" style="display:none" class="message">
                Teacher details has been Added succesfully.
            </p>
            <p id="delete-message" style="display:none" class="message">
                Teacher record has been deleted Successfully.
            </p>
            <div class=" p-2 col customBody rounded text-primary-emphasis">
                <i class=" fs-4 d-inline fa-solid fa-list-ol"></i>
                <p class=" d-inline h4 text-start">&nbsp;Teacher List</p>
            </div>
            <!-- form for class selection -->
            <div class="row p-4">
                <div class="col-9">
                    <!-- <form class="row g-3 mb-5 text-primary-emphasis fw-medium column-gap-3" name="teacherlist " action="teacherlist.php" method="post">
                                <div class="col-12 col-lg-4 mt-4">
                                    <label for="fullname" class="form-label">Name</label>
                                    <input type="text" class="form-control" id="fullname" name="fullname"  >
                                </div>
                                <div class="col-12 col-lg-3 mt-4">
                                    <label for="grade" class="form-label ">Select Class</label>
                                    <select id="grade" class="form-select " name="grade" >
                                        <option selected >--Select Class/Grade--</option>
                                        <option value="Nursery">Nursery</option>
                                        <option value="lkg">L.K.G</option>
                                        <option value="ukg">U.K.G</option>
                                        <option value="i">I</option>
                                        <option value="ii">II</option>
                                        <option value="iii">III</option>
                                        <option value="iv">IV</option>
                                        <option value="v">V</option>
                                    </select>
                                </div>   

                                <div class="col-12 col-lg-2 mt-4">
                                    <label for="section" class="form-label ">Select Section</label>
                                    <select id="section" class="form-select " name="section" >
                                        <option selected value="">--Select Section--</option>
                                        <option value="A">A</option>
                                        <option value="B">B</option>
                                        
                                    </select>
                                </div>
                                <div class="col-lg-2 col-3 ms-2 mt-5 pt-1"> 
                                    
                                    <button class="btn  py-2 myButton bgColorforserach " name="search" type="submit">
                                        Search 
                                    </button>
                                </div>
                    </form> -->
                </div>
                <div class="col-3">
                    <a href="teacherdetail.php" style="text-decoration:none; color:black">
                        <img src="images/detail.png" alt="detail" height="40px">
                        <span class="fw-bold">Detail View</span>
                    </a>
                </div>
            <!-- table to show student data -->
            
            <div class="row p-4">
                <div class="col">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col"></th>
                                <th scope="col">Fullname</th>
                                <th scope="col">DOB</th>
                                <th scope="col">Gender</th>
                                <th scope="col">Mobile No</th>
                                
                                <th scope="col">Class Assigned</th>
                                <th scope="col">Section Assigned</th>
                                <th scope="col"></th>
                                <th scope="col"></th>
                            
                            </tr>
                        </thead>
                        <tbody>

                            <? 
                            $teacher="";
                            
                            foreach($teachers as $teacher) {  
                               
                                ?>
                                <tr>
                                    <td></td>
                                    <td><?= $teacher["fullname"] ?></td>
                                    <td><?=$teacher["dateofbirth"] ?></td>
                                    <td><?=$teacher["gender"] ?></td>
                                    <td><?=$teacher["mobileno"] ?></td>
                                    
                                    <td><?=$teacher["classassign"] ?></td>
                                    <td><?=$teacher["classsection"] ?></td>

                                    
                                    <td><a href="javascript:editteacher(<?=$teacher["seq"] ?>)" ><img src="images/edit.png" alt="edit" style="height:40px"/></a></td>
                                   
                                    <td><a href="javascript:deleteteacher(<?=$teacher["seq"] ?>)" ><img src="images/delete.png" alt="edit" style="height:40px"/></a></td>
                                    
                                  
                                </tr>
                            <?}?>
                            <form action="editteacher.php" method = "POST" class="editingteacherForm" name="editingteacherForm">
                                <input type="hidden" name="action" value="edit">
                                <input type="hidden" class="editingSeq" name="seq" >
                            </form>
                            <form action="teacherlist.php" method = "POST" class="deleteteacherForm" name="deleteteacherForm">
                                <input type="hidden" name="action" value="delete">
                                <input type="hidden" class="deletingSeq" name="seq" >
                            </form>
                            
                        </tbody>
                    </table>
                    <nav aria-label="Page navigation example">
                        <ul class="pagination">
                            <?php
                                $totalPages = $totalTeachers / $limit;
                                $totalPages = ceil($totalPages);
                                $blueBoxClass = "";
                                for($i=1;$i<=$totalPages;$i++){
                                    if($i == $page){
                                    $blueBoxClass = " active";
                                    }?>
                                    <li class="page-item<?=$blueBoxClass?>"><a class="page-link" href="teacherlist.php?page=<?=$i?>"><?=$i?></a></li>
                                <?php
                                    $blueBoxClass = "";
                                }
                                ?>
                                    <!-- <li class="page-item"><a class="page-link" href="#">Next</a></li> -->
                        </ul>
                    </nav>
                
                </div>
            </div>


        </div>
               
               

            
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="javascript.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>

<?php

$successMessage = "";

if(isset($_GET["success"]))
{
    if($_GET["success"]==1)
    {?>
        <script>
            $("#thank-you-message").show().delay(10000).fadeOut(500);
        </script>
      <?php
      $_GET["success"]==0;
    }
}

if($isDelete===true)
  {
    
    ?>
      <script>
            $("#delete-message").show().delay(10000).fadeOut(500);
      </script>
      <?php
     $isDelete=false;
     
    
  }

       
?>