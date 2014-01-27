<?php include_once "init.php" ?><?php include_once "inc/core.php" ?><!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>TV Screen app</title>
<link rel="stylesheet" type="text/css" href="css/main.css">
<?php include_once "inc/tv-app.php" ?>
<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/main.js"></script>
<style>
*{
	padding:0;
	margin:0;
}
*, *:before, *:after {
  -moz-box-sizing: border-box; -webkit-box-sizing: border-box; box-sizing: border-box;
 }
body, html{
	height:100%;
}
body{
	width:100%;
	background:#fff;
}
header{
	width:100%;
	background:#4E4C4C;
	background:url(img/shape-bg.jpg);
	height:15.74074074074074%;
}
.logo{
	position:absolute;
	width:325px;
	
	
	z-index:2000;
	left:10px;
}
.mid{
	position:relative;
	height:72.77777777777777%;
}
.sidebar, .main{
	height:100%;
}
.A{
	/*height:72.77777777777777%;*/
	height:100%;
}
.B{
	height:50%;
}
.C{
	height:50%;
}
.weather{
	background: #f19a33;
}
.clock{
	background:#f19a33;
	height:100%;
	position:relative;
	
}
.test{
	border:1px solid white;
}
footer{
	height:11.481481481481481%;
	width:100%;
	background:#7C7C7C;
	position: relative;
	z-index: 1000;
	background:url(img/shape-bg.jpg);
}

.forecast_embed{
	position: relative;
	top: -16px;
}

.A .carousel {
	position: relative;
	top: -25px;
}


.carousel, .carousel-inner, .item{
	height:100%;
}

					
					
					
</style>
</head>

<body>

<header>
<img class="logo" src="img/logo.png" alt=""/>
</header>
<div class="grid-row mid">
	<div class="colspan-9 main">
		<div class="A shadow-inset">
				<div id="myCarousel" class="carousel slide">
				<div class="carousel-inner">
			
					<?php loadSlide(1); ?>

				</div>
		</div>
		</div>
	</div>
	<div class="colspan-3 sidebar">
		<div class="B table">
			<div class="cell">
				<div id="myCarouselB" class="carousel slide carousel-fade ">				
							<div class="carousel-inner">

							<?php loadSlide(2); ?>

							</div>
					</div>
			</div>
		</div>
		
		
		
		
		
		
		
<!--		<div class="C table weather">
			<div class="cell">
			<iframe id="forecast_embed" type="text/html" frameborder="0" height="200" width="70%" src="http://forecast.io/embed/#lat=43.752187&lon=-88.420715&name=Fond du Lac, Wi"> </iframe>
			</div>
		</div>-->
		
		
<!--	<div id="myCarouselC" class="carousel slide carousel-fade">
				<div class="carousel-inner">
					<div class="active item">
						<div class="C table">
			<div class="cell">
					<div class="clock">
						<iframe scrolling="no" frameborder="0" style="overflow:hidden;border:0;margin:0;padding:0;width:300px;height:300px;" src="http://www.clocklink.com/html5embed.php?clock=001&timezone=CST&color=orange&size=300"></iframe>
					</div>
			</div>
		</div>
					</div>
					<div class="item">
						<div class="C table weather">
			<div class="cell">
			<iframe id="forecast_embed" type="text/html" frameborder="0" height="200" width="70%" src="http://forecast.io/embed/#lat=43.752187&lon=-88.420715&name=Fond du Lac, Wi&color=#fff"> </iframe>
			</div>
		</div>
					</div>
				</div>
		</div>	-->
			
		

		
		<div class="C table">
			<div class="cell">
			
	
					<?php loadSlide(3); ?>
		

					
			</div>
		</div>
		
		
		
		
		
		
		
		
		
		
		
	</div>
</div>
<footer>

</footer>

<script>
$('#myCarousel').carousel({
  interval: 3500
})
$('#myCarouselB').carousel({
  interval: 3000
})
$('#myCarouselC').carousel({
  interval: 5000
})
</script>
</body>
</html>
