<?PHP
    require_once('America2.php');
    error_reporting(0);


   $User=$_POST['Usuario'];
   $Contro = $_POST ['contraseña']; 
   $Contrañoña = password_hash ($Contro, PASSWORD_BCRYPT, ['cost'=>15]);

    
   $sql="insert into usuarios (Usuario,Contraseña)values('$User','$Contrañoña')";

   $envio=mysqli_query($con,$sql);
   header("Location: index.html"); 
?>