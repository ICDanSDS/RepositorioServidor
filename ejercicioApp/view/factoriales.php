<html>
    <head>
        <title>Factorial</title>
    </head>
    <body>
        <?
        require('view/header.php');
        ?>
        <ul>
            <?php  
            foreach($lista as $elemento){
                echo "<li>$elemento</li>";
                
                
            }
            ?>
        </ul>
        
    </body>
</html>