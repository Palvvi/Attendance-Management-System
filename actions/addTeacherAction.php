<?php

require("../Datastore/teacherdatastore.php");

$seq=null;
$fullname='null';
$fathername='null';
$dateofbirth=null;
$class='null';
$section='null';
$gender='null';
$mobilenumber=null;
$fulladdress='null';
$state='null';
$city='null';
$email='null';
$password='null';
if(!empty($_POST["fullname"])){
    $fullname = $_POST["fullname"];
}
if(!empty($_POST['fathername']))
{
    $fathername = $_POST["fathername"];
}
if(!empty($_POST['dateofbirth']))
{
    $dateofbirth = $_POST["dateofbirth"];
}

if(!empty($_POST["gender"])){
    $gender = $_POST["gender"];
}
if(!empty($_POST["mobilenumber"])){
    $mobilenumber = $_POST["mobilenumber"];
}
if(!empty($_POST["fulladdress"])){
    $fulladdress = $_POST["fulladdress"];
}
if(!empty($_POST["state"])){
    $state = $_POST["state"];
}
if(!empty($_POST["city"])){
    $city = $_POST["city"];
}
if(!empty($_POST['email']))
{
    $email = $_POST["email"];
}
if(!empty($_POST['password']))
{
    $password = $_POST["password"];
}

if(!empty($_POST["class"])){
    $class = $_POST["class"];
}
if(!empty($_POST["section"])){
    $section = $_POST["section"];
}




if(!empty($_POST["seq"])){
    $seq = $_POST["seq"];
}

$success=0;

if($seq==null){
    try{
        $success=TeacherDataStore::saveTeacher($seq,$fullname ,$fathername,$dateofbirth,$gender,$mobilenumber, $fulladdress,$state,$city,$email,$password,$class,$section);
    }
    catch(Exception $e)
    {
       
       
        $success=0;
    }
}
else
{
    try{
        $success=TeacherDataStore::updateTeacher($seq,$fullname ,$fathername,$dateofbirth,$gender,$mobilenumber, $fulladdress,$state,$city,$email,$password,$class,$section);
    }
    catch(Exception $e)
    {
        $success=0;
    }
}

if($success==TRUE && $seq != 0)
{
    
    header("Location: ../teacherlist.php?updated=1");
    
}
else if($success==TRUE && $seq == 0)
{
    
   if(isset($_POST["AddNewTeacher"]))
   {
    echo "data saved";
    header("Location: ../add-teacher.php?success=1");
   }
   if(isset($_POST["saveButton"]))
   {
    echo "data saved";
    header("Location: ../teacherlist.php?success=1");
   }
    
}
?>
