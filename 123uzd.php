<?php
    //echo 'Zdarova';
   // print_r([1,2,3]);
   //var_dump('Hello');
   //var_dump(true);
   //var_export('Hello');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=
    , initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<ul>
   <li> <?php
    $salis = 'Lietuva';
   
    echo $salis;
    ?> 
    </li>

    <li>
    <?php
     $miestas ='Vilnius';
     
     echo $miestas;
    ?>
    </li>
    <li>
    <?php
         $populiacija ="546212";
         echo $populiacija;
    ?>
    </li>


    <?php
    echo $miestas . ' Lietuvos sostine.';
    
    ?>
    <br>
    <?php
      echo "$miestas ir $salis sparciai auga.";
    ?>
   <br>

    <?php
   $x=10; $y=7; $z=0;
  echo  $z=$x+$y;
    ?><br>
        <?php
   $x=10; $y=7; $z=0;
 
  echo  $z=$x-$y;
    ?><br>
        <?php
   $x=10; $y=7; $z=0;
 
  echo  $z=$x*$y;
    ?><br>
        <?php
   $x=10; $y=7; $z=0;
 
  echo  $z=$x/$y;
    ?><br>
        <?php
   $x=10; $y=7; $z=0;
 
  echo  $z=$x%$y;
    ?>
</ul>
</body>
</html>