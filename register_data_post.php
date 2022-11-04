<?php 
session_Start();

//name validation

$name = $_POST['name'];

if(empty($name)){
    $_SESSION['nameError'] = 'Please Enter Your Name';
    header('location:register.php');
}else{
    
}

































?>