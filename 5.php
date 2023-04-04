<?php
$years = 1774;


$cities = [
    'Tokijas' =>'13,6',
    'Vasingtonas'=>'1790',
    'Maskva'=>'11,5'
  ];

if ($years>$cities['Vasingtonas']) {
    echo 'Vasingtonas yra Jav sostine';
} elseif ($years==$cities['Vasingtonas']) {
    echo 'Jav sostine visdar Filadelfijoje';
} else {
    echo 'Liko ' . $cities['Vasingtonas'] - $years . ' metu iki Vasingtono ikurimo.';
}
?>