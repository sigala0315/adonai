<?php
    require_once('bonbones.php');
    error_reporting(0);

   $Nombrep=$_Post['Nombre'];
   $Capi=$_Post['Capital'];
   $Superficie=$_Post['Superf'];
   $Poblacion=$_Post['Poblac'];
   $Idioma=$_Post['Idiota'];
   $Moneda=$_Post['Peje'];

   echo($Nombrep.'<br>');
   echo($Capi.'<br>');
   echo($Superficie.'<br>');
   echo($Poblacion.'<br>');
   echo($Idioma.'<br>');
   echo($Moneda.'<br>');
    
   $sql=insert into america (Nombre_oficial,Capital,Superficie,Poblacion,Idioma,Moneda);

   $envio=mysqli_query($con,$sql);

?>
