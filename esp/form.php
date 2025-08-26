<?php  

$mail='gerencia@countryhotel.com.mx';  

$nombre = $_POST['nombre'];  
$email = $_POST['email']; 
$mensaje = $_POST['mensaje'];  

$thank="gracias.php";  

$mensaje = "  
Nombre: ".$nombre."  
email: ".$email."  
Mensaje: ".$mensaje." 
";  

if (mail($mail,"Formulario Country Hotel & Suites",$mensaje, "From: $email"))  
Header ("Location: $thank" ); 
 
?>

<?php  

$mail='sergiot3rcio@gmail.com';  

$nombre = $_POST['nombre'];  
$email = $_POST['email']; 
$mensaje = $_POST['mensaje'];  

$thank="gracias.php";  

$mensaje = "  
Nombre: ".$nombre."  
email: ".$email."  
Mensaje: ".$mensaje." 
";  

if (mail($mail,"Formulario Country Hotel & Suites",$mensaje, "From: $email"))  
Header ("Location: $thank" ); 
 
?>