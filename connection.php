<?php

function connection(){
    $host = "127.0.0.1:3307";
    $user =  "root";
    $pass = "";

    $bd = "crud-paises-php";

    $connect = mysqli_connect($host, $user, $pass);

    mysqli_select_db($connect, $bd);


    return $connect;

};

?>