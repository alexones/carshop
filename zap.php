<html>
 <head>

  <meta charset="utf-8">
   <title>CARSHOP Контакты</title>
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
  <table width="50%" border=0 align="center" class="td_border">
<tr>
<td bgcolor='#2275AD'><p align="center" class="title">Для записи на приём, заполните следующую форму:</td>
</tr>
<tr align="center" valign="top">
<tr>
<td bgcolor='#F6F6F6'>
<form action='mail2.php' method='POST' name='form' target='_blank'>
<p style='font-family: Verdana; font-size: 8pt; color: #000000; font-weight: bold;'>Ваше имя:<br>
<input name='name' type='text' size='30'></p>
<p style='font-family: Verdana; font-size: 8pt; color: #000000; font-weight: bold;'>Ваш e-mail:<br>
<input name='email' type='text' size='30'></p>
<p style='font-family: Verdana; font-size: 8pt; color: #000000; font-weight: bold;'>Ваше сообщение:<br>
<textarea name='mess' rows='5' cols='50'></textarea>
<p><input name='submit' type='submit' style='font-family: Verdana; font-size: 8pt; color: #ffffff; background-color: #6699cc; font-weight: bold;' value='Отправить сообщение'>

<input name='Reset' type='reset' style='font-family: Verdana; font-size: 8pt; color: #ffffff; background-color: #6699cc; font-weight: bold;' value='Очистить форму'></p>
</form>
</td>
</tr>
</table>
</body>
</html>
