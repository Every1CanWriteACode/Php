<?php
// antras veikia tik klaida meta
$bgColor = 'pink';
$color = '';
    if(isset($_GET['color'])){
        $color = urldecode($_GET['color']);
        $bgColor = $color;
        }
    

$link1 = '<a href=2.php>pirmas</a>';
echo '<br>';
$link2 = '<a href=2.php?color='.$color.'>antras</a>';


echo '<div style="width: 100%; height: 100vh; background-color:'.$bgColor.'">'.$link1 .'</div>';
