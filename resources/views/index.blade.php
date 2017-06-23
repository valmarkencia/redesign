<!DOCTYPE html>
<html lang="en">
<head>
	<title>Welcome! — Valencia Design Co.</title>
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="/css/app.css">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
</head>
<body>
<div class="container navbar">	
	<nav class="nav-container">
		<div class="navbar-brand"><a href="/"><img src="img/logo.png" height="30px;" class="pull-left img-logo"><span class="brand">Valencia Design Co.</span></a></div>
		<ul class="nav navbar-nav navbar-right menu">
			<li class="active"><a href="/">Home</a></li>
			<li><a href="/portfolio">Portfolio</a></li>
			<li><a href="/">Case Study</a></li>
			<li><a href="/">Contact Us</a></li>
		</ul>
	</nav>
</div>
<div class="container">
	<img class="pull-right" src="img/macbook.png" width="450px;"></img>
	<div class="banner">
		<h1 class="slim">WE CUSTOMIZE WEBSITES <br><span class="bold">TO <span class="colored">SUIT</span> YOUR BUSINESS NEEDS</span></h1>
		<a href="/" class="btn btn-primary">Start Prpject  >></a>
	</div>
</div>
<div class="row about" id="about">
	<div class="col-lg-6">
	<h2 class="black"><span class="colored">ABOUT </span>US</h2>
	<p class="about-content">
		We are a group of creatives specializes in web design and development. We believe that every businesses requires a unique website for their identity and also serves well in their business needs. We aim to deliver the best quality and well designed websites to be efficient and effective to your business.
	</p>
	<a href="/" class="btn btn-primary">Start Prpject  >></a>
	</div>
	<div class="col-lg-6" style="background-image: url(img/about.jpg); background-size: auto 100%; background-repeat: no-repeat;" id="about-img">
	</div>
</div>

<div class="center">
	<h2 class="colored black">WORKS</h2>
	<div class="row works-img">
		<div class="col-md-4"><img src="img/db1.jpg" width="100%;"></div>
		<div class="col-md-4"><img src="img/db2.jpg" width="100%;"></div>
		<div class="col-md-4"><img src="img/db3.jpg" width="100%;"></div>
	</div>
</div>

<div class="center container process">
	<h2 class="colored black">PROCESS</h2>
	<div class="row">
		<div class="col-md-4">
			<div class="icon">
				<i class="fa fa-search fa-3x" aria-hidden="true"></i>
			</div>
			<h4 class="bold">Research and Planning</h4>
			<p>
				Every project begins with a careful research and planning about your business to execute the website efficiently.
			</p>
		</div>
		<div class="col-md-4">
			<div class="icon">
				<i class="fa fa-desktop fa-3x" aria-hidden="true"></i>
				<i class="fa fa-mobile fa-2x" aria-hidden="true"></i>
			</div>
			<h4 class="bold">UX / Prototype</h4>
			<p>
				We do prototyping to help us explore different strategy until we discover the best design approach.
			</p>
		</div>
		<div class="col-md-4">
			<div class="icon">
				<i class="fa fa-paint-brush fa-3x" aria-hidden="true"></i>
			</div>
			<h4 class="bold">Interface Design</h4>
			<p>
				We make sure the design reflects your vision as a company and give the right feels to your viewers.
			</p>
		</div>
	</div>
	<div class="row">
		<div class="col-md-4">
			<div class="icon">
				<i class="fa fa-cogs fa-3x" aria-hidden="true"></i>
			</div>
			<h4 class="bold">Development</h4>
			<p>
				The actual coding of the product. We make sure that everything is works great in different devices and platforms.
			</p>
		</div>
		<div class="col-md-4">
			<div class="icon">
				<i class="fa fa-bug fa-3x" aria-hidden="true"></i>
			</div>
			<h4 class="bold">Debug and Testing</h4>
			<p>
				We test the product to ensure that we didi not miss a thing and the product works best in the real world.
			</p>
		</div>
		<div class="col-md-4">
			<div class="icon">
				<i class="fa fa-space-shuttle fa-rotate-270 fa-3x" aria-hidden="true"></i>
			</div>
			<h4 class="bold">Launch</h4>
			<p>
				This is the final process wherein the product is now ready and can be releaseed in the real world and serve its purpose.
			</p>
		</div>
	</div>
</div>

<div class="center testimonials">
<div class="container">
	<h2 class="colored black">
		TESTIMONIALS
	</h2>
</div>
</div>
















<script
  src="https://code.jquery.com/jquery-3.2.1.min.js"
  integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
  crossorigin="anonymous"></script>
<script type="text/javascript">
	$(function(){
		$aboutheight = $("#about").outerHeight();
		$("#about-img").height($aboutheight);
	});
</script>
</body>
</html>