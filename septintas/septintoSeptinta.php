<?php
    session_start();
    // Make sure a session variable exists
    if ( !isset($_SESSION['paspaudimo_sk']) ) {
        $_SESSION['paspaudimo_sk'] = 0;
    }
    // Check to see if a vote has been submitted
    $vote = isset($_POST['action']) ? $_POST['action'] : false;
    if ( $vote ) {
        // Increment the vote
        $_SESSION['paspaudimo_sk']++;
    }
    if ($_SERVER['REQUEST_METHOD'] == 'POST'){
        echo '<p style="background-color: yellow; height: 100vh; width: 100%"></p>';
        if($_SESSION['paspaudimo_sk'] == 2){
            $_SESSION['paspaudimo_sk'] = 0;
            header('Location: septintoSeptinta.php');
            die();
        } 
    } elseif($_SERVER['REQUEST_METHOD'] == 'GET') {
    echo '<p style="background-color: green; height: 100vh; width: 100%"></p>';
}
// print_r($_GET);
// print_r($_POST);
?>

<form action="" method="get">
<button name="action" value="get">Method get</button>
</form>
<form action="" method="post">
<button name="action" value="post">Method post</button>
</form>
<?php