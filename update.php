<?php
include('connection.php');
$con = connection();

$id=$_GET['id'];
$sql= "SELECT * FROM paises where id='$id'";
$query = mysqli_query($con,$sql);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modificar Pais</title>
</head>
<body>
<div class= "paises-form">
        <form action="edit_paises.php" method="POST"> 
            <h1>Editar País</h1>
            <input type="hidden" name="name" placeholder="ID" value="<?= $row['id']?>">
            <input type="text" name="name" placeholder="Country" value="<?= $row['name']?>">
            <input type="text" name="zone" placeholder="Zone" value="<?= $row['zone']?>">
            <input type="text" name="code_iso" placeholder="Code_iso" value="<?= $row['code_iso']?>">
            <input type="submit" value="Actualizar información" >
        </form>
    </div>
</body>
</html>