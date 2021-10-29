<?php
$handle = fopen("lista.txt", "r");
$fileip = fread($handle, filesize("lista"));
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