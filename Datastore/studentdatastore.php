<?php
require_once("database.php");

class StudentDataStore{
    public static function saveStudent($seq, $fullName,$fatherName,$admissionNumber,$rollNo,$dateOfBirth, $grade,$section,$gender,$mobileNumber,$fullAddress,$state,$city)
    {
        
        $newDate = "'". date("Y-m-d H:i:s") ."'";
        $conn=database::createNewConnection();
        $sql="INSERT INTO students VALUES(NULL, '$fullName','$fatherName',$admissionNumber,$rollNo,'$dateOfBirth', '$grade','$section','$gender',$mobileNumber,'$fullAddress','$state','$city',$newDate)";
        if($conn->query($sql) === TRUE)
        {
            
            $conn->close();
            return TRUE;
        }
    }
    public static function editStudent($seq, $fullName,$fatherName,$admissionNumber,$rollNo,$dateOfBirth, $grade,$section,$gender,$mobileNumber,$fullAddress,$state,$city)
    {
        
        $newDate = "'". date("Y-m-d H:i:s") ."'";
        $conn=database::createNewConnection();
        $sql="UPDATE students 
        SET 
        fullname='$fullName',
        fathername='$fatherName',
        admissionnumber=$admissionNumber,
        rollno=$rollNo,
        dateofbirth='$dateOfBirth',
        class='$grade',
        section='$section',
        gender='$gender',
        mobileno='$mobileNumber',
        address='$fullAddress',
        state='$state',
        city='$city'

        where seq=$seq";
        try{
            $conn->query($sql);
        }
        catch(Exception $e)
        {
            echo "Data has not been updated";
          
        }
            

        if($conn->query($sql) === TRUE)
        {
            echo "data entered";
            $conn->close();
            return TRUE;
        }
    }
    public static function getstudents($class,$section,$sortby)
    {
        $sql=null;
        $conn=database::createNewConnection();
        if($class!=null)
        {
            $sql="select * from students where class='$class'"; 
            if($section!=null)
            {
                $sql.=" and section='$section'";
            }
            if($sortby!=null)
            {
                $sql.=" order by $sortby";
            }
        
        }
        
        $result=$conn->query($sql);
        $allstudents=array();
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                array_push($allstudents,$row);
            }
        } else {
            echo "No student Exist";
        }
        $conn->close();
        return $allstudents;
    }

    public static function getstudentbyseq($editingstudentseq)
    {
        $conn=database::createNewConnection();
        $sql="select * from students where seq='$editingstudentseq'";
        $result=$conn->query($sql);
        if($result->num_rows>0)
        {
            return $result->fetch_assoc();
        }

    }
    public static function getStudentByRollno($rollno,$class,$section)
    {
        $conn=database::createNewConnection();
        $sql="select seq from students where rollno='$rollno' && class='$class' && section='$section'";
        $result=$conn->query($sql);
        if($result->num_rows>0)
        {
            return $result->fetch_assoc();
        }

    }
    public static function deletestudentbyseq($deletestudentseq)
    {
        $conn=database::createNewConnection();
        $sql="delete from students where seq='$deletestudentseq'";
        $result=$conn->query($sql);
        if($result===TRUE)
        {
            $conn->close();
            return TRUE;
        }
        $conn->close();
            return FALSE;
    }

    public static function getStudentsForAttendance($class,$section)
    {
        $sql=null;
        $conn=database::createNewConnection();
        if($class!=null)
        {
            $sql="select * from students where class='$class'"; 
        
           if ($section!=null) {
                $sql=$sql." AND section='$section'";
            }
            
       
        }
        
        $result=$conn->query($sql);
        $allstudents=array();
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                array_push($allstudents,$row);
            }
        } else {
            echo "No student Exist";
        }
        $conn->close();
        return $allstudents;
    }

    public static function totalstudent()
    {
        $sql=null;
        $conn=database::createNewConnection();
        $newDate = "'". date("Y-m-d") ."'";
        $sql="select count(*) from students"; 
        $result=$conn->query($sql);
        try {
            if($result->num_rows>0)
            {
                return $result->fetch_assoc();
            }
        }  catch (exception $e) 
        {
           echo $e;
        }
       
        $conn->close();
       
    }
    public static function getClassList()
    {
        $sql=null;
        $conn=database::createNewConnection();
        $sql="select distinct class,section  from students order by class"; 
        $result=$conn->query($sql);
        $classlist=array();
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                array_push( $classlist,$row);
            }
        } else {
            echo "No student Exist";
        }
        $conn->close();
        return  $classlist;
    }
    public static function TotalStudentByClass()
    {
        $sql=null;
        $conn=database::createNewConnection();
        
            $sql="SELECT count(*) as studentstrength,class,section from students group by class, section"; 
        
         
        
        $result=$conn->query($sql);
        $allstudents=array();
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                array_push($allstudents,$row);
            }
        } else {
            echo "No student Exist";
        }
        $conn->close();
        return $allstudents;
    }
       
}

    






?>