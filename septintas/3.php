<form action="" method="get">
Input: <input type="text" name="spalva" value="spalva">
<button type="submit" name="action">I choose you!</button>
</form>
<?php

$bgColor = 'pink';
$spalva = '';
if(isset($_GET['spalva'])) {
        $spalva = urldecode($_GET['spalva']);
        $bgColor = $spalva;
}
echo '<div style="width: 100%; height: 100vh; background-color:'.$bgColor.'"></div>';

echo '<br>';