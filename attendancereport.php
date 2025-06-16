<?php
require("datastore/attendancedatastore.php");
require_once("datastore/studentdatastore.php");
$currentDate = date('Y-m-d');
$totalstudent=StudentDataStore::totalstudent();
$totalPresentToday=AttendanceDataStore::getTotalPresentToday($currentDate);
$totalAbsentToday=AttendanceDataStore::getTotalAbsentToday($currentDate );
$totalLeaveToday=AttendanceDataStore::getTotalLeaveToday($currentDate );
$classlist=StudentDataStore::getClassList();
$pesentdata= AttendanceDataStore::presentAttendanceReport($currentDate);
$absentdata= AttendanceDataStore::absentAttendanceReport($currentDate);
$leavedata= AttendanceDataStore::leaveAttendanceReport($currentDate);
if(isset($_REQUEST['backAction']))
{
    $date=$_REQUEST['attendancedate'];
}
if(isset($_REQUEST['attendance'])||isset($_REQUEST['backAction']))
{
$date=$_REQUEST['attendancedate'];
$pesentdata= AttendanceDataStore::presentAttendanceReport($date);
$absentdata= AttendanceDataStore::absentAttendanceReport($date);
$leavedata= AttendanceDataStore::leaveAttendanceReport($date);
$totalPresentToday=AttendanceDataStore::getTotalPresentToday($date);
$totalAbsentToday=AttendanceDataStore::getTotalAbsentToday($date);
$totalLeaveToday=AttendanceDataStore::getTotalLeaveToday($date);
}

$totalClassStudents=StudentDataStore::TotalStudentByClass();
$mainArr = [];
foreach($classlist as $class)
{
    $mainArr[$class['class']."-".$class['section']]["present"]="";
    $mainArr[$class['class']."-".$class['section']]["absent"]="";
    $mainArr[$class['class']."-".$class['section']]["total"]="";
    $mainArr[$class['class']."-".$class['section']]["leave"]="";
    
}



foreach ($mainArr as $classlistvalue => $presentAllData)
{
    foreach($pesentdata as $presentAll)
    {
     $classvalue=$presentAll['class']."-".$presentAll['section'];
        if( $classlistvalue===$classvalue )
        {
        $mainArr[$classlistvalue]['present']=$presentAll['presents'];
        break;
        }
    }
    foreach($absentdata as $absentAll)
    {  
       
        $classvalue2=$absentAll['class']."-".$absentAll['section'];
        if( $classlistvalue===$classvalue2 )
        {
        $mainArr[$classlistvalue]['absent']=$absentAll['absents'];
        break;
        }

        // $mainArr[$presentAll['class']."-".$presentAll['section']]['present']=$presentAll['presents'];
        // if( $mainArr[$presentAll['class']."-".$presentAll['section']]===$mainArr[$absentAll['class']."-".$absentAll['section']] )
        // {
        // $mainArr[$presentAll['class']."-".$presentAll['section']]['present']=$presentAll['presents'];
        // $mainArr[$presentAll['class']."-".$presentAll['section']]['absent']=$absentAll['absents'];
        // }
    }  
    foreach($leavedata as $leaveAll)
    {
     $classvalue4=$leaveAll['class']."-".$leaveAll['section'];
        if( $classlistvalue===$classvalue4 )
        {
        $mainArr[$classlistvalue]['leave']=$leaveAll['leaves'];
        break;
        }
    }
    foreach($totalClassStudents as $totalClassStudent)
    {
        $classvalue3=$totalClassStudent['class']."-".$totalClassStudent['section'];
        if($classlistvalue===$classvalue3)
        {
            $mainArr[$classlistvalue]['total']=$totalClassStudent['studentstrength'];
            break;
        }
    }
}
foreach ($mainArr as $classlistvalue => $AllData)
{
    if(!$AllData['present'])
    {
        $mainArr[$classlistvalue]['present']="0";
    }
    if(!$AllData['absent'])
    {
        $mainArr[$classlistvalue]['absent']="0";
    }
    if(!$AllData['leave'])
    {
        $mainArr[$classlistvalue]['leave']="0";
    }
}
$pendingclass=[];
?>

<!doctype html>
<html lang="en">
  <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>HVM Convent School</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
      <link rel="stylesheet" href="style.css">
      <style>
            

            button {
                
                position: relative;
                padding: 5px;
                font-size: 16px;
                font-weight: 600;
                border: none;
                border-radius: 6px;
                cursor: pointer;
                outline: none;
                overflow: hidden;
                transition: all 0.3s ease;
            }
            .btn-outline {
                background-color: transparent;
                color: rgb(105, 172, 206);
                border: 2px solid rgb(154, 197, 218);
                border-radius: 7px;
                transition: all 0.1s;
                z-index: 1;
            }
    
            .btn-outline::before {
                content: '';
                position: absolute;
                top: 0;
                left: 0;
                width: 0%;
                height: 100%;
                background-color: #EBD8D0;
                transition: all 0.5s;
                z-index: -1;
            }
    
            
            </style>
                 
  </head>
 
  <body class="customBody">
    <?php include 'navbar.php';?>
    <?php include 'menu.php';?>
        <div class="container-sm bg-light border shadow p-3 mb-5  mt-2 bg-body-tertiary rounded">
            <div class="row px-4 pt-2">
               
                <div class=" p-2 col-2 pt-4  pb-2 rounded" style="height:100px; margin-left:100px; background-color: #BFEDC1; color:rgb(4, 95, 9)">
                    <p class=" h4 ms-3">Total Student </p>
                    <p class=" h4 ms-5 ps-2" ><?=$totalstudent['count(*)']?></p>
                </div>
                
                <div class=" p-2 col-2 pt-4 ms-5 pb-2 rounded " style="height:100px; background-color:rgb(225, 180, 248); color:rgb(81, 5, 119)">
                    <p class=" h4 ms-1">Present Student</p>
                    <p class=" h4 ms-5 ps-3" ><?=$totalPresentToday['count(*)']?></p>
                </div>
                <div class=" p-2 col-2 pt-4 ms-5 pb-2 rounded " style="height:100px; background-color:#F2BAC9; color:rgb(151, 20, 55)">
                    <p class=" h4 ms-1">Absent Student</p>
                    <p class=" h4 ms-5 ps-3" ><?=$totalAbsentToday['count(*)']?></p>
                </div>
                <div class=" p-2 col-2 pt-4 ms-5 pb-2 rounded " style="height:100px; background-color:#EAD637; color:rgb(88, 80, 13)">
                    <p class=" h4 ms-2">Leave Student</p>
                    <p class=" h4 ms-5 ps-3" ><?=$totalLeaveToday['count(*)']?></p>
                </div>
            </div>
            <div class="row mt-2">
                <div class="col-7"></div>
                <div class="col-2  mt-3 ms-3">
                    <form action="attendancereport.php" type="post" >
                        <input type="date" class="form-control mt-4" id="attendancedate" name="attendancedate" value="<? 
                        if(isset($_REQUEST['attendance'])||isset($_REQUEST['backAction']))
                        {
                         echo $date;
                        }
                        else
                        {
                            echo $currentDate;
                        }
                        
                        
                        ?>" required>
                    </div> 
                    <div class=" col-2 ms-2 mt-4 pt-3  btn-container" > 
                               
                               <button class=" btn-outline " name="attendance" type="submit">
                                  Show Attendance
                               </button>
                    </div>
                </form>
            </div>
            
            <div class="row mt-5">
                <div class="col-1"></div>
                <div class="col-10">
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                    <th scope="col">Class</th>
                                    <th scope="col">Total</th>
                                    <th scope="col">Present</th>
                                    <th scope="col">Absent</th>
                                    <th scope="col">Leave</th>
                                    <th>List of Students</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $i=0;
                                    foreach ($mainArr as $classlistvalue => $presentAllData) {
                                        
                                    
                                    ?>
                                    <tr>
                                    <td scope="row"><?=$classlistvalue; ?> </td>
                                    <td>
                                        <?php
                                        echo $presentAllData['total'];
                                        ?>
                                    </td>
                                    <td><?
                                    if ($presentAllData)
                                        {
                                    echo  $presentAllData['present'] ;
                                        }
                                                                    
                                    else
                                    {
                                        echo "0";
                                    } ?></td>
                                    <td><?
                                    if ($presentAllData)
                                    {
                                echo  $presentAllData['absent'] ;
                                    }
                                                                
                                    else
                                    {
                                    echo "0";
                                    } 
                                    ?></td>
                                    <td><?
                                    if ($presentAllData)
                                    {
                                echo  $presentAllData['leave'] ;
                                    }
                                                                
                                    else
                                    {
                                    echo "0";
                                    } 
                                    ?></td>
                                    <td>
                                        <?php
                                         if(isset($_REQUEST['attendance'])||isset($_REQUEST['backAction']))
                                             {
                                            $a= $date;
                                            }
                                            else
                                            {
                                                $a= $currentDate;
                                            }?>
                                        <a href="attendancedetail.php?class=<?=$classlistvalue?>&date=<?=$a?>"> Details</a>
                                    </td>
                                    </tr>                               
                                </tbody>
                                <?php 

                                 if(!$presentAllData['present']) 
                                 {
                                  $pendingclass[$i]= $classlistvalue; 
                                  $i++;
                                 }
                            }?>
                        </table>
                    </div>
                </div>
                  <div class="col-1"></div>
            </div>
            <div class="row">
                <div class="col-4"></div>
                <div class="col-4">
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped" style="text-align:center;">
                                <thead>
                                    <tr>
                                    <th scope="col" style="background-color:red ;color:white;">Pending Attendance</th>
                                    
                                    </tr>
                                    <tr>
                                    <th scope="col">Classes</th>
                                    
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    foreach ($pendingclass as $class) {
                                       
                                    
                                    ?>
                                    <tr>
                                    <td scope="row"><?
                                     echo $class;
                                       
                                     ?>
                                     </td>
                                    </tr>                               
                                </tbody>
                                <?php 
                            }?>
                        </table>
                    </div>
           


                </div>
                <div class="col-4"></div>
            </div>
           
            
            
               

            
        </div>
    
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="javascript.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>

<?php
if(isset($_REQUEST["success"]))
{
    if($_REQUEST["success"]==1)
    {?>
    <script>
    $("#attendance-message").show().delay(10000).fadeOut(500);
</script>
  <?php }
}
?>
