<?php 
include('connection.php');
$con = connection();

$id = $_POST['id'];
$name = $_POST['name'];
$zone = $_POST['zone'];
$code_iso = $_POST['code_iso'];

$sql = "UPDATE paises SET name='$name', zone='$zone', code_iso='$code_iso' WHERE id='$id'";
$query = mysqli_query($con,$sql);

if($query){
    Header("Location: index.php");
};
?>