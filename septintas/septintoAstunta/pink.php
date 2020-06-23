<?php
echo '<p style="background-color: pink; height: 100px; width: 100px"></p>';
if ($_SERVER['REQUEST_METHOD'] == 'POST'){
        header('Location: rose.php');
        exit;
    } 
?>
<form action="" method="post">
    <button name="action" value="previous">Mygtukas post</button>
</form>