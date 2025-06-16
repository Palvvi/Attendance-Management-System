<?php

session_start();
if(isset($_SESSION) && !empty($_SESSION)){

}else{
    header('Location:login.php');
}
?>