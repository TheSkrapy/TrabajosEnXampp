<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link rel="stylesheet" type="text/css" href="/Practica1cUnidad4php/CSSPractica25.css">
    </head>
    <body background="/Practica1cUnidad4php/fondo3.jpeg">
        
        <header>
        <?php
    $arrayfruta=array("Cumpleaños","Videos","Photoshop","Revelado","Digitalizacion","Marcos","Bodas","Graduaciones","Sesiones","Fotos");
    sort($arrayfruta);
    foreach($arrayfruta as $key=>$val){
        echo "&nbsp;&nbsp;Servicio[$key]=$val<br><br>";
    }
    ?>
    </header>
    
</body>
</html>
        
    </body>
</html>
