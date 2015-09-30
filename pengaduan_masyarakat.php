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

    <title>Profil - Visi dan Misi</title>

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
			<li><a id="color1" href="blog-alt1-rightsidebar.html#" data-skin="default.css"></a></li>
			<li><a id="color2" href="blog-alt1-rightsidebar.html#" data-skin="pink.css"></a></li>				
			<li><a id="color3" href="blog-alt1-rightsidebar.html#" data-skin="navy.css"></a></li>
			<li><a id="color4" href="blog-alt1-rightsidebar.html#" data-skin="blue.css"></a></li>	
			<li><a id="color5" href="blog-alt1-rightsidebar.html#" data-skin="orange.css"></a></li>
			<li><a id="color6" href="blog-alt1-rightsidebar.html#" data-skin="purple.css"></a></li>
			<li><a id="color7" href="blog-alt1-rightsidebar.html#" data-skin="violet.css"></a></li>
			<li><a id="color8" href="blog-alt1-rightsidebar.html#" data-skin="green.css"></a></li>			
			<li><a id="color9" href="blog-alt1-rightsidebar.html#" data-skin="misty.css"></a></li>
			<li><a id="color10" href="blog-alt1-rightsidebar.html#" data-skin="yellow.css"></a></li>				
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
	<a class="openpanel" href="blog-alt1-rightsidebar.html#" title=""><i class="icon-equalizer2"></i></a>
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
						<a class="navbar-brand" href="blog-alt1-rightsidebar.html#"><img src="" alt="" /></a>
					</div>
					<!-- End navbar-header -->
					
					<!-- Start nav-collapse -->
					<div id="navbar" class="collapse navbar-collapse">
						<div class="right-containt">
							<div class="btn-group">
								
							</div>
							<div class="btn-group search-group">
								<a href="index.php#" class="search dropup-toggle" data-toggle="dropup"><i class=""></i></a>
								<div class="dropdown-menu dropdown-search">
									<form>
										<fieldset class="search-form">
											<input class="search-input" type="text" placeholder="Start searching..." />
											<button class="btn-search" type="button"><i class=""></i></button>
										</fieldset>	
									</form>
								</div>
							</div>
						</div>
						<ul class="nav navbar-nav navbar-right">
							<li><a href="index.php">Home</a></li>

							
							<li class="dropdown">
								<a href="index.php#" class="dropdown-toggle" data-toggle="dropdown" role="button">Profil<span class="caret"></span></a>
								<ul class="dropdown-menu">
									
									<li><a href="sejarah_singkat.php">Sejarah Singkat</a></li>
									<li><a href="visi_misi.php">Visi dan Misi</a></li>
									
									
								</ul>
							</li>
							<li class="dropdown">
								<a href="index.php#" class="dropdown-toggle" data-toggle="dropdown" role="button">Produk Hukum<span class="caret"></span></a>
								<ul class="dropdown-menu">
									
									<li><a href="undang_undang.php">Undang Undang</a></li>
									<li><a href="Article_Web.php">Peraturan Pemerintah</a></li>
									
									
								</ul>
							</li>
							
							<li class="dropdown">
								<a href="index.php#" class="dropdown-toggle" data-toggle="dropdown" role="button">Berita <span class="caret"></span></a>
								<ul class="dropdown-menu">
									<li><a href="news.php">Berita Umum</a></li>
									
									
								</ul>
							</li>
							<li class="dropdown">
								<a href="index.php#" class="dropdown-toggle" data-toggle="dropdown" role="button">Layanan Publik<span class="caret"></span></a>
								<ul class="dropdown-menu">
									
									<li><a href="wni.php">Warga Negara Asli</a></li>
									<li><a href="wna.php">Warga Negara Asing</a></li>
									
									
								</ul>
							</li>
							<li class="dropdown">
								<a href="index.php#" class="dropdown-toggle" data-toggle="dropdown" role="button">Unit Kerja<span class="caret"></span></a>
								<ul class="dropdown-menu">
									
									<li><a href="lalu_lintas.php">Lalu Lintas Ke Imgrasian ( Lantaskim )</a></li>
									<li><a href="tata_usaha.php">Tata Usaha</a></li>
									
									
								</ul>
							</li>
							<li class="dropdown">
								<a href="index.php#" class="dropdown-toggle" data-toggle="dropdown" role="button">Pengaduan<span class="caret"></span></a>
								<ul class="dropdown-menu">
									
									<li><a href="pengaduan_masyarakat.php">index Kepuasan Masyarakat</a></li>
									<li><a href="pengaduan_masyarakat.php">Pengaduan Masyarakat</a></li>
									
									
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
							<h3><i class="icon-book-open"></i> Pengaduan Masyarakat</h3>
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
						<!div class="divider margintop50"></div>
						<h5 class="head-title">Leave comments</h5>
						<form class="row">
							<div class="col-md-6 marginbot30">
								<input class="form-control input-lg" type="text" name="name" placeholder="Enter your full name..." />
							</div>
							<div class="col-md-6 marginbot30">
								<input class="form-control input-lg" type="text" name="name" placeholder="Enter your website url..." />
							</div>
							<div class="col-md-12 marginbot30">
								<textarea class="form-control input-lg" rows="9" name="message" placeholder="Your comment here..."></textarea>	
							</div>
							<div class="col-md-12">
								<input type="submit" value="leave comment" class="btn btn-rounded btn-primary btn-lg" name="Submit" />
							</div>	
						<!-- End article 1 -->
						<!-- Start article 2 -->
						
						<!-- End article 2 -->
						<!-- Start article 3 -->
						
						
						<!-- End article 3 -->						
						
						<!-- End article 4 -->
						
						
					</div>
					<!-- End article -->
					
					<!-- Start aside -->
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
						Alamat Kantor jl. Solo Km. 10 Yogyakarta <br>

Phone. (0274) 484370
Fax. (0274) 487130
e-Mail. kanim_yogyakarta@imigrasi.go.id
						<ul class="list">
							<li></li>
							<li></li>
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
			<div class="subfooter">
				<p class="copyright">2014 - 2015 &copy; Copyright <a href="">Kantor Imigrasi Yogyakarta</a> &#45;</p>
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
