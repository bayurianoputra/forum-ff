<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="ico/favicon.png">

    <title>I-MiNOR - News Feed</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

	<!-- Font -->
	<link href="fonts/open-sans/stylesheet.css" rel="stylesheet">

    <!-- Icons -->
    <link href="css/icons.css" rel="stylesheet">
	
    <!-- Overwrite bootstrap style -->
    <link href="css/overwrite.css" rel="stylesheet">

    <!-- prettyPhoto -->	
	<link href="css/prettyPhoto.css" rel="stylesheet">	
	
    <!-- Custom styles for this template -->
    <link href="css/style.css" rel="stylesheet">

    <!-- Skins style -->
    <link id="skin" href="skins/default.css" rel="stylesheet">

  </head>

  <body>
	<!-- Start preloading -->
	<div id="loading" class="loading-invisible">
		<div class="loading-center">
			<div class="loading-center-absolute">
				<div class="object" id="object_one"></div>
				<div class="object" id="object_two"></div>
				<div class="object" id="object_three"></div>
				<div class="object" id="object_four"></div>
				<div class="object" id="object_five"></div>
				<div class="object" id="object_six"></div>
				<div class="object" id="object_seven"></div>
				<div class="object" id="object_eight"></div>
				<div class="object" id="object_big"></div>
			</div>
			<p>Please wait...</p>
		</div>
	</div>
	<script type="text/javascript">
		  document.getElementById("loading").className = "loading-visible";
		  var hideDiv = function(){document.getElementById("loading").className = "loading-invisible";};
		  var oldLoad = window.onload;
		  var newLoad = oldLoad ? function(){hideDiv.call(this);oldLoad.call(this);} : hideDiv;
		  window.onload = newLoad;
	</script>
	<!-- End preloading -->
	
 	<!-- Start demo options -->
	<div class="demo-panel">
		<h6>Color options</h6>
		<ul class="stylechanger tooltips">
			<li><a id="color1" href="services.html#" data-skin="default.css"></a></li>
			<li><a id="color2" href="services.html#" data-skin="pink.css"></a></li>				
			<li><a id="color3" href="services.html#" data-skin="navy.css"></a></li>
			<li><a id="color4" href="services.html#" data-skin="blue.css"></a></li>	
			<li><a id="color5" href="services.html#" data-skin="orange.css"></a></li>
			<li><a id="color6" href="services.html#" data-skin="purple.css"></a></li>
			<li><a id="color7" href="services.html#" data-skin="violet.css"></a></li>
			<li><a id="color8" href="services.html#" data-skin="green.css"></a></li>			
			<li><a id="color9" href="services.html#" data-skin="misty.css"></a></li>
			<li><a id="color10" href="services.html#" data-skin="yellow.css"></a></li>				
		</ul>
		<div class="clearfix"></div>
		<h6>Index variants</h6>
		<ul class="layout">
			<li class="full">
				<a href="index.html" class="btn btn-bordered btn-primary btn-block">index alt1</a>
			</li>
			<li class="full">
				<a href="index-alt1.html" class="btn btn-bordered btn-primary btn-block">index alt2</a>
			</li>
			<li class="full">
				<a href="index-alt2.html" class="btn btn-bordered btn-primary btn-block">index alt3</a>
			</li>
			<li class="full">
				<a href="index-alt3.html" class="btn btn-bordered btn-primary btn-block">index alt4</a>
			</li>
			<li class="full">
				<a href="index-alt4.html" class="btn btn-bordered btn-primary btn-block">index alt5</a>
			</li>
			<li class="full">
				<a href="index-alt5.html" class="btn btn-bordered btn-primary btn-block">index alt6</a>
			</li>
		</ul>
		<div class="clearfix"></div>
		<h6>Bonus</h6>
		<ul class="layout">
			<li class="full">
				<a href="underconstruction/index.html" target="_blank" class="btn btn-bordered btn-primary btn-block">underconstruction</a>
			</li>
		</ul>
	</div>	
	<a class="openpanel" href="services.html#" title=""><i class="icon-equalizer2"></i></a>
	<!-- End demo options --> 
	
	<!-- Start theme containt -->
	<div id="wrapper">
		<!-- Start navbar -->
			<nav class="navbar yamm">
				<div class="container">
					<!-- Start navbar-header -->
					<div class="navbar-header">
						<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						</button>
						<a class="navbar-brand" href="services.html#"><img src="img/logo.png" alt="" /></a>
					</div>
					<!-- End navbar-header -->
					
					<!-- Start nav-collapse -->
					<div id="navbar" class="collapse navbar-collapse">
						<div class="right-containt">
							
							<div class="btn-group search-group">
								<a href="services.html#" class="search dropdown-toggle" data-toggle="dropdown"><i class="icon-search2"></i></a>
								<div class="dropdown-menu dropdown-search">
									<form>
										<fieldset class="search-form">
											<input class="search-input" type="text" placeholder="Start searching..." />
											<button class="btn-search" type="button"><i class="icon-search2"></i></button>
										</fieldset>	
									</form>
								</div>
							</div>
						</div>
						<ul class="nav navbar-nav navbar-right">
							<li><a href="news_feed.php">Home</a></li>
							<li class="dropdown">
								<a href="index.html#" class="dropdown-toggle" data-toggle="dropdown" role="button">Article <span class="caret"></span></a>
								<ul class="dropdown-menu">
									<li><a href="Article_Java.php">Java</a></li>
									<li><a href="Article_Web.php">Web</a></li>
									<li><a href="blog-alt2-rightsidebar.html">H2H</a></li>
									<li><a href="singlepost-leftsidebar.html">Video Tutorial</a></li>
									
								</ul>
							</li>

							<li><a href="services.html">Event</a></li>
							
							<li class="dropdown">
								<a href="index.html#" class="dropdown-toggle" data-toggle="dropdown" role="button">Gallery <span class="caret"></span></a>
								<ul class="dropdown-menu">
									<li><a href="portfolio-alt1.html">Foto</a></li>
									<li><a href="portfolio-alt2.html">Video</a></li>
									
								</ul>
							</li>
							<li class="dropdown">
								<a href="index.html#" class="dropdown-toggle" data-toggle="dropdown" role="button">About <span class="caret"></span></a>
								<ul class="dropdown-menu">
									<li><a href="portfolio-alt1.html">About Forum</a></li>
									<li><a href="portfolio-alt2.html">About Member</a></li>
									
								</ul>
							</li>
						</ul>
					</div>
					<!-- End nav-collapse -->
				</div>
			</nav>
		<!-- End navbar -->
		
		<!-- Start inner head -->
		<div class="inner-header">
			<div class="inner-overlay">
				<div class="container">
					<div class="row">
						<div class="col-md-6 col-sm-6">
							<h3><i class="icon-tools"></i> News Feed</h3>
						</div>
						<div class="col-md-6 col-sm-6 text-right">
							<ol class="breadcrumb">
							  <li><a href="index.php#">Back To Home</a></li>
							  <li>
							</ol>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- End inner head -->
		
		<!-- Start inner page -->

		<div class="clearfix"></div>
		
		<!-- Start blog -->
		<section class="containt">
			<div class="container">
				<div class="row">
					<div class="col-md-8 col-md-offset-2 text-center">
						<div class="heading">
							<h3><span></span></h3>
							<p>News feed</p>
							<span class="linner"></span>
						</div>
					</div>
					<div class="col-md-12">
						<div id="recent-blog" class="owl-carousel">
							<div class="row recent-post-wrapper">
								<div class="col-md-6">
									<a href="index.html#"><img src="img/blog/img01.jpg" class="img-responsive" alt="" /></a>
								</div>
								<div class="col-md-6">
									<article>
										<div class="article-title">
											<div class="post-date"><span>24</span>July</div>
											<h5><a href="index.html#">Eum in idque euismod vocibus</a></h5>
											<ul class="mata-post">
												<li><a href="index.html#"><i class="icon-profile-male"></i> John doe</a></li>
												<li><a href="index.html#"><i class="icon-pencil"></i> Photography</a></li>
												<li><a href="index.html#"><i class="icon-chat"></i> 3 comments</a></li>
											</ul>
										</div>
										<p>
										Ullum augue altera in eam, mea vitae inimicus ei, eu laoreet maiestatis interpretaris his. Nam ut labitur graecis interpretaris. Eros eloquentiam ex has, ut mundi tantas tritani mea. Facer possim eligendi usu eu, nobis legere cu mea. Iudicabit percipitur ex vis duo dicant recteque.
										</p>
										<a href="index.html#" class="btn btn-default">Read more</a>
									</article>
								</div>
							</div>
							<div class="row recent-post-wrapper">
								<div class="col-md-6">
									<a href="index.html#"><img src="img/blog/img02.jpg" class="img-responsive" alt="" /></a>
								</div>
								<div class="col-md-6">
									<article>
										<div class="article-title">
											<div class="post-date"><span>22</span>July</div>
											<h5><a href="index.html#">Bonorum habemus tractatos</a></h5>
											<ul class="mata-post">
												<li><a href="index.html#"><i class="icon-profile-male"></i> John doe</a></li>
												<li><a href="index.html#"><i class="icon-pencil"></i> Graphic</a></li>
												<li><a href="index.html#"><i class="icon-chat"></i> 3 comments</a></li>
											</ul>
										</div>
									<p>
									Ullum augue altera in eam, mea vitae inimicus ei, eu laoreet maiestatis interpretaris his. Nam ut labitur graecis interpretaris. Eros eloquentiam ex has, ut mundi tantas tritani mea. Facer possim eligendi usu eu, nobis legere cu mea. Iudicabit percipitur ex vis duo dicant recteque.
									</p>
									<a href="index.html#" class="btn btn-default">Read more</a>
									</article>
								</div>
							</div>
							<div class="row recent-post-wrapper">
								<div class="col-md-6">
									<a href="index.html#"><img src="img/blog/img03.jpg" class="img-responsive" alt="" /></a>
								</div>
								<div class="col-md-6">
									<article>
										<div class="article-title">
											<div class="post-date"><span>20</span>July</div>
											<h5><a href="index.html#">Ullum augue altera in eam</a></h5>
											<ul class="mata-post">
												<li><a href="index.html#"><i class="icon-profile-male"></i> John doe</a></li>
												<li><a href="index.html#"><i class="icon-pencil"></i> Photography</a></li>
												<li><a href="index.html#"><i class="icon-chat"></i> 3 comments</a></li>
											</ul>
										</div>
									<p>
									Ullum augue altera in eam, mea vitae inimicus ei, eu laoreet maiestatis interpretaris his. Nam ut labitur graecis interpretaris. Eros eloquentiam ex has, ut mundi tantas tritani mea. Facer possim eligendi usu eu, nobis legere cu mea. Iudicabit percipitur ex vis duo dicant recteque.
									</p>
									<a href="index.html#" class="btn btn-default">Read more</a>
									</article>
								</div>
							</div>
							<div class="row recent-post-wrapper">
								<div class="col-md-6">
									<a href="index.html#"><img src="img/blog/img04.jpg" class="img-responsive" alt="" /></a>
								</div>
								<div class="col-md-6">
									<article>
										<div class="article-title">
											<div class="post-date"><span>19</span>July</div>
											<h5><a href="index.html#">Graece mandamus mea at</a></h5>
											<ul class="mata-post">
												<li><a href="index.html#"><i class="icon-profile-male"></i> John doe</a></li>
												<li><a href="index.html#"><i class="icon-pencil"></i> Web design</a></li>
												<li><a href="index.html#"><i class="icon-chat"></i> 3 comments</a></li>
											</ul>
										</div>
									<p>
									Ullum augue altera in eam, mea vitae inimicus ei, eu laoreet maiestatis interpretaris his. Nam ut labitur graecis interpretaris. Eros eloquentiam ex has, ut mundi tantas tritani mea. Facer possim eligendi usu eu, nobis legere cu mea. Iudicabit percipitur ex vis duo dicant recteque.
									</p>
									<a href="index.html#" class="btn btn-default">Read more</a>
									</article>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		
				<div class="clearfix"></div>
				<div class="row">
					<div class="col-md-12">
						<div class="client-wrapper padding-clear">
												
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- End inner page -->
			
		<!-- Start footer -->
		<footer>
			<div class="container">
				<div class="row">
					<div class="col-md-2 widget">
						<h6>Contact us</h6>
						<ul class="list">
							<li>0881-8227-423</li>
							<li>bayurianoputra@gmail.com</li>
						</ul>
					</div>
					<div class="col-md-1 widget">
						<ul class="list-link">
							
						</ul>
					</div>
					<div class="col-md-2 widget">
						
					</div>
					<div class="col-md-4 widget">
						
					</div>
					</div>
				</div>
			</div>
			<div class="subfooter">
				<p class="copyright">2015 &copy; Copyright <a href="">I-MiNOR</a> &#45; All Rights Reserved</p>
			</div>
		</footer>
		<!-- End footer -->
	</div>
	<!-- End theme containt -->
	
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="js/jquery.min.js"></script>
	
    <script src="js/bootstrap.min.js"></script>
	
    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="js/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="js/html5shiv.min.js"></script>
      <script src="js/respond.min.js"></script>
    <![endif]-->
	
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="js/ie10-viewport-bug-workaround.js"></script>
	
	<script src="js/jquery.easing.1.3.js"></script>
	
	<!-- Sticky -->
	<script src="js/sticky/jquery.sticky.js"></script>
	<script src="js/sticky/setting.js"></script>

	<!-- parallax -->
	<script src="js/parallax/jquery.parallax-1.1.3.js"></script>
	<script src="js/parallax/setting.js"></script>

	<!-- Go to top -->
	<script src="js/totop/jquery.ui.totop.js"></script>	
	<script src="js/totop/setting.js"></script>
	
	<!-- custom javascript -->
	<script src="js/custom.js"></script>
	
	<!-- Theme option-->
	<script src="js/theme-option/demosetting.js"></script>	
  </body>
</html>
