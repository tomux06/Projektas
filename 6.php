<?php
    $cities4 = array('Tokijas', 'Vasingtonas', 'Maskva', 'Berlynas');
    for ($x = 0; $x <=count($cities4); $x++) {
        echo "Elementu kiekis yra: $x <br>";
        
    }
?>

<?php
    $cities4 = array('Tokijas', 'Vasingtonas', 'Maskva', 'Berlynas');
    for ($x = 0; $x <=count($cities4); $x++) {
       
        echo '<li>', $cities4[$x]; 
    }
?>

<?php
foreach($cities4 as $city) {
    echo '<ul>', $city, '<br>';
}
?>