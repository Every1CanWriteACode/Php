<?php

$galimos_raides = 'abcdefghjklmnoprstuvz';
    $pasirinkumu_deze = '';
    for ($i = 0; $i < rand(3,10); $i++) {

        $viena_raide = substr($galimos_raides, $i, 1);
        $pasirinkumu_deze .= "$viena_raide<input type='checkbox' name='$viena_raide' value='$viena_raide'><br>";
    
    }
    $pasirinkumu_deze .='<button name="variantuSkaiciu" value="'.$i.'">Mygtukas</button>';
    $background = 'black';
    $pasirinkti = '';
    $kiek_pazymetu = 0;
        if (isset($_POST['variantuSkaiciu'])) {
            $background = 'white';
            $pasirinkumu_deze = '';
            $pasirinkti = "Paspausta: <p> ".(count($_POST)-1)."</p> 
                        Variantu skaicius: <p> ".$_POST['variantuSkaiciu'] ."</p>";
        }
        
        echo "<div style='width: 50%; height: 50%; color: pink; background-color: $background'>";
        echo $pasirinkti;
        ?>
        <form action="" method="post">
        <?= $pasirinkumu_deze ?>
        </form>
        <?php
        echo '</div>';