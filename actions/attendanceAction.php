<?php
session_start();
require("../Datastore/studentdatastore.php");
require("../Datastore/teacherdatastore.php");
require("../Datastore/attendancedatastore.php");
$attclass=$_SESSION["attclass"];
$attsection=$_SESSION["attsection"];
$attdate=$_SESSION["attdate"];
$count= $_SESSION["serialNumber"];

$attendancedetail=array();
$teachersseq=TeacherDataStore::getteacherbyclass($attclass,$attsection);
$teacherseq =$teachersseq['seq'];
$result=null;
$seq=null;
for ($i=1; $i <$count  ; $i++) { 
    $attendancedetail= $_REQUEST["markattendance$i"]."<br>";
    if(!empty($_REQUEST["seq$i"])){
        $seq = $_REQUEST["seq$i"];
        echo $seq;
    } 
    $attendance=substr($attendancedetail,0,1);
    $rollno=substr($attendancedetail,1);
    $studentsseq= StudentDataStore::getStudentByRollno($rollno,$attclass,$attsection);
    $studentseq = $studentsseq['seq'];
    if($seq==null)
    {    
        try {
            $result=AttendanceDataStore::saveAttendance($seq,$studentseq,$teacherseq,$attdate,$attendance);
            echo "data saved";
        } 
        catch (exception $e) 
        {
        echo $e;
        }
    }
    else
    {
        try {
            $result=AttendanceDataStore::updateAttendance($seq,$studentseq,$teacherseq,$attdate,$attendance);
            
        } 
        catch (exception $e) 
        {
        echo $e;
        }  
    }
    
}

if($result===TRUE)
{
    
    header("location: ../attendance.php?success=1");
}














?>