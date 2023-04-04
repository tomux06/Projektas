<?php
$cities = array('Berlynas', 'Roma', 'Londonas');
print_r($cities);
?>
<br>
<?php
            $cities = [
              'Tokijas' =>'13,6',
              'Vasingtonas'=>'0,6',
              'Maskva'=>'11,5'
            ];
            $cities["Londonas"] ="8,6";
           
           
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <ul>
        <li>
        <?php
            $cities = array('Berlynas', 'Roma', 'Londonas');
            $cities[] = 'Tokijas';
            echo $cities[1];
            ?>
        </li>
    </ul>
    <ul>
        <li>
        <?php
            $cities = [
                'Tokijas' =>'13,6',
                'Vasingtonas'=>'0,6',
                'Maskva'=>'11,5'
              ];
              $cities["Londonas"] ="8,6";
            echo 'Gyventoju skaicius:' . $cities['Tokijas'];  
           
 ?>
        </li>
    </ul>
</body>
</html>