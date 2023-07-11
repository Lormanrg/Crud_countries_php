<?php 
include('connection.php');
$con = connection();

$id = null;
$name = $_POST['name'];
$zone = $_POST['zone'];
$code_iso = $_POST['code_iso'];

$sql = "INSERT into paises VALUES('$id', '$name', '$zone', '$code_iso')";
$query = mysqli_query($con,$sql);

if($query){
    Header("Location: index.php");
};
?>