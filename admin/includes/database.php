<?php 
$conn=mysqli_connect('localhost','root','');
mysqli_select_db($conn,'php_employee_project');

if(!$conn){
    die("Connection error: ".mysqli_connect_error());

}
?>
