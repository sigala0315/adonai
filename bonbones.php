<?php
    $con=mysqli_connect('127.0.0.1','root','','planeto_tierra_jose');
    error_reporting(0);
    if(!$con){
        echo('<p>tu conexion falla</p>');
    }else{
        echo('<p>tu conexion es exitosa</p>'); 
    }

?>
