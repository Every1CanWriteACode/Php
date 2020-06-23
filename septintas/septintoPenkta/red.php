<?php
if(!empty($_GET)) {
    if($_GET['file'] = blue.php){
        header('Location: blue.php');
        exit;
    }
}
?>
<a style="background-color:red; width: 50px; height: 50px" href="red.php?file=blue.php">Nuoroda i save. As esu raudonas</a>