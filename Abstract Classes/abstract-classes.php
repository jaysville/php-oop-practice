<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
       require 'DataModel.php';
       require 'Product.php';
       require 'User.php';


      $user = new User();

      $user->save();

       



    ?>
</body>
</html>