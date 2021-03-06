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
	<!--div class="demo-panel">
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
						<a class="navbar-brand" href="services.html#"><img src="" alt="" /></a>
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
							  <li><a href="#"></a></li>
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
									<a href="news_feed/ram.pdf#"><img src="news_feed/ram.png" class="img-responsive" alt="" /></a>
								</div>
								<div class="col-md-6">
									<article>
										<div class="article-title">
											<div class="post-date"><span>10</span>Sept</div>
											<h5><a href="news_feed/sistem operasi.pdf#">RAM</a></h5>
											
										</div>
										<p>
										Di sistem ini, memori adalah urutan byte yang dinomori (seperti “sel” atau “lubang burung dara”), masing-masing berisi sepotong kecil informasi. Informasi ini mungkin menjadi perintah untuk mengatakan pada komputer apa yang harus dilakukan. Sel mungkin berisi data yang diperlukan komputer untuk melakukan suatu perintah. Setiap slot mungkin berisi salah satu, dan apa yang sekarang menjadi data mungkin saja kemudian menjadi perintah.
										</p>
										<a href="news_feed/ram.pdf#" class="btn btn-default">Read more</a>
									</article>
								</div>
							</div>
							<div class="row recent-post-wrapper">
								<div class="col-md-6">
									<a href="news_feed/Virus.pdf#"><img src="news_feed/logo_virus.png" class="img-responsive" alt="" /></a>
								</div>
								<div class="col-md-6">
									<article>
										<div class="article-title">
											<div class="post-date"><span>10</span>Sept</div>
											<h5><a href="news_feed/Virus.pdf#">Semua Tentang Virus</a></h5>
											
										</div>
									<p>
									Virus komputer: Sebuah kode komputer yang mampu "berbiak dengan sendirinya" yang menempelkan sebagian atau seluruh kodenya pada file atau aplikasi, dan mengakibatkan komputer Anda melakukan hal-hal yang tidak Anda inginkan.
									</p>
									<a href="news_feed/Virus.pdf#" class="btn btn-default">Read more</a>
									</article>
								</div>
							</div>
							<div class="row recent-post-wrapper">
								<div class="col-md-6">
									<a href="news_feed/bahasa pemograman.pdf#"><img src="img/blog/img04.jpg" class="img-responsive" alt="" /></a>
								</div>
								<div class="col-md-6">
									<article>
										<div class="article-title">
											<div class="post-date"><span>10</span>Sept</div>
											<h5><a href="news_feed/bahasa pemograman.pdf#">Bahasa pemrograman </a></h5>
											
										</div>
									<p>
									Bahasa pemrograman merupakan untaian kata-kata berupa instruksi/perintah-
perintah yang biasanya terdiri dari banyak baris yang bisa dimengerti oleh
komputer. Bahasa pemrograman ini wajib dikuasai oleh seorang developer agar
dapat membangun sebuah aplikasi/software. Dan untuk membuat aplikasi
tertentu maka digunakan juga bahasa pemrograman yang sesuai dengan
kebutuhan aplikasi yang akan dibuat tersebut.
									</p>
									<a href="news_feed/bahasa pemograman.pdf#" class="btn btn-default">Read more</a>
									</article>
									</div>
					</div>
					<div class="col-md-12">
						<div id="recent-blog" class="owl-carousel">
							<div class="row recent-post-wrapper">
								<div class="col-md-6">
									<a href="news_feed/sistem operasi.pdf#"><img src="news_feed/Special-Purpose-Distributions.jpg" class="img-responsive" alt="" /></a>
								</div>
								<div class="col-md-6">
									<article>
										<div class="article-title">
											<div class="post-date"><span>11</span>Sept</div>
											<h5><a href="news_feed/sistem operasi.pdf#">SISTEM OPERASI, SOFTWARE APLIKASI & BAHASA PEMROGRAMAN
BESERTA PERBEDAAN ANTAR KETIGANYA</a></h5>
											
										</div>
										<p>
										ISTEM OPERASI, SOFTWARE APLIKASI & BAHASA PEMROGRAMAN
BESERTA PERBEDAAN ANTAR KETIGANYA
Perbedaan Sistem Operasi, Software Aplikasi, Bahasa Pemrograman
										</p>
										<a href="news_feed/sistem operasi.pdf#" class="btn btn-default">Read more</a>
									</article>
								</div>
							</div>
							<div class="row recent-post-wrapper">
								<div class="col-md-6">
									<a href="news_feed/Artikel Teknologi.pdf#"><img src="news_feed/foto artikel.jpg" class="img-responsive" alt="" /></a>
								</div>
								<div class="col-md-6">
									<article>
										<div class="article-title">
											<div class="post-date"><span>12</span>Sept</div>
											<h5><a href="news_feed/Artikel Teknologi.pdf#">Artikel Tentang Teknologi</a></h5>
											
										</div>
									<p>
									Artikel Teknologi Mengenai Perkembangan Komputer – Teknologi sering dikaitkan dengan komputer. Karena komputer memang penemuan yang telah merubah banyak sekali perubahan di belahan dunia manapun. Oleh karena itu, bisa dianggap komputer adalah kilas balik dari kemajuan dunia teknologi. Sehingga dengan adanya komputer ini, manusia dapat mengerjakan pekerjaan lebih cepat dan efisien.
									</p>
									<a href="news_feed/Artikel Teknologi.pdf#" class="btn btn-default">Read more</a>
									</article>
									</div>
							</div>
							<div class="row recent-post-wrapper">
								<div class="col-md-6">
									<a href="news_feed/sejarah komputer.pdf#"><img src="news_feed/komputer.png" class="img-responsive" alt="" /></a>
								</div>
								<div class="col-md-6">
									<article>
										<div class="article-title">
											<div class="post-date"><span>19</span>Sept</div>
											<h5><a href="news_feed/sejarah komputer.pdf#">Sejarah Komputer</a></h5>
											
										</div>
									<p>
									Sejarah Komputer
Generasi Pertama
Berawal dari gagasan Charles Babbage (lahir 26 Desember 1791 – meninggal 18 Oktober 1871 pada umur 79 tahun) adalah seorang matematikawan dari Inggris yang pertama kali mengemukakan gagasan tentang komputer yang dapat diprogram. Pada masa itu, perhitungan dengan menggunakan tabel matematika sering mengalami kesalahan. Babbage ingin mengembangkan cara melakukan perhitungan secara mekanik, sehingga dapat mengurangi kesalahan perhitungan yang sering dilakukan oleh manusia. Saat itu, Babbage mendapat inspirasi dari perkembangan mesin hitung. Beliau merupakan penemu mesin komputer pertama.
									</p>
									<a href="news_feed/Artikel Teknologi.pdf#" class="btn btn-default">Read more</a>
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

	<!-- Go to top -->
	<script src="js/totop/jquery.ui.totop.js"></script>	
	<script src="js/totop/setting.js"></script>
	
	<!-- custom javascript -->
	<script src="js/custom.js"></script>
	
	<!-- Theme option-->
	<script src="js/theme-option/demosetting.js"></script>	
  </body>
</html>
