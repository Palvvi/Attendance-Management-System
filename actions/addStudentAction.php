<?php
session_start();
require("../Datastore/studentdatastore.php");
$seq=null;
$fullName='null';
$fatherName='null';
$admissionNumber=null;
$rollNo=null;
$dateOfBirth=null;
$grade='null';
$section='null';
$gender='null';
$mobileNumber=null;
$fullAddress='null';
$state='null';
$city='null';
if(!empty($_POST["fullName"])){
    $fullName = $_POST["fullName"];
}
if(!empty($_POST['fatherName']))
{
    $fatherName = $_POST["fatherName"];
}
if(!empty($_POST['admissionNumber']))
{
    $admissionNumber = $_POST["admissionNumber"];
}
if(!empty($_POST['rollNo']))
{
    $rollNo = $_POST["rollNo"];
}
if(!empty($_POST['dateOfBirth']))
{
    $dateOfBirth = $_POST["dateOfBirth"];
}
if(!empty($_POST["grade"])){
    $grade = $_POST["grade"];
}
if(!empty($_POST["section"])){
    $section = $_POST["section"];
}
if(!empty($_POST["gender"])){
    $gender = $_POST["gender"];
}
if(!empty($_POST["mobileNumber"])){
    $mobileNumber = $_POST["mobileNumber"];
}
if(!empty($_POST["fullAddress"])){
    $fullAddress = $_POST["fullAddress"];
}
if(!empty($_POST["state"])){
    $state = $_POST["state"];
}
if(!empty($_POST["city"])){
    $city = $_POST["city"];
}
if(!empty($_POST["seq"])){
    $seq = $_POST["seq"];
}
$success=0;

if($seq==null){
    try{
        $success=StudentDataStore::saveStudent($seq, $fullName,$fatherName,$admissionNumber,$rollNo,$dateOfBirth, $grade,$section,$gender,$mobileNumber,$fullAddress,$state,$city);
    }
    catch(Exception $e)
    {
        $success=0;
    }
}
else
{
    try{
        $success=StudentDataStore::editStudent($seq, $fullName,$fatherName,$admissionNumber,$rollNo,$dateOfBirth, $grade,$section,$gender,$mobileNumber,$fullAddress,$state,$city);
    }
    catch(Exception $e)
    {
        $success=0;
    }
}

if($success==TRUE && $seq != 0)
{
    echo "hello";
    header("Location: ../studentlist.php?updated=1");
    
}
else if($success==TRUE && $seq == 0)
{
if(isset($_POST["addnewstudent"]))
   {

    header("Location: ../add-student.php?success=1");
   }
   if(isset($_POST["savebutton"]))
   {
    $_SESSION["class"]=$_POST['grade'];
    $_SESSION["sortby"]=null;
    $_SESSION["section"]=$_POST['section'];
    header("Location: ../studentlist.php?success=1");
   }
    
}
?>
