<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
<head>
<title>Fashion plus A Fashion Category Flat Bootstarp Resposive Website Template | About :: w3layouts</title>
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
		<!-- top-header-->
		<div class="top-header about-header">
			<h1><a href="index.php">urban vouge <span>+</span></a></h1>
			<img class="img-responsive" src="images/li.png">
		</div>	
		<!-- top-header -->
			<!-- header -->
				
			<div class="header">
					<div class="sticky-navigation">
					<div class="fixed-header">
						<div class="container">
							<div class="top-menu">
								<span class="menu"> <img src="images/menu1.png"></span>
					            <ul>
					            	<li ><a href="index.php">Home</a></li>
					                <li class="active"><a href="about.php">collections</a></li>
					                <li><a href="services.php">Services</a></li>
					                <li><a href="portfolio.php">Portfolio</a></li>
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

			<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Dress Collection - Fashion+</title>

<style>
body {
    font-family: Arial, sans-serif;
    margin: 0;
    background: #fff;
}

/* TITLE */
.title {
    text-align: center;
    padding: 40px 0;
    font-size: 32px;
    letter-spacing: 3px;
}

/* GRID */
.collection {
    display: grid;
    grid-template-columns: repeat(4, 1fr);
    gap: 20px;
    padding: 20px 60px;
}

/* CARD */
.card {
    position: relative;
    overflow: hidden;
}

.card img {
    width: 100%;
    transition: 0.4s;
}

/* HOVER EFFECT */
.card:hover img {
    transform: scale(1.1);
}

.card .info {
    position: absolute;
    bottom: 0;
    background: rgba(0,0,0,0.6);
    width: 100%;
    color: white;
    text-align: center;
    padding: 10px;
}

/* RESPONSIVE */
@media(max-width: 900px) {
    .collection {
        grid-template-columns: repeat(2, 1fr);
    }
}
</style>
</head>

<body>

<div class="title">dresses collections</div>

<?php
// Dress Data (You can edit or fetch from DB)
$dresses = [
    ["img"=>"images/sum.jpg", "name"=>"Summer Dress"],
    ["img"=>"images/cau.jpg", "name"=>"Casual Wear"],
    ["img"=>"images/seeo.jpg", "name"=>"skirts"],
    ["img"=>"images/ii.jpg", "name"=>"Party Dress"],
    ["img"=>"images/boho.jpg", "name"=>"Boho Style"],
    ["img"=>"images/maxi.jpg", "name"=>"Maxi Dress"],
    ["img"=>"images/cor.jpg", "name"=>"denim dress"],
    ["img"=>"images/srt.jpg", "name"=>"short dress"]
];
?>

<div class="collection">
<?php foreach($dresses as $dress): ?>
    <div class="card">
        <img src="<?php echo $dress['img']; ?>" alt="">
        <div class="info"><?php echo $dress['name']; ?></div>
    </div>
<?php endforeach; ?>
</div>

</body>
</html>
						<!-- about-latest-news -->
						<div class="about-latest-news">
							<div class="about-head text-center wow fadeIn" data-wow-delay="0.5s">
								<h3>style categories</h3>
								<p>focused on quality, clean lines, and neutral colors</p>
							</div>
							<!-- about-latest-news-grids -->
							<div class="about-latest-news-grids text-center">
								<div class="col-md-4 about-latest-news-grid   wow fadeInLeft" data-wow-delay="0.4s">
									<a href="#" class="mask"><img class="img-responsive zoom-img" src="images/nmm.jpg" title="name" />
									</a>
									<p style="color:red;">₹s999"</p>
									<a href="cart.php?id=2&name=Denim&price=999" class="btn btn-primary">Add to Cart</a>
                                    <a href="buy.php?id=2&price=999" class="btn btn-success">Buy Now</a>
									<h4>artsy</h4>
									<p><p>This is an unconventional fashion style characterised by bright and bold colours and large - artsy - prints.
Clothes and accessories have unusual silhouettes in surprising shapes and are mostly handcrafted and in handmade fabrics.
An artsy fashion style invokes independent creativity.</p>
								</div>
								<div class="col-md-4 about-latest-news-grid wow fadeIn" data-wow-delay="0.5s">
									<a href="#" class="mask"><img class="img-responsive zoom-img" src="images/coat.jpg" title="name" />
									</a>
									<p style="color:red;">₹999"</p>
									<a href="cart.php?id=2&name=Denim&price=999" class="btn btn-primary">Add to Cart</a>
                                    <a href="buy.php?id=2&price=999" class="btn btn-success">Buy Now</a>
									<h4>blazer zic</h4>
									<p><p>confidence begins with a perfect blazer own every room you walk into </p>
								</div>
								<div class="col-md-4 about-latest-news-grid  wow fadeInRight" data-wow-delay="0.4s">
									<a href="#" class="mask"><img class="img-responsive zoom-img" src="images/blk.jpg" title="name" />
									</a>
									<p style="color:red;">₹999"</p>
									<a href="cart.php?id=2&name=Denim&price=999" class="btn btn-primary">Add to Cart</a>
                                    <a href="buy.php?id=2&price=999" class="btn btn-success">Buy Now</a>
									<h4>feminine</h4>
									<p>  <p>.Clothes, accessories, and make-up tend to heavily feature pink or other pastel tones. Dresses and skirts are abundant in a feminine wardrobe, as are blouses with cute details, bows, ruffles, flounces, and lace.
Heels and strappy sandals or a cute pair of ballerinas with a little bow finish off a feminine outfit.</p>
								</div>
								<div class="clearfix"> </div>
							</div>
							<!-- about-latest-news-grids -->
						</div>
						<!-- about-latest-news -->
				
				</div>
			</div>
			<!-- about -->
			<!--soical-share -->
			<div class="social-share text-center">
				<div class="container">
					<h3>Catch on</h3>
					<ul>
						
						<li><a class="twitter" href="#"><span> </span></a></li>
						<li><a class="facebook" href="#"><span> </span></a></li>
						<li><a class="dribble" href="#"><span> </span></a></li>
						<div class="clearfix"> </div>
					</ul>
				</div>
			</div>
			<!--soical-share -->
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
				                <li class="active"><a href="about.php">collections</a></li>
				                <li><a href="services.php">Services</a></li>
				                <li><a href="portfolio.php">product buy</a></li>
				                <li><a href="contact.php">Contact Us</a></li>
				            </ul>
					</div>
					<div class="footer-right wow fadeInRight" data-wow-delay="0.4s"	>
						<p>&copy; 2026 urban vouge All rights reserved | Design by  <a href="http://w3layouts.com/" target="_blank">W3layouts</a></p>
					</div>
					<div class="clearfix"> </div>
				</div>
			</div>
			<!-- footer -->
	</body>
</html>

