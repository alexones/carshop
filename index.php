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
     font:normal 62.5%/1.5 Helvetica, Arial, sans-serif;
     letter-spacing:0;
     color:#434343;
     background:#efefef url(../img/background.png) repeat top center;
     padding:20px 0;
     position:relative;
     text-shadow:0 1px 0 rgba(255,255,255,.8);
     -webkit-font-smoothing: subpixel-antialiased;
   }

  </style>
  <link rel="stylesheet" type="text/css" href="assets/css/dopstyle.css">

 </head>
<body>
<?php require('header.php');?>

<?php foreach($cars as $car): ?>
  <div>
  <a href="/auto.php?id=<?= $car['id']?>"><?= $car['name']?></a>
  </div>
<?php endforeach ?>
<div id="footer">

  
</div>
</body>
</html>
