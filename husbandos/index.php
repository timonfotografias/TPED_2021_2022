<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="css/styles.css">
        <title>Husbandos.es</title>
        <link rel="icon" href="img/favicon.png">
    </head>
    <body>
        <h1>Husbandos.es</h1>
        <h2>O lo que es lo mismo, mis personajes favoritos de anime.</h2>
        
        <!-- display flex colums márgenes laterales del 10%?-->
        <div id="galeria">

            <!--Display block, with 25%-->
            <?php
            $handle = fopen("img/lista.txt", "r");
            $fileip = fread($handle, filesize("img/lista.txt"));
            fclose($handle);
            $array=explode(", ", $fileip);

            /*print_r($array);*/

            for($i = 0; $i < count($array); $i++){
                echo '<a target="_blank" href="#" id="'.$array[$i].'">';
                echo '<article>';
                echo '<img src="img/'.$array[$i].'.jpg" title="'.$array[$i].'" alt="'.$array[$i].'"/>';
                echo '<figcaption>'.$array[$i].'</figcaption>';
                echo '</article>';
                echo '</a>';
            }
            ?>

            
        </div>
    </body>
</html>