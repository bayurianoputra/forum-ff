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

    <title>I-MiNOR - Event</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

	<!-- Font -->
	<link href="fonts/open-sans/stylesheet.css" rel="stylesheet">

    <!-- Icons -->
    <link href="css/icons.css" rel="stylesheet">
	
    <!-- Overwrite bootstrap style -->
    <link href="css/overwrite.css" rel="stylesheet">
	
	<!-- Owl carousel -->
    <link href="css/owl.carousel.css" rel="stylesheet">
    <link href="css/owl.theme.css" rel="stylesheet">
    <link href="css/owl.transitions.css" rel="stylesheet">
	
	<!-- Flexslider -->
    <link href="css/flexslider.css" rel="stylesheet">
	
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
	<!--div class="demo-panel">
		<h6>Color options</h6>
		<ul class="stylechanger tooltips">
			<li><a id="color1" href="blog-alt2-rightsidebar.html#" data-skin="default.css"></a></li>
			<li><a id="color2" href="blog-alt2-rightsidebar.html#" data-skin="pink.css"></a></li>				
			<li><a id="color3" href="blog-alt2-rightsidebar.html#" data-skin="navy.css"></a></li>
			<li><a id="color4" href="blog-alt2-rightsidebar.html#" data-skin="blue.css"></a></li>	
			<li><a id="color5" href="blog-alt2-rightsidebar.html#" data-skin="orange.css"></a></li>
			<li><a id="color6" href="blog-alt2-rightsidebar.html#" data-skin="purple.css"></a></li>
			<li><a id="color7" href="blog-alt2-rightsidebar.html#" data-skin="violet.css"></a></li>
			<li><a id="color8" href="blog-alt2-rightsidebar.html#" data-skin="green.css"></a></li>			
			<li><a id="color9" href="blog-alt2-rightsidebar.html#" data-skin="misty.css"></a></li>
			<li><a id="color10" href="blog-alt2-rightsidebar.html#" data-skin="yellow.css"></a></li>				
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
	<a class="openpanel" href="blog-alt2-rightsidebar.html#" title=""><i class="icon-equalizer2"></i></a>
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
						<a class="navbar-brand" href="#"><img src="" alt="" /></a>
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
							<li><a href="index.php">Home</a></li>
							<li><a href="news_feed.php">News</a></li>
							<li class="dropdown">
								<a href="index.html#" class="dropdown-toggle" data-toggle="dropdown" role="button">Article <span class="caret"></span></a>
								<ul class="dropdown-menu">
									<li><a href="Article_Java.php">Java</a></li>
									<li><a href="Article_Web.php">Web</a></li>
									<li><a href="video_tutorial.php">Video Tutorial</a></li>
									
								</ul>
							</li>

							<li><a href="event.php">Event</a></li>
							
							<li class="dropdown">
								<a href="index.html#" class="dropdown-toggle" data-toggle="dropdown" role="button">Gallery <span class="caret"></span></a>
								<ul class="dropdown-menu">
									<li><a href="Foto.php">Foto</a></li>
									<li><a href="portfolio-alt2.html">Video</a></li>
									
								</ul>
							</li>
							<li class="dropdown">
								<a href="index.html#" class="dropdown-toggle" data-toggle="dropdown" role="button">About <span class="caret"></span></a>
								<ul class="dropdown-menu">
									<li><a href="about_forum.php">About Forum</a></li>
									<li><a href="About_Member.php">About Member</a></li>
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
							<h3><i class="icon-book-open"></i> Event</h3>
						</div>
						<div class="col-md-6 col-sm-6 text-right">
							<ol class="breadcrumb">
							  <li><a href="#"></a></li>
							  
							</ol>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- End inner head -->
		
		<!-- Start inner page -->
		<div class="inner-page">
			<div class="container">
				<div class="row">
					<!-- Start article -->
					<div class="col-md-9 col-sm-9">
						<!-- Start article 1 -->
							<div class="article-post">
								<a href="blog-alt2-rightsidebar.html#"><img src="img/foto/Panti.jpg" class="article-media img-responsive" alt="" /></a>
								<article>
									<div class="article-title">
										<div class="post-date"><span>12</span>Sept</div>
										<h5><a href="blog-alt2-rightsidebar.html#">Kegiatan Bakti Sosial I-MiNOR bersama anak anak panti asuhan</a></h5>
										
									</div>
									<p>
										
									</p>
									<a href="blog-alt2-rightsidebar.html#" class="btn btn-default">Read more</a>
								</article>
							</div>
						<!-- End article 1 -->
						
						<div class="divider"></div>
						
						<!-- Start article 2 -->
							<div class="article-post">
								<a href="hangout.php#"><img src="img/foto/hangout6.jpg" class="article-media img-responsive" alt="" /></a>
								<article>
									<div class="article-title">
										<div class="post-date"><span>12</span>Sept</div>
										<h5><a href="hangout.php#">Hangout Member I-MiNOR </a></h5>
										
									</div>
									<p>
									
									</p>
									<a href="blog-alt2-rightsidebar.html#" class="btn btn-default">Read more</a>
								</article>																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																									
							</div>
						<!-- End article 2 -->
						
						<!--	xdiv class="divider"></div>
						
						<!-- Start article 3 -->
							<!--div class="article-post">
								<div class="video-container article-media">
									<iframe id="player" src="https://www.youtube.com/embed/mdfMT5Zi8Eo" class="img-thumbnail"></iframe>
								</div>
								<article>
									<div class="article-title">
										<div class="post-date"><span>18</span>July</div>
										<h5><a href="blog-alt2-rightsidebar.html#">Numquam detraxit sit ei an vel</a></h5>
										<ul class="mata-post">
											<li><a href="blog-alt2-rightsidebar.html#"><i class="icon-profile-male"></i> John doe</a></li>
											<li><a href="blog-alt2-rightsidebar.html#"><i class="icon-pencil"></i> Photography</a></li>
											<li><a href="blog-alt2-rightsidebar.html#"><i class="icon-chat"></i> 3 comments</a></li>
										</ul>
									</div>
									<p>
									Numquam detraxit sit ei, an vel summo utinam tincidunt. Et insolens assentior nec, id mea delicatissimi concludaturque. Ne vis tantas melius quaestio, mucius semper ad mea. Ut eam repudiare adolescens, nec ut case eius posse, ex tamquam copiosae definiebas ius. Sensibus salutandi qualisque vix cu, eu per saperet fastidii. Unum postea alienum vis ei, ea vim paulo mediocrem hendrerit. An ipsum partem eum, augue aliquid at pri.
									</p>
									<a href="blog-alt2-rightsidebar.html#" class="btn btn-default">Read more</a>
								</article>
							</div>
						<!-- End article 3 -->
						
						<div class="divider"></div>
						
						<!--ul class="pagination margin-clear">
							<li class="disabled"><a href="blog-alt2-rightsidebar.html#">Prev</a></li>
							<li class="active"><a href="blog-alt2-rightsidebar.html#">1</a></li>
							<li><a href="blog-alt2-rightsidebar.html#">2</a></li>
							<li><a href="blog-alt2-rightsidebar.html#">3</a></li>
							<li><a href="blog-alt2-rightsidebar.html#">4</a></li>
							<li><a href="blog-alt2-rightsidebar.html#">5</a></li>
							<li><a href="blog-alt2-rightsidebar.html#">Next</a></li>
						</ul-->
					</div>
					<!-- End article -->
					
					<!-- Start aside -->
					<div class="col-md-3 col-sm-3">
						<aside>
							<div class="widget">
								<h5 class="widget-title">Latest work</h5>
								<ul class="popular-item">
									<li><a href="img/gallery/670x670/arief.jpg"><img src="img/gallery/thumbs/arief.jpg" class="img-responsive" alt="" /></a></li>
									<li><a href="img/gallery/670x670/dery1.jpg"><img src="img/gallery/thumbs/dery1.jpg" class="img-responsive" alt="" /></a></li>
									<li><a href="img/gallery/670x670/endra.jpg"><img src="img/gallery/thumbs/endra.jpg" class="img-responsive" alt="" /></a></li>
									<li><a href="img/gallery/670x670/malik.png"><img src="img/gallery/thumbs/malik.png" class="img-responsive" alt="" /></a></li>
									<li><a href="img/gallery/670x670/mutaminah.jpg"><img src="img/gallery/thumbs/mutaminah.jpg" class="img-responsive" alt="" /></a></li>
									<li><a href="img/gallery/670x670/rika.jpg"><img src="img/gallery/thumbs/rika.jpg" class="img-responsive" alt="" /></a></li>
									<li><a href="img/gallery/670x670/sapta.jpg"><img src="img/gallery/thumbs/sapta.jpg" class="img-responsive" alt="" /></a></li>
									<li><a href="img/gallery/670x670/teguh.jpg"><img src="img/gallery/thumbs/teguh.jpg" class="img-responsive" alt="" /></a></li>
									<li><a href="img/gallery/670x670/trie.jpg"><img src="img/gallery/thumbs/trie.jpg" class="img-responsive" alt="" /></a></li>
									<li><a href="img/gallery/670x670/ugie.jpg"><img src="img/gallery/thumbs/ugie.jpg" class="img-responsive" alt="" /></a></li>
								</ul>
							</div>
							<!--div class="widget">
								<h5 class="widget-title">Categories</h5>
								<ul class="cat">
									<li><a href="blog-alt2-rightsidebar.html#"><i class="icon-pencil"></i> Web design</a></li>
									<li><a href="blog-alt2-rightsidebar.html#"><i class="icon-pencil"></i> Photography</a></li>
									<li><a href="blog-alt2-rightsidebar.html#"><i class="icon-pencil"></i> Marketing</a></li>
									<li><a href="blog-alt2-rightsidebar.html#"><i class="icon-pencil"></i> Logo & icons</a></li>
									<li><a href="blog-alt2-rightsidebar.html#"><i class="icon-pencil"></i> Graphict</a></li>
									<li><a href="blog-alt2-rightsidebar.html#"><i class="icon-pencil"></i> Illustrator</a></li>
								</ul>
							</div-->
							<div class="widget">
								<h5 class="widget-title">Recent post</h5>
								<ul class="recent">
									<li>
										<a class="post-thumb" ><img src="img/gallery/thumbs/mutaminah.jpg" class="img-responsive" alt="" /></a>
										<h6><a>Mutaminah</a></h6>
										<p>
										Semangat... Semangat .. yippy yippy yee :D.
										</p>
									</li>
									<li>
										<a class="post-thumb" ><img src="img/gallery/thumbs/endra.jpg" class="img-responsive" alt="" /></a>
										<h6><a>Endra</a></h6>
										<p>
										Ayo kita bikin project yang lain . kita pasti bisa
										</p>
									</li>
									<li>
										<a class="post-thumb" ><img src="img/gallery/thumbs/dery1.jpg" class="img-responsive" alt="" /></a>
										<h6><a>Dery febriantara</a></h6>
										<p>
										iyah ,, persiapkan alat alat nya ,, kita menggunakan silex dan symfony . hahaha :D
										</p>
									</li>
								</ul>
							</div>
							<div class="widget margintop-min10">
								<h5 class="widget-title">Recent comments</h5>
								<ul class="list-unstyled ticker">
									<li>
										<blockquote class="margin-clear"><p>NO COMMENT.</p></blockquote>
									</li>
									<li>
										<blockquote class="margin-clear"><p>NO COMMENT.</p></blockquote>
									</li>
									<li>
										<blockquote class="margin-clear"><p>NO COMMENT.</p></blockquote>
									</li>
								</ul>
							</div>
							<!--div class="widget">
								<h5 class="widget-title">Tags</h5>
								<ul class="tags">
									<li><a href="blog-alt2-rightsidebar.html#"><i class="icon-pricetags"></i> Web</a></li>
									<li><a href="blog-alt2-rightsidebar.html#"><i class="icon-pricetags"></i> Design</a></li>
									<li><a href="blog-alt2-rightsidebar.html#"><i class="icon-pricetags"></i> Photo</a></li>
									<li><a href="blog-alt2-rightsidebar.html#"><i class="icon-pricetags"></i> Graphic</a></li>
									<li><a href="blog-alt2-rightsidebar.html#"><i class="icon-pricetags"></i> logo</a></li>
									<li><a href="blog-alt2-rightsidebar.html#"><i class="icon-pricetags"></i> Icon</a></li>
									<li><a href="blog-alt2-rightsidebar.html#"><i class="icon-pricetags"></i> Tips</a></li>
									<li><a href="blog-alt2-rightsidebar.html#"><i class="icon-pricetags"></i> Tutorial</a></li>
									<li><a href="blog-alt2-rightsidebar.html#"><i class="icon-pricetags"></i> Resource</a></li>
									<li><a href="blog-alt2-rightsidebar.html#"><i class="icon-pricetags"></i> App</a></li>
									<li><a href="blog-alt2-rightsidebar.html#"><i class="icon-pricetags"></i> Mobile</a></li>
								</ul>
							</div-->
						</aside>
					</div>
					<!-- End aside -->
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
							<li>Bayu Riano Putra</li>
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
	
	<!-- ticker -->
	<script src="js/ticker/ticker.js"></script>
	<script src="js/ticker/setting.js"></script>
	
	<!-- Go to top -->
	<script src="js/totop/jquery.ui.totop.js"></script>	
	<script src="js/totop/setting.js"></script>
	
	<!-- custom javascript -->
	<script src="js/custom.js"></script>
	
	<!-- Theme option-->
	<script src="js/theme-option/demosetting.js"></script>	
  </body>
</html>
