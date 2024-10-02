<html>
    <head> 
        <titule>Ejercicio 2</titule>
    </head>
    <body>
        <?php
            $nombre = "Juan";
            $direccion = "Calle falsa";
            $mail = "correo@correo.com";
        ?>
        <table>
            <tr>
                <th>Nombre</th>
                <th>Dirección</th>
                <th>Mail</th>
            </tr>
                <td>
                    <?php
                    echo "$nombre";
                    ?>
                </td>
                <td>
                    <?php
                    echo "$direccion";
                    ?>
                </td>
                <td>
                    <?php
                    echo "$mail";
                    ?>
                </td>
            <tr>

            </tr>
        </table>       
    </body>
</html>