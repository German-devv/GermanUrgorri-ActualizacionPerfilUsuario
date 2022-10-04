<?php


function DatosPerfil() {

    if (isset($_REQUEST['name']))               $name =              $_REQUEST['name'];
    
    if (isset($_REQUEST['lastname']))           $lastname =          $_REQUEST['lastname'];
    
    if (isset($_REQUEST['email']))              $email =             $_REQUEST['email'];
    
    if (isset($_REQUEST['country']))            $country =           $_REQUEST['country'];
    
    if (isset($_REQUEST['notificationCheck']))  $notificationCheck = $_REQUEST['notificationCheck'];


    $datosPerfil = fopen('datosPerfil.txt', 'w+');//creo o sustituyo el fichero 'datosPerfil.txt'

    fwrite($datosPerfil, "Nombre: $name" . "<br>" . PHP_EOL);//el 'PHP_EOL' sirve para crear un salto de linea en el fichero txt
    fwrite($datosPerfil, "Apellidos: $lastname" . "<br>" . PHP_EOL);
    fwrite($datosPerfil, "Correo electrónico: $email" . "<br>" . PHP_EOL);
    fwrite($datosPerfil, "País: $country" . "<br>" . PHP_EOL);
    fwrite($datosPerfil, "¿Notificaciones al correo?: $notificationCheck" . "<br>" . PHP_EOL);



    fclose($datosPerfil);


    echo ("<p>" . file_get_contents('datosPerfil.txt') . "</p>");
}
