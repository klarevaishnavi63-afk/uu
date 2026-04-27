<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
<head>
<title>Fashion plus A Fashion Category Flat Bootstarp Resposive Website Template | Services :: w3layouts</title>
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="js/jquery.min.js"></script>
<!-- Custom Theme files -->
<!--theme-style-->
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />	
<!--//theme-style-->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Fashion plus Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!--script-->
<link href="css/animate.css" rel="stylesheet" type="text/css" media="all">
<script src="js/wow.min.js"></script>
<script>
 	new WOW().init();
</script>
<!--//script-->
</head>
<body>
		<!-- top-header -->
		<div class="top-header about-header">
			<h1><a href="index.php">urban vouge <span>+</span></a></h1>
			<img class="img-responsive" src="images/li.png">
		</div>	
		<!-- top-header -->
			<div class="header">
					<div class="sticky-navigation">
					<div class="fixed-header">
						<div class="container">
							<div class="top-menu">
								<span class="menu"><img src="images/menu1.png"> </span>
					            <ul>
					            	<li ><a href="index.php">Home</a></li>
					                <li><a href="about.php">collections</a></li>
					                <li class="active"><a href="services.php">Services</a></li>
					                <li><a href="portfolio.php">product buys</a></li>
					                <li><a href="contact.php">Contact Us</a></li>
					            </ul>
				            </div>
							<script>
								$("span.menu").click(function(){
									$(".top-menu ul").slideToggle(500, function(){
									});
								});
							</script>
				            <!-- search -->
				            <div class="top-search">
				            	<form>
				            		<input type="text">
				            		<input type="submit" value="" />
				            	</form>
				            </div>
				            <div class="clearfix"> </div>
				            <!-- search -->
				          </div>
						  </div>
			        </div>
				</div>
			<!-- header -->
					<!-- script-for sticky-nav -->
		<script>
		$(document).ready(function() {
			 var navoffeset=$(".header").offset().top;
			 $(window).scroll(function(){
				var scrollpos=$(window).scrollTop(); 
				if(scrollpos >=navoffeset){
					$(".header").addClass("fixed");
				}else{
					$(".header").removeClass("fixed");
				}
			 });
			 
		});
		</script>

			<!-- Services -->
			<div class="services">
				<div class="container">
						<div class="services-top ">
					<div class="services-head text-center">
							<h2>the promise from urban vouge</h2>
							<p>Focused on confidence, comfort, and personal expression</p>
					</div>
			<div class="service-top">
				<div class="col-md-8 service-left">
					<div class="service-head">
						<h3>What We Do</h3>
					</div>
					<div class="service-bottom">
						<div class="col-md-6 ser-left">
							<a href="#" class="mask"><img class="img-responsive zoom-img" src="images/lm.jpg" alt=""></a>
						</div>
						<div class="col-md-6 ser-left">
							<a href="#" class="mask"><img class="img-responsive zoom-img" src="images/ml.jpg" alt=""></a>
						</div>
						<div class="clearfix"></div>
					</div>
					<h4>Streetwear and luxury brands often use dark, clean, high-contrast layouts to make product imagery popElevate your wardrobe with our curated fashion lines, blending timeless elegance with modern .</h4>
					<p>get 20%off on western dresses</p>
				</div>
				<div class="col-md-4 service-right">
					<div class="service-head">
						<h3>Advantages</h3>
					</div>
					<div class="ser-bottom">
						<div class="ser-bottom-one">
							<div class="ser-one">
								<h4>01.</h4>
							</div>
							<div class="ser-two">
								<h4>trendy collections</h4>
								<p>stay ahead with latest fashion trends curated just for you.</p>
							</div>
							<div class="clearfix"></div>
						</div>
						<div class="ser-bottom-one">
							<div class="ser-one">
								<h4>02.</h4>
							</div>
							<div class="ser-two">
								<h4>premium quality </h4>
								<p>we ensure high qulity fabrics that feel as good as they look</p>
							</div>
							<div class="clearfix"></div>
						</div>
						<div class="ser-bottom-one">
							<div class="ser-one">
								<h4>03.</h4>
							</div>
							<div class="ser-two">
								<h4>affordable style</h4>
								<p>look stylish without spending too much fashion for every budget.</p>
							</div>
							<div class="clearfix"></div>
						</div>
					</div>
				</div>
				<div class="clearfix"></div>
			
		</div>
	</div>
					</div>
					<!-- services-grids -->
					<div class="service">
			<div class="service-top">
				<div class="col-md-8 service-left">
					<div class="service-head">
					<?php
$images = [
  "images/pin.jpg",
  "images/llp.jpg",
  "images/lm.jpg"
];
?>

<style>
.slider {
  position: relative;
  width: 100%;
  height: 500px;
  overflow: hidden;
}

.slide {
  display: none;
  width: 100%;
  height: 500px;
  object-fit: cover;
}

.active {
  display: block;
}

/* Buttons */
.prev, .next {
  position: absolute;
  top: 50%;
  transform: translateY(-50%);
  font-size: 25px;
  background: rgba(0,0,0,0.5);
  color: white;
  padding: 10px;
  cursor: pointer;
  border: none;
}

.prev { left: 10px; }
.next { right: 10px; }

/* Dots */
.dots {
  text-align: center;
  position: absolute;
  bottom: 10px;
  width: 100%;
}

.dot {
  height: 12px;
  width: 12px;
  margin: 5px;
  display: inline-block;
  background: #ccc;
  border-radius: 50%;
  cursor: pointer;
}

.dot.active {
  background: #ff4d6d;
}
</style>

<div class="slider">

  <?php foreach($images as $index => $img): ?>
    <img src="<?php echo $img; ?>" class="slide <?php if($index==0) echo 'active'; ?>">
  <?php endforeach; ?>

  <!-- Buttons -->
  <button class="prev" onclick="changeSlide(-1)">❮</button>
  <button class="next" onclick="changeSlide(1)">❯</button>

  <!-- Dots -->
  <div class="dots">
    <?php foreach($images as $index => $img): ?>
      <span class="dot <?php if($index==0) echo 'active'; ?>" onclick="currentSlide(<?php echo $index; ?>)"></span>
    <?php endforeach; ?>
  </div>

</div>

<script>
let slides = document.querySelectorAll(".slide");
let dots = document.querySelectorAll(".dot");
let index = 0;

function showSlide(i) {
  slides.forEach(s => s.classList.remove("active"));
  dots.forEach(d => d.classList.remove("active"));

  slides[i].classList.add("active");
  dots[i].classList.add("active");
}

function changeSlide(n) {
  index += n;
  if(index >= slides.length) index = 0;
  if(index < 0) index = slides.length - 1;
  showSlide(index);
}

function currentSlide(n) {
  index = n;
  showSlide(index);
}

/* Auto Slide */
setInterval(() => {
  changeSlide(1);
}, 3000);
</script>
					<!-- about-latest-news -->
						<div class="about-latest-news">
							<div class="about-head text-center wow fadeIn" data-wow-delay="0.5s">
								<h3>Fashions fade, style is eternal </h3>
								<p>we create fashion that speaks your personalities </p>
							</div>
							<!-- about-latest-news-grids -->
							<div class="about-latest-news-grids text-center">
								<div class="col-md-4 about-latest-news-grid   wow fadeInLeft" data-wow-delay="0.4s">
									<a href="#" class="mask"><img class="img-responsive zoom-img" src="images/buy.jpg" title="name" />
									</a>
									<p style="color:red;">₹999"</p>
									<a href="cart.php?id=2&name=Denim&price=999" class="btn btn-primary">Add to Cart</a>
                                    <a href="buy.php?id=2&price=999" class="btn btn-success">Buy Now</a>
									<h4>off shoulder dresses</h4>
									<p>experience our curated party wear line that blends classic style with modern flair each piece is crafted for comfort and bold expression.</p>
								</div>
								<div class="col-md-4 about-latest-news-grid wow fadeIn" data-wow-delay="0.5s">
									<a href="#" class="mask"><img class="img-responsive zoom-img" src="images/jean.jpg" title="name" />
									</a>
									<p style="color:red;">₹999"</p>
									<a href="cart.php?id=2&name=Denim&price=999" class="btn btn-primary">Add to Cart</a>
                                    <a href="buy.php?id=2&price=999" class="btn btn-success">Buy Now</a>
									<h4>denim glamour</h4>
									<p>intro ducing our denim essentials that mix rugged texture with sleek elevate your wardrobe with our premium denim collection </p>
								</div>
								<div class="col-md-4 about-latest-news-grid  wow fadeInRight" data-wow-delay="0.4s">
									<a href="#" class="mask"><img class="img-responsive zoom-img" src="images/srt.jpg" title="name" />
									</a>
									<p style="color:red;">₹999"</p>
									<a href="cart.php?id=2&name=Denim&price=999" class="btn btn-primary">Add to Cart</a>
                                    <a href="buy.php?id=2&price=999" class="btn btn-success">Buy Now</a>
									<h4>street style </h4>
									<p>presenting our elegant pastel dresses that capture soft sophistication. the lightweight fabric and refined cut make them ideal for chic daytime looks.</p>
								</div>
								<div class="clearfix"> </div>
							</div>
							<!-- about-latest-news-grids -->
						</div>
						<!-- about-latest-news -->
						<!---- about-latest-news -->
						</div>
						<!-- Services-latest-news-->
				</div>
			<!-- Services -->
			<!--soical-share -->
			<div class="social-share text-center">
				<div class="container">
					<h3>Catch on</h3>
					<ul>
						<li><a class="facebook" href="#"><span> </span></a></li>
						<li><a class="twitter" href="#"><span> </span></a></li>
						<li><a class="dribble" href="#"><span> </span></a></li>
						<div class="clearfix"> </div>
					</ul>
				</div>
			</div>
			<!--soical-share-->
			<!-- news-letter -->
			<div class="news-letter">
				<div class="container">
					<div class="news-letter-left wow fadeInLeft" data-wow-delay="0.4s">
						<h3><a href="#"><span> </span> Newsletter</a></h3>
					</div>
					<div class="news-letter-right wow fadeInRight" data-wow-delay="0.4s">
						<form>
							<input type="text" class="text" maxlength="20" value="Your Email here" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Your Email here';}">
							<input type="submit" value=" " />
						</form>
					</div>
					<div class="clearfix"> </div>
				</div>
			</div>
			<!-- news-letter -->
			<!-- footer -->
			<div class="footer">
				<div class="container">
					<div class="footer-left wow fadeInLeft" data-wow-delay="0.4s">
							<ul>
				            	<li><a href="index.php">Home</a></li>
				                <li><a href="about.php">collections</a></li>
				                <li class="active"><a href="services.php">Services</a></li>
				                 <li><a href="portfolio.php">product buy</a></li>
				                <li><a href="contact.php">Contact Us</a></li>
				            </ul>
					</div>
					<div class="footer-right wow fadeInRight" data-wow-delay="0.4s"	>
						<p>&copy; @copyright2026 urban vouge all rights reserved | Design by  <a href="http://w3layouts.com/" target="_blank">W3layouts</a></p>
					</div>
					<div class="clearfix"> </div>
				</div>
			</div>
			<!-- footer -->
	</body>
</html>

