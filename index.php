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
    <link rel="stylesheet" href="CSS/style.css">
</head>

<body>
    <div class= "paises-form">
        <form action="insert_paises.php" method="POST"> 
            <h1>Agregar País</h1>

            <input type="text" name="name" placeholder="Country">
            <input type="text" name="zone" placeholder="Zone">
            <input type="text" name="code_iso" placeholder="Code_iso">
            <input type="submit" value="Agregar país" >
        </form>
    </div>

    <div class="paises-table">
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

            <th><a href="update.php?id=<?= $row['id']?>" class="paises-table--edit">Editar</th>
            <th><a href="delete_paises.php?id=<?= $row['id']?>" class="paises-table--delete">Eliminar</th>
            </tr>
            <?php endwhile;?>
        </tbody>
        </table>
    </div>
</body>
</html>
