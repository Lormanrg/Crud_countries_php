<?php 
include('connection.php');
$con = connection();

$id = null;
$country = $_POST['country'];
$zone = $_POST['zone'];
$code_iso = $_POST['code_iso'];

$sql = "INSERT INTO paises VALUES('$id','$country','$zone','$code_iso')";
$query = mysqli_query($con,$sql);

if($query){
    Header("Location: index.php");
};
?>