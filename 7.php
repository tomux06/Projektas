
<?php
$temperature = array('4', '3', '9', '19','19','9','12','20','24','20','12','14','18','21','20','23','16','16','15','19','19','17','17','15','12','13','13','15','19','21');
 array_sum($temperature);
$count = count($temperature);


$avg = array_sum($temperature) / $count;
echo round($avg);
echo '<br>';
echo '<br>';


?>

<?php
$temperature = array('4', '3', '9', '19','19','9','12','20','24','20','12','14','18','21','20','23','16','16','15','19','19','17','17','15','12','13','13','15','19','21');
rsort($temperature);
$number_length = count($temperature);
for ($x=0; $x < $number_length; $x++ ) {

    echo $temperature[$x];
    echo '<br>';   
   
}

$newArray = array_slice($temperature, 0, 5);
print_r($newArray);
echo '<br>';

?>

<?php
$temperature = array('4', '3', '9', '19','19','9','12','20','24','20','12','14','18','21','20','23','16','16','15','19','19','17','17','15','12','13','13','15','19','21');
sort($temperature);
$number_length = count($temperature);
for ($x=0; $x < $number_length; $x++ ) {

   
   
}

$newArray = array_slice($temperature, 0, 5);
print_r($newArray);


?>