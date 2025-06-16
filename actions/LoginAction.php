<?php
require_once("../Datastore/teacherdatastore.php");

$username= 'null';
$password= 'null'; 

 if($_SERVER["REQUEST_METHOD"] == "POST"){

    if(!empty($_POST["username"])){
     $username= $_POST["username"]  ;
    }
    
    if(!empty($_POST["password"])){
     $password= $_POST["password"] ;
    }
    
  }  
  try{
    $arr = TeacherDataStore::loginTeacher($username, $password);
    if($arr){
        session_start();
        $_SESSION['username'] = $arr['name'];
        $_SESSION['userseq'] = $arr['seq'];
        $_SESSION['isadmin'] = $arr['isadmin'];
        $_SESSION['classassign'] = $arr['classassign'];
        $_SESSION['classsection'] = $arr['classsection'];
        header("Location:../allmodule.php");
    }else{
        header("Location:../login.php");
    }
  }catch(Exception $e){
    $msg = $e->getMessage();
    header("Location:login.php?success=0");
    exit();
  }
    
?>
