<?php
$car_id = $_GET['id'];

$link = mysqli_connect('localhost', 'carshop', 'carshop', 'carshop');
$sql = mysqli_query($link, "SELECT * FROM `cars` WHERE id=$car_id");
$car = mysqli_fetch_assoc($sql)
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

<?=$car['name']?><br>
<img src="/assets/img/cars/<?=$car['picture']?>" width="320" height="200" />
</body>
</html>
