<?php
include('connection.php');

$con = connection();

$sql = "SELECT * FROM paises";
$query = mysqli_query($con,$sql);


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ingrese el país</title>

</head>

<body>
    <div>
        <form action="insert_paises.php" method ="POST"> 
            <h1>Agregar País</h1>
            <input type="text" country="country" placeholder="Country">
            <input type="text" zone="zone" placeholder="Zone">
            <input type="text" code_iso="code_iso" placeholder="Code_iso">
            <input type="submit" value="Agregar país" >
        </form>
    </div>

    <div>
        <h2>Paises Registrados</h2>
        <table>
            <thead>
                <tr>
                    <th>ID </th>
                    <th>Country</th>
                    <th>Zone</th>
                    <th>Code_iso</th>
                    <th></th>
                    <th></th>
                </tr>
            </thead>
        
        <tbody>
            <?php while($row= mysqli_fetch_array($query)):?>
            <tr>
            <th><?= $row['id']?></th>
            <th><?= $row['name']?></th>
            <th><?= $row['zone']?></th>
            <th><?= $row['code_iso']?></th>
            <th><a href="">Editar</th>
            <th><a href="">Eliminar</th>
            </tr>
            <?php endwhile;?>
        </tbody>
        </table>
    </div>
</body>
</html>
