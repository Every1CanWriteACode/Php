
<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    echo '<p style="background-color: yellow; height: 100vh; width: 100%"></p>';
} elseif($_SERVER['REQUEST_METHOD'] == 'GET') {
    
    echo '<p style="background-color: green; height: 100vh; width: 100%"></p>';
}
?>

<form action="" method="get">
<button>Method get</button>
</form>
<form action="" method="post">
<button>Method post</button>
</form>
