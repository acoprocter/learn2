<?php 

ini_set("DISPLAY_ERRORS", "ON");

$active = $_GET["p"];

$mysqli = new mysqli("localhost", "procter_learn2", "learn2", "procter_learn2");

/* check connection */
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}

/* Insert rows */
$result=$mysqli->query("SELECT * FROM pages");


$page=array();

while ($row = $result->fetch_assoc()) {
        $page[$row["name"]]=$row;
	
}


?>

<?php require_once 'header.php'; ?>

<div class="row" id="row1" >
	<div class="container">
		<div class="col-sm-6">
	
		<h1>Plan websites fast</h1>
		<h2>WriteMaps helps you to create <span class="amp">&amp;</span> share your sitemaps online</h2>
		
		<a class="btn btn-large btn-block btn-warning" id="btn-get-started" href="#">Get Started</a>
	
		</div> <!-- end col-sm-6 -->
	
		<div class="col-sm-6 hidden-xs">
	
		<iframe src="http://player.vimeo.com/video/67412259?title=0&amp;byline=0&amp;portrait=0" width="500" height="281" frameborder="0" webkitAllowFullScreen mozallowfullscreen allowFullScreen ></iframe>		
		</div> <!-- end col-sm-6 -->
	</div> <!-- end container -->
	
</div> <!-- end row1 -->

	<div class="row" >
	<div id="hero">
			<h1>Sign up in 60 seconds for a 15-day Free Trial</h1>
	</div> <!-- end hero -->
	</div> <!-- end row -->



<div class="row" id="row2">
	<div class="container">
	<div class="carousel slide" id="myCarousel" data-ride="carousel">
			
			<!-- Indicators -->
			<!-- <ol class="carousel-indicators">
				<li class="active" data-slide-to="0" data-target="#myCarousel"></li>
				<li data-slide-to="1" data-target="#myCarousel"></li>
				<li data-slide-to="2" data-target="#myCarousel"></li>
			</ol>
		-->
			<!-- Wrapper for slides -->
			<div class="carousel-inner">
				<div class="item active" id="slide1">
					
						<img src="images/carousel/writemaps-slide1.png" class="img-responsive" >
				</div> <!-- end item -->
				
				<div class="item" id="slide2">
					<img src="images/carousel/writemaps-slide2.png" class="img-responsive" >
				</div> <!-- end item -->
				
				<div class="item" id="slide3">
					<img src="images/carousel/writemaps-slide3.png" class="img-responsive" >
				</div> <!-- end item -->
				
				<div class="item" id="slide3">
					<img src="images/carousel/writemaps-slide4.png" class="img-responsive" >
				</div> <!-- end item -->
				
			</div> <!-- end carousel-inner -->
			
			<!-- Controls -->
			<a class="left carousel-control" data-slide="prev" href="#myCarousel"><span class="icon-prev"></span></a>
			<a class="right carousel-control" data-slide="next" href="#myCarousel"><span class="icon-next"></span></a>
		
	</div> <!-- end container -->
		</div> <!-- end of carousel -->

<!-- end row2 -->

<div class="row" id="features">
			<div class="container">
					<div class="col-sm-4 feature">
					<div class="panel">
						<div class="panel-heading">
							<h3 class="panel-title"><span class="glyphicon glyphicon-dashboard"></span> Reduce Project Time</h3>
						</div> <!-- end panel-heading -->
						
						
						<p>Save time by planning a website with a process. Create sitemaps and gather content with WriteMaps to work through the same steps every time, and achieve the same great results.</p>
						
						
					</div> <!-- end panel -->
					
				</div> <!-- end col-sm-4 -->
				
				
				<div class="col-sm-4 feature">
					<div class="panel">
						<div class="panel-heading">
							<h3 class="panel-title"><span class="glyphicon glyphicon-user"></span> Collaborate online</h3>
						</div> <!-- end panel-heading -->
						
						
						<p>Share a sitemap with your client, and they can create, edit, and take away pages when planning their website. It&#8217;s then easy for you to jump in with some feedback, or lend a hand when needed.</p>
						
						
					</div> <!-- end panel -->
					
				</div> <!-- end col-sm-4 -->
				
				
				<div class="col-sm-4 feature">
					<div class="panel">
						<div class="panel-heading">
							<h3 class="panel-title"><span class="glyphicon glyphicon-thumbs-up"></span> Easy to use</h3>
						</div> <!-- end panel-heading -->
						
						
						
						<p>Let your clients loose on our super easy website planning tool, without wasting time training them on how to use it. Keep your clients happy, and your website planning process simple.</p>
						
						
					</div> <!-- end panel -->
					
				</div> <!-- end col-sm-4 -->
			</div> <!-- end container -->
		</div> <!-- end features -->
	
	
	
		


<?php require_once 'footer.php'; ?>
      
