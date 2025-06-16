<?php
require_once("database.php");

class AttendanceDataStore{
    public static function saveAttendance($seq,$studentseq,$teacherseq,$attdate,$attendance)
    {
        
        $newDate = "'". date("Y-m-d H:i:s") ."'";
        $conn=database::createNewConnection();
        $sql="INSERT INTO attendance VALUES(NULL, $studentseq,$teacherseq,'$attdate','$attendance',$newDate)";
        if($conn->query($sql) === TRUE)
        {
            
            $conn->close();
            return TRUE;
        }
    }
    public static function updateAttendance($seq,$studentseq,$teacherseq,$attdate,$attendance)
    {
        
        $newDate = "'". date("Y-m-d H:i:s") ."'";
        $conn=database::createNewConnection();
       $sql="UPDATE attendance 
        SET 
        studentseq=$studentseq,
        teacherseq=$teacherseq,
        attendancedate='$attdate',
        attendance='$attendance',
        lastupdatedon=$newDate
        where seq=$seq";
        if($conn->query($sql) === TRUE)
        {
            
            $conn->close();
            return TRUE;
        }
    }
    public static function getAttendance($studentseq,$attdate)
    {
        $sql=null;
        $conn=database::createNewConnection();
        $sql="select seq,attendance,studentseq from attendance where studentseq='$studentseq'  && attendancedate='$attdate' order by lastupdatedon DESC"; 
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
    public static function getTotalPresentToday($newDate)
    {
        $sql=null;
        $conn=database::createNewConnection();
       
        $sql="select count(*) from attendance where attendance='P' and attendanceDate='$newDate'"; 
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
    public static function getTotalAbsentToday($newDate)
    {
        $sql=null;
        $conn=database::createNewConnection();
       
        $sql="select count(*) from attendance where attendance='A' and attendanceDate='$newDate'"; 
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
    public static function getTotalLeaveToday($newDate)
    {
        $sql=null;
        $conn=database::createNewConnection();
       
        $sql="select count(*) from attendance where attendance='L' and attendanceDate='$newDate'"; 
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
    public static function presentAttendanceReport($date)
    {
        $sql=null;
        $conn=database::createNewConnection();
        $sql="select count(*) as presents, students.class,students.section
        from attendance
        join students 
        on students.seq = attendance.studentseq and attendance.attendance = 'P' 
        and attendance.attendancedate = '$date'
        group by students.class, students.section"; 
      
    $result=$conn->query($sql);
    $attendance=array();
    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            array_push( $attendance,$row);
        }
    } else {
        echo "No student Exist";
    }
    $conn->close();
    return  $attendance;
    }
    public static function absentAttendanceReport($date)
    {
        $sql=null;
        $conn=database::createNewConnection();
        $sql="select count(*) as absents, students.class,students.section
        from attendance
        join students 
        on students.seq = attendance.studentseq and attendance.attendance = 'A' 
        and attendance.attendancedate = '$date'
        group by students.class, students.section"; 
      
    $result=$conn->query($sql);
    $attendance=array();
    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            array_push( $attendance,$row);
        }
    } else {
        echo "No student Exist";
    }
    $conn->close();
    return  $attendance;
    }

    public static function leaveAttendanceReport($date)
    {
        $sql=null;
        $conn=database::createNewConnection();
        $sql="select count(*) as leaves, students.class,students.section
        from attendance
        join students 
        on students.seq = attendance.studentseq and attendance.attendance = 'L' 
        and attendance.attendancedate = '$date'
        group by students.class, students.section"; 
      
    $result=$conn->query($sql);
    $attendance=array();
    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            array_push( $attendance,$row);
        }
    } else {
        echo "No student Exist";
    }
    $conn->close();
    return  $attendance;
    }
    public static function getstudentattendance($class, $section, $date)
    {
        $sql=null;
        $conn=database::createNewConnection();
        $sql="select students.rollno,students.fullname, attendance.attendance
        from attendance
        join students 
        on students.seq = attendance.studentseq 
        and attendance.attendancedate = '$date' where class='$class' and section='$section' order by rollno"; 
      
    $result=$conn->query($sql);
    $attendance=array();
    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            array_push( $attendance,$row);
        }
    } else {
        echo "No student Exist";
    }
    $conn->close();
    return  $attendance;
    }

}