<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <a href="?reset=true">Reset</a>

</body>
</html>
<?php
//Ejercicio contador de visistas
if (!isset($_COOKIE["VISITAS"])) {
    //Isset: MIra si tienes una variable y ve ese  valor
    //El usuario se ha metido por primera vez en la pagina
    setcookie("VISITAS","1",time()+3600*24);
    //Setcookie crea una coockie
    //Consta de tres parametros:
    /*
    Primer parametro:  nombre de la cookie
    Segundo parametro: valor de la cookie
    Tercer parametro: tiempo de vida de la cookie
    */
    echo "Pagina visitada por primera vez";

}else  {
    if (isset($_GET["reset"])){
        if($_GET["reset"] == true){
            setcookie("VISITAS"," ",time() - 1);
            echo "La cookie ha sido reseteada";
        }
    }
   /* if (isset($_GET["reset"]) && $_GET["reset"] == true ) {
            setcookie("VISITAS"," ",time() - 1);
            echo "La cookie ha sido reseteada";
    }  
   */
   else{
        //EL usuario se ha metido varias veces en la pagina 
    $visitas =  (int)$_COOKIE["VISITAS"];
    $visitas++;
    setcookie("VISITAS",$visitas,time()+3600*24);
    echo "Pagina visitada ".$_COOKIE["VISITAS"]." veces";

    }

} 