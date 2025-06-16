<?php
require_once("database.php");

class TeacherDataStore
{
    public static function saveTeacher($seq,$fullname ,$fathername,$dateofbirth,$gender,$mobilenumber, $fulladdress,$state,$city,$email,$password,$class,$section)
    {
        
        $newDate = "'". date("Y-m-d H:i:s") ."'";
        $conn=database::createNewConnection();
        $sql="INSERT INTO teachers VALUES(NULL, '$fullname','$fathername','$dateofbirth','$gender',$mobilenumber, '$fulladdress','$state','$city','$email','$password','$class','$section',$newDate)";
        if($conn->query($sql) === TRUE)
        {
            
            $conn->close();
            return TRUE;
        }
    }
   
    public static function getteachers($limit,$offset)
    {
        $sql=null;
        $conn=database::createNewConnection();
        $sql="select * from teachers order by classassign  LIMIT $limit OFFSET $offset"; 
        $result=$conn->query($sql);
        $allteachers=array();
        if ($result->num_rows > 0) 
        {
            while($row = $result->fetch_assoc()) 
            {
               array_push($allteachers,$row);
            }
        } 
        $conn->close();
        return $allteachers;
    }
    public static function getteacher()
    {
        $sql=null;
        $conn=database::createNewConnection();
        $sql="select * from teachers order by classassign"; 
        $result=$conn->query($sql);
        $allteachers=array();
        if ($result->num_rows > 0) 
        {
            while($row = $result->fetch_assoc()) 
            {
               array_push($allteachers,$row);
            }
        } 
        $conn->close();
        return $allteachers;
    }
    public static function getTeachersTotalCount()
    {
        $conn=database::createNewConnection();
        $sql="select count(*) as count from teachers";
        $result=$conn->query($sql);
        $row=$result->fetch_assoc();
        $conn->close();
        return $row['count'];
    }
    public static function getteacherbyseq($editingteacherseq)
    {
        $conn=database::createNewConnection();
        $sql="select * from teachers where seq='$editingteacherseq'";
        $result=$conn->query($sql);
        if($result->num_rows>0)
        {
            return $result->fetch_assoc();
        }

    }

    public static function getteacherbyclass($attclass,$attsection)
    {
        $conn=database::createNewConnection();
        $sql="select seq from teachers where classassign='$attclass' and classsection='$attsection' ";
        $result=$conn->query($sql);
        if($result->num_rows>0)
        {
            return $result->fetch_assoc();
        }

    }

    public static function deleteteacherbyseq($deleteteacherseq)
    {
        $conn=database::createNewConnection();
        $sql="delete from teachers where seq='$deleteteacherseq'";
        $result=$conn->query($sql);
        if($result===TRUE)
        {
            $conn->close();
            return TRUE;
        }
        $conn->close();
            return FALSE;
    }
    public static function updateTeacher($seq,$fullname ,$fathername,$dateofbirth,$gender,$mobilenumber, $fulladdress,$state,$city,$email,$password,$class,$section)
    {
        
        $newDate = "'". date("Y-m-d H:i:s") ."'";
        $conn=database::createNewConnection();
        $sql="UPDATE teachers 
        SET 
        fullname='$fullname',
        fathername='$fathername',
        dateofbirth='$dateofbirth',
        gender='$gender',
        mobileno='$mobilenumber',
        address='$fulladdress',
        state='$state',
        city='$city',
        email='$email',
        password='$password',
        classassign='$class',
        classsection='$section',
        lastupdatedon=$newDate
        where seq='$seq'";
        try{
            $conn->query($sql);
        }
        catch(Exception $e)
        {
            echo $e;
          
        }
            

        if($conn->query($sql) === TRUE)
        {
            echo "data entered";
            $conn->close();
            return TRUE;
        }
    }
}
   
   





?>