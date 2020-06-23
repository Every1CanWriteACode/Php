<?php
$bgColor = 'black';
if(!empty($_GET)) {
    if($_GET['color'] == 1){
        $bgColor = 'red';
    }
}

$link1 = '<a href=1.php>link1</a>';
echo '<br>';
$link2 = '<a href=1.php?color=1>link2</a>';

echo '<div style="width: 100%; height: 100vh; background-color:'.$bgColor.'">'.$link1.$link2.'</div>';
