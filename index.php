<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actualización de perfil</title>
</head>

<body>
    <?php include('server.php') ?>
    <style>
        td {
            max-width: 200px;
            padding: 10px;
        }
    </style>


    <h1>Actualización de perfil de usuario</h1>

    <form action="index.php" method="REQUEST">
        <p>Vamos a crear un formulario HTML que permita actualizar el perfil de un usuario. Al acceder al formulario se deben cargar los datos actuales del perfil.</p>
        <p>Dichos datos están almacenados en un fichero de texto (datosPerfil.txt). </p>
        <p>Cuando el usuario actualice esta información, se deben guardar los cambios en el fichero de texto.</p>

        <p> Si el fichero no existe se entiende que el usuario todavía no tiene registrado ningún perfil y por lo tanto se mostrarán los campos vacíos.</p>
        Nombre.
        Apellidos.
        Correo electrónico.
        País (un desplegable que incluye 3 países: España, Francia y Portugal.
        Notificaciones por email (un radio buttom con dos valores: "Sí" y "No")
        <table>
            <tr>
                <td><label for="name">Nombre:</label></td>
                <td><input type="text" name="name" id="name" required><br></td>
            </tr>

            <tr>
                <td> <label for="lastname">Apellidos:</label></td>
                <td><input type="text" name="lastname" id="lastname" required></td>
            </tr>

            <tr>
                <td> <label for="email">Correo electrónico:</label></td>
                <td> <input type="email" name="email" id="email" required><br></td>
            </tr>

            <tr>
                <td> <label for="country">Escoja su país:</label> </td>
                <td>
                    <select name="country" id="country">

                        <option value="España">España</option>
                        <option value="Portugal">Portugal</option>
                        <option value="Francia">Francia</option>

                    </select>

                </td>
            </tr>


            <td colspan="2"><label for="si">¿Quieres que te enviemos notificaciones al correo?</label><br>

                <input type="radio" name="notificationCheck" value="si" id="si" checked="checked"><label for="si">Sí</label> <br>
                <input type="radio" name="notificationCheck" value="no" id="no"><label for="no">No</label><br>

            </td>
        </table>


        <br><input type="submit" value="Crear usuario">


        <?php DatosPerfil() ?>

    </form>
</body>

</html>