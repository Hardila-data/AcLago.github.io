<?php
 if (isset($_POST['nombre'])) && !empty($_POST['nombre']) &&(isset($_POST['apellido'])) && !empty($_POST['apellido']) &&(isset($_POST['email'])) && !empty($_POST['email'])&&(isset($_POST['cell'])) && !empty($_POST['cell'])&&(isset($_POST['mensaje'])) && !empty($_POST['mensaje'])){

       $destinatario="contactenos@aclago.com";
       $nombre= $_POST['nombre'];
       $apellido= $_POST['apellido'];
       $email= $_POST['email'];
       $mensaje= $_POST['mensaje'];
       $desde= "From:".$_POST['nombre'];


 	   mail($destinatario,$nombre,$mensaje,$desde);
 	   echo "correo enviado";

     } 
     else
     {
     	echo "correo no enviado";
     }
 	
 

?>