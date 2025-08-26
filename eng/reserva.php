<?php  

$mail='reservaciones@countryhotel.com.mx';  

$name = $_POST['name'];  
$lastname = $_POST['lastname'];  
$address = $_POST['address'];  
$city = $_POST['city'];  
$zip = $_POST['zip'];  
$email = $_POST['email']; 
$phone = $_POST['phone'];  
$date01 = $_POST['date01'];  
$date02 = $_POST['date02'];  
$suite = $_POST['suite'];  
$num = $_POST['num'];  
$info = $_POST['info'];  

$thank="graciasreserva.php";  

$message = "  
Nombre: ".$name." 
Apellido: ".$lastname."  
Direccion: ".$address." 
Ciudad: ".$city." 
Codigo postal: ".$zip." 
email: ".$email."  
Telefono: ".$phone." 
Fecha llegada: ".$date01." 
Fecha salida: ".$date02." 
Habitacion: ".$suite." 
Personas: ".$num." 
Info adicional: ".$info." 
";  

if (mail($mail,"RESERVA Country Hotel & Suite",$message, "From: $email"))  
Header ("Location: $thank" ); 
 
?>

<?php  

$mail='gerencia@countryhotel.com.mx';  

$name = $_POST['name'];  
$lastname = $_POST['lastname'];  
$address = $_POST['address'];  
$city = $_POST['city'];  
$zip = $_POST['zip'];  
$email = $_POST['email']; 
$phone = $_POST['phone'];  
$date01 = $_POST['date01'];  
$date02 = $_POST['date02'];  
$suite = $_POST['suite'];  
$num = $_POST['num'];  
$info = $_POST['info'];  

$thank="graciasreserva.php";  

$message = "  
Nombre: ".$name." 
Apellido: ".$lastname."  
Direccion: ".$address." 
Ciudad: ".$city." 
Codigo postal: ".$zip." 
email: ".$email."  
Telefono: ".$phone." 
Fecha llegada: ".$date01." 
Fecha salida: ".$date02." 
Habitacion: ".$suite." 
Personas: ".$num." 
Info adicional: ".$info." 
";  

if (mail($mail,"RESERVA Country Hotel & Suite",$message, "From: $email"))  
Header ("Location: $thank" ); 
 
?>





<?php  

$mail='sergiot3rcio@gmail.com';  

$name = $_POST['name'];  
$lastname = $_POST['lastname'];  
$address = $_POST['address'];  
$city = $_POST['city'];  
$zip = $_POST['zip'];  
$email = $_POST['email']; 
$phone = $_POST['phone'];  
$date01 = $_POST['date01'];  
$date02 = $_POST['date02'];  
$suite = $_POST['suite'];  
$num = $_POST['num'];  
$info = $_POST['info'];  

$thank="graciasreserva.php";  

$message = "  
Nombre: ".$name." 
Apellido: ".$lastname."  
Direccion: ".$address." 
Ciudad: ".$city." 
Codigo postal: ".$zip." 
email: ".$email."  
Telefono: ".$phone." 
Fecha llegada: ".$date01." 
Fecha salida: ".$date02." 
Habitacion: ".$suite." 
Personas: ".$num." 
Info adicional: ".$info." 
";  

if (mail($mail,"RESERVA Country Hotel & Suite",$message, "From: $email"))
Header ("Location: $thank" ); 
 
?>

