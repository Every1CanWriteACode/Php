<?php
// $_GET['rose.php'] = 2;
$niekas = '';
if(!empty($_GET)) {
    if($_GET[$niekas] == ''){
        // echo 'labas';
        header('Location:pink.php');
        die();
        // exit;
    }
}
print_r($_GET);
echo '<p style="background-color: red; height: 100px; width: 100px"></p>';