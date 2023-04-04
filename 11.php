



<!DOCTYPE html>
 <html lang="en">
 <head>
    <style>
        form {
            margin-top: 200px;
        }
    </style>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
 </head>
 <body>

 <?php
if(isset($_POST['submit'])) {

    $name=$_POST['fname'];
    $lname=$_POST['lname'];
    $hide=1;
    echo 'Thank you';



}
?>
<?php if(!isset($hide)) {?>


    <form action ="11.1.php" method = "POST">
        Vardas <input type ="text" name ="fname" required><br>
        Pavarde <input type ="text" name ="lname" required><br>
        <input type="submit" value="Submit">
    </form>
<?php }?>
 </body>
 </html>