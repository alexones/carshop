<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">

	<title>Slides, A Slideshow Plugin for jQuery</title>
	<style type="text/css">
	#copyright {
		position: absolute;
		bottom: 1em;
}
</style>

	<script src="js/jquery-1.4.4.min.js"></script>
	<script src="js/slides.min.jquery.js"></script>
	<script>
		$(function(){
			$('#products').slides({
				preload: true,
				preloadImage: 'img/loading.gif',
				effect: 'slide, fade',
				crossfade: true,
				slideSpeed: 200,
				fadeSpeed: 500,
				generateNextPrev: true,
				generatePagination: false
			});
		});
	</script>
	<link rel="stylesheet" type="text/css" href="assets/css/dopstyle.css">
	<link rel="stylesheet" href="/assets/css/global.css">
</head>
<body>
	  <?php require('header.php');?><br>
			<p><center> Кузовной ремонт Skoda octavia .</center></p>
	<div id="container">
		<div id="products_example">
			<div id="products">
				<div class="slides_container">
				<img src="/assets/img/work/1.jpg" width="366" alt="1144953 3 2x">
				<img src="/assets/img/work/2.jpg" width="366" alt="1144953 1 2x">
					<img src="/assets/img/work/3.jpg" width="366" alt="1144953 2 2x">
				<img src="/assets/img/work/4.jpg" width="366" alt="1144953 4 2x">
					<<img src="/assets/img/work/5.jpg" width="366" alt="1144953 5 2x">

				</div>
				<ul class="pagination">
					<li><a href="#"><img src="/assets/img/work/1.jpg" width="55" alt="1144953 3 2x"></a></li>
					<li><a href="#"><img src="/assets/img/work/2.jpg" width="55" alt="1144953 1 2x"></a></li>
					<li><a href="#"><img src="/assets/img/work/3.jpg" width="55" alt="1144953 2 2x"></a></li>
					<li><a href="#"><img src="/assets/img/work/4.jpg" width="55" alt="1144953 4 2x"></a></li>
					<li><a href="#"><img src="/assets/img/work/5.jpg" width="55" alt="1144953 5 2x"></a></li>

				</ul>
			</div>
		</div>



	</div>
	<div id="copyright">

		<p>&copy; 2016 <a href="http://localhost:3000" target="_blank">Carshop.ru</a>.  by site Alexones!mutherfucker
	</div>
</body>
</html>
