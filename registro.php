<?php
    require_once('America2.php');
    error_reporting(0);

   $Nombrep=$_POST['Nombre'];
   $Capi=$_POST['Capital'];
   $Superficie=$_POST['Superf'];
   $Poblacion=$_POST['Poblac'];
   $Idioma=$_POST['Idiota'];
   $Moneda=$_POST['Peje'];
    
   $sql="insert into america (Nombre_oficial,Capital,Superficie,Poblacion,Idioma,Moneda)
   values('$Nombrep','$Capi','$Superficie','$Poblacion','$Idioma','$Moneda')";

   $envio=mysqli_query($con,$sql);

?>