<?php
$link = mysqli_connect('localhost', 'carshop', 'carshop', 'carshop');
$sql = mysqli_query($link, 'SELECT * FROM `cars`');

$cars = [];
while($row = mysqli_fetch_assoc($sql)){
  $cars[] = $row;
}


?>
<html>
 <head>

  <meta charset="utf-8">
   <title>CARSHOP</title>
   <style>
   body {
    background: #123; /* Цвет фона */
    color: #fc0; /* Цвет текста */

   }
  </style>
  <link rel="stylesheet" type="text/css" href="assets/css/dopstyle.css">

 </head>
<body>
<?php require('header.php');?>

<?php foreach($cars as $car): ?>
  <div>
    <?=$car['name']?>
  </div>
<?php endforeach ?>
</body>
</html>
