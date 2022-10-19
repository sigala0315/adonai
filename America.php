<?php
require_once('America2.php');

$a1=$_POST['Capital'];
$a2=$_POST['Idioma'];
$a3=$_POST['Moneda'];
$a4=$_POST['Nombre'];
$a5=$_POST['Poblacion'];
$a6=$_POST['Superficie'];

////////

$sql="INSERT INTO america (Nombre_oficial_del_pais,Capital,Superficie,Poblacion,Idioma_Oficial,Moneda) VALUES ('$a4','$a1','$a6','$a5','$a2','$a3')";

$p=mysqli_query($con,$sql);

if(!$p){
    echo'<p>no se pudo a llorar</p>';
}else{
        echo'<p> si mi perro a beber</p>';
    
}
?>