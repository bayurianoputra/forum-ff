<?php require_once( 'backend/cms.php' ); ?>
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

    <title><cms:editable name='title_page' type='text'>  </cms:editable></title>

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
	<div class="demo-panel">
		<h6>Color options</h6>
		<ul class="stylechanger tooltips">
			<li><a id="color1" href="index.php#" data-skin="default.css"></a></li>
			<li><a id="color2" href="index.php#" data-skin="pink.css"></a></li>				
			<li><a id="color3" href="index.php#" data-skin="navy.css"></a></li>
			<li><a id="color4" href="index.php#" data-skin="blue.css"></a></li>	
			<li><a id="color5" href="index.php#" data-skin="orange.css"></a></li>
			<li><a id="color6" href="index.php#" data-skin="purple.css"></a></li>
			<li><a id="color7" href="index.php#" data-skin="violet.css"></a></li>
			<li><a id="color8" href="index.php#" data-skin="green.css"></a></li>			
			<li><a id="color9" href="index.php#" data-skin="misty.css"></a></li>
			<li><a id="color10" href="index.php#" data-skin="yellow.css"></a></li>				
		</ul>
		<!--div class="clearfix"></div>
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
		</ul-->
		<div class="clearfix"></div>
		<h6>Bonus</h6>
		<ul class="layout">
			<li class="full">
				<a href="underconstruction/index.html" target="_blank" class="btn btn-bordered btn-primary btn-block">underconstruction</a>
			</li>
		</ul>
	</div>	
	<a class="openpanel" href="index.html#" title=""><i class="icon-equalizer2"></i></a>
	<!-- End demo options --> 
		
	<!-- Start featured -->
	<div id="featured" class="slide-wrapper box-with-text">
		<div class="text-wrapper">
			<div class="container">
				<div class="row">
					<div class="col-md-8 col-md-offset-2">
						<span>We are</span>
						<p>
						I-MiNOR 
						</p>
					</div>
				</div>
			</div>
		</div>
		<ul class="home-link">
			<li><a href="#">Java</a></li>
			<li><a href="#">Web Design</a></li>
			<li><a href="#">Join Coffe</a></li>
		</ul>
	</div>
	<!-- End featured -->
	
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
						<a class="navbar-brand" href="index.html#"><img src="" alt="" /></a>
					</div>
					<!-- End navbar-header -->
					
					<!-- Start nav-collapse -->
					<div id="navbar" class="collapse navbar-collapse">
						<div class="right-containt">
							<div class="btn-group">
								
							</div>
							<div class="btn-group search-group">
								<a href="index.html#" class="search dropdown-toggle" data-toggle="dropdown"><i class="icon-search2"></i></a>
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
									<li><a href="portfolio-alt1.html">About Forum</a></li>
									<li><a href="About_Member.php">About Member</a></li>
									
								</ul>
							</li>
							
						</ul>
					</div>
					<!-- End nav-collapse -->
				</div>
			</nav>
		<!-- End navbar -->
		
		<!-- Start about -->
		<section id="about" class="containt">
			<div class="container">
				<div class="row">
					<div class="col-md-8 col-md-offset-2 text-center marginbot30">
						<div class="heading">
							<h3>Welcome <span>To</span></h3>
							<p>The <a href="index.html#">I-MiNOR</a> Forum </p>
							<span class="linner"></span>
						</div>
						<cms:editable name='about' type='richtext'> </cms:editable>
												
					</div>
					<!--div class="col-md-4 column-box">
						<i class="icon-desktop icon-primary icon-5x icon-center"></i>
						<span class="sparator-line on-right"></span>
						<!h4>Web design</h4>
						<p>
						Sit illud inciderint ut, sale interesset qui patrioque rationibus instructior usu, eu nibh liberavisse soluta diceret electram duo quod labore.
						</p>
						<a href="index.html#" class="btn btn-default">learn more</a>
					</div>
					<div class="col-md-4 column-box">
						<i class="icon-tools icon-primary icon-5x icon-center"></i>
						<h4>Graphic design</h4>
						<p>
						Sit illud inciderint ut, sale interesset qui patrioque rationibus instructior usu, eu nibh liberavisse soluta diceret electram duo quod labore.
						</p>
						<a href="index.html#" class="btn btn-default">learn more</a>
					</div>
					<div class="col-md-4 column-box">
						<i class="icon-trophy icon-primary icon-5x icon-center"></i>
						<span class="sparator-line on-left"></span>
						<h4>logo design</h4>
						<p>
						Sit illud inciderint ut, sale interesset qui patrioque rationibus instructior usu, eu nibh liberavisse soluta diceret electram duo quod labore.
						</p>
						<a href="index.html#" class="btn btn-default">learn more</a>
					</div-->
				</div>
			</div>
		</section>
		<!-- End about -->
		
		<div class="clearfix marginbot20"></div>
		
		<!-- Start team -->
		<div class="column-wrapper our-team">
			<div class="container">
				<div class="row">
					<div class="col-md-4 half-column bg1">
						<div class="half-containt">
							<div class="heading">
								<h3>Our <span>team</span></h3>
								<p>meet our professional team</p>
								<span class="linner"></span>
							</div>
						</div>
					</div>
					<div class="col-md-8 team-wrapper">
						<div id="team" class="owl-carousel">
							<div class="row">
								<div class="col-md-5 text-center">
									<img src="img/gallery/670x670/mas_teguh.png" class="img-responsive" alt="" />
								</div>
								<div class="col-md-7 team-detail">
									<span>LEADER</span>
									<h3>TEGUH ARI PAMUNGKAS</h3>
									<p>
									
									</p>
									<div class="team-network">
										<a href="index.html#"><i class="icon-facebook icon-4x"></i></a>
										<a href="index.html#"><i class="icon-twitter icon-4x"></i></a>
										<a href="index.html#"><i class="icon-linkedin icon-4x"></i></a>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-5 text-center">
									<img src="img/team/team02.png" class="img-responsive" alt="" />
								</div>
								<div class="col-md-7 team-detail">
									<span>PROGRAMMER</span>
									<h3>DERY FEBRIANTARA</h3>
									<p>
									Maiorum et sit vidit saepe. Gloriatur interesset no sed in nec posse commodo doming everti quo.
									</p>
									<div class="team-network">
										<a href="index.html#"><i class="icon-facebook icon-4x"></i></a>
										<a href="index.html#"><i class="icon-twitter icon-4x"></i></a>
										<a href="index.html#"><i class="icon-linkedin icon-4x"></i></a>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-5 text-center">
									<img src="img/team/team03.png" class="img-responsive" alt="" />
								</div>
								<div class="col-md-7 team-detail">
									<span>PUBLIC RELATIONS</span>
									<h3>BAYU RIANO PUTRA</h3>
									<p>
									Hal yang terpenting dalam hidup ini adalah kalian semua yang ada di forum ini , disini...saat ini:<DIV></DIV>
									</p>
									<div class="team-network">
										<a href="index.html#"><i class="icon-facebook icon-4x"></i></a>
										<a href="index.html#"><i class="icon-twitter icon-4x"></i></a>
										<a href="index.html#"><i class="icon-linkedin icon-4x"></i></a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="image-bg on-left bg1"><span class="overlay"></span></div>
		</div>
		<!-- End team -->
		
		<div class="clearfix"></div>
		
		<!-- Start portfolio -->
		<section class="gallery-wrapper">
			<div class="container">
				<div class="row">
					<div class="col-md-8 col-md-offset-2 text-center">
						<div class="heading">
							<!--h3>our <span>portfolio</span></h3>
							<p>Latest project from portfolio</p>
							<span class="linner"></span>
						</div>
						<div class="clearfix"></div>
						<!-- Start gallery filter  -->
                        <!--ul class="filter-items">
                            <li data-filter="" class="active"><span>All</span></li>
                            <li data-filter="web"><span>Web</span></li>
                            <li data-filter="graphic"><span>Graphic</span></li>
                            <li data-filter="logo"><span>Logo</span></li>
                            <li data-filter="photos"><span>Photos</span></li>
                        </ul>
						<!-- End gallery filter -->
					</div>
				</div>
			</div>
			<!-- Start gallery container -->
			<!--div class="container-fluid">
                <div class="row">
                    <div id="masonry" class="masonry">
                        <div class="grid-sizer col-md-3 col-sm-6 col-xs-12"></div>
                        <div data-filter="web" class="grid-item col-md-3 col-sm-6 col-xs-12 img-wrapper">
                            <div class="img-caption">
                                <div class="image-title">
                                    <h5><a href="index.html#">Tractatoseos</a></h5>
                                    <a href="index.html#">Web design</a>
                                </div>
                                <div class="zoom"><a href="img/gallery/img01.jpg" class="img-zoom" data-pretty="prettyPhoto"><i class="icon-magnifying-glass icon-3x"></i></a></div>
                            </div>
                            <img src="img/gallery/img01.jpg" class="img-maxwidth" alt="" />
                        </div>
                        <div data-filter="graphic" class="grid-item col-md-3 col-sm-6 col-xs-12 img-wrapper">
                            <div class="img-caption">
                                <div class="image-title">
                                    <h5><a href="index.html#">Assentior</a></h5>
                                    <a href="index.html#">Graphic</a>
                                </div>
                                <div class="zoom"><a href="img/gallery/img02.jpg" class="img-zoom" data-pretty="prettyPhoto"><i class="icon-magnifying-glass icon-3x"></i></a></div>
                            </div>
                            <img src="img/gallery/img02.jpg" class="img-maxwidth" alt="" />
                        </div>
                        <div data-filter="logo" class="grid-item col-md-6 col-sm-6 col-xs-12 img-wrapper">
                            <div class="img-caption">
                                <div class="image-title">
                                    <h5><a href="index.html#">Repudiandae</a></h5>
                                    <a href="index.html#">Photography</a>
                                </div>
                                <div class="zoom"><a href="img/gallery/img03.jpg" class="img-zoom" data-pretty="prettyPhoto"><i class="icon-magnifying-glass icon-3x"></i></a></div>
                            </div>
                            <img src="img/gallery/img03.jpg" class="img-maxwidth" alt="" />
                        </div>
                        <div data-filter="photos" class="grid-item col-md-3 col-sm-6 col-xs-12 img-wrapper">
                            <div class="img-caption">
                                <div class="image-title">
                                    <h5><a href="index.html#">Volumus</a></h5>
                                    <a href="index.html#">Web design</a>
                                </div>
                                <div class="zoom"><a href="img/gallery/img04.jpg" class="img-zoom" data-pretty="prettyPhoto"><i class="icon-magnifying-glass icon-3x"></i></a></div>
                            </div>
                            <img src="img/gallery/img04.jpg" class="img-maxwidth" alt="" />
                        </div>
                        <div data-filter="web" class="grid-item col-md-3 col-sm-6 col-xs-12 img-wrapper">
                            <div class="img-caption">
                                <div class="image-title">
                                    <h5><a href="index.html#">At affert</a></h5>
                                    <a href="index.html#">logo</a>
                                </div>
                                <div class="zoom"><a href="img/gallery/img05.jpg" class="img-zoom" data-pretty="prettyPhoto"><i class="icon-magnifying-glass icon-3x"></i></a></div>
                            </div>
                            <img src="img/gallery/img05.jpg" class="img-maxwidth" alt="" />
                        </div>
                        <div data-filter="graphic" class="grid-item col-md-3 col-sm-6 col-xs-12 img-wrapper">
                            <div class="img-caption">
                                <div class="image-title">
                                    <h5><a href="index.html#">Commune</a></h5>
                                    <a href="index.html#">Graphic</a>
                                </div>
                                <div class="zoom"><a href="img/gallery/img06.jpg" class="img-zoom" data-pretty="prettyPhoto"><i class="icon-magnifying-glass icon-3x"></i></a></div>
                            </div>
                            <img src="img/gallery/img06.jpg" class="img-maxwidth" alt="" />
                        </div>
                    </div>
                </div>
            </div-->
			<!-- End gallery container -->
		</section>
		<!-- End portfolio -->
		
		<div class="clearfix"></div>
		
		<!-- Start blog -->
		<section class="containt">
			<div class="container">
				<div class="row">
					<div class="col-md-8 col-md-offset-2 text-center">
						<div class="heading">
							<h3>Our <span>News</span></h3>
							<p></p>
							<span class="linner"></span>
						</div>
					</div>
					<div class="col-md-12">
						<div id="recent-blog" class="owl-carousel">
							<div class="row recent-post-wrapper">
								<div class="col-md-6">
									<a href="index.html#"><img src="news_feed/Special-Purpose-Distributions.jpg" class="img-responsive" alt="" /></a>
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
									<a href="news_feed/Virus.pdf#"><img src="news_feed/logo_virus.png" class="img-responsive" alt="" /></a>
								</div>
								<div class="col-md-6">
									<article>
										<div class="article-title">
											<div class="post-date"><span>11</span>Sept</div>
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
											<div class="post-date"><span>11</span>Sept</div>
											<h5><a href="news_feed/bahasa pemograman.pdf#">Bahasa pemrograman</a></h5>
											
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
							<div class="row recent-post-wrapper">
								<div class="col-md-6">
									<a href="news_feed/Artikel Teknologi.pdf#"><img src="news_feed/foto artikel.jpg" class="img-responsive" alt="" /></a>
								</div>
								<div class="col-md-6">
									<article>
										<div class="article-title">
											<div class="post-date"><span>12<span>Sept</div>
											<h5><a href="news_feed/Artikel Teknologi.pdf#">Artikel Tentang Teknologi</a></h5>
											
										</div>
									<p>
									Artikel Teknologi Mengenai Perkembangan Komputer – Teknologi sering dikaitkan dengan komputer. Karena komputer memang penemuan yang telah merubah banyak sekali perubahan di belahan dunia manapun. Oleh karena itu, bisa dianggap komputer adalah kilas balik dari kemajuan dunia teknologi. Sehingga dengan adanya komputer ini, manusia dapat mengerjakan pekerjaan lebih cepat dan efisien.
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
		<!-- End blog -->
		
		<div class="clearfix"></div>
		
		<!-- Start client and twitter -->
		<div class="column-wrapper">
			<div class="container">
				<div class="row">
					<div class="col-md-6">
						<div class="client-wrapper">
							<div class="client-logo">
								<a href="index.html#" class="logo-link">
									<span class="client-hover"><img src="img/clients/client01-hover.png" alt="" /></span>
									<img src="img/clients/mokapedia-stempel.png" class="client" alt="" />
								</a>
							</div>
							<div class="client-logo">
								<a href="index.html#" class="logo-link">
									<span class="client-hover"><img src="img/clients/client02-hover.png" alt="" /></span>
									<img src="img/clients/client02.png" class="client" alt="" />
								</a>
							</div>
							<div class="client-logo">
								<a href="index.html#" class="logo-link">
									<span class="client-hover"><img src="img/clients/client03-hover.png" alt="" /></span>
									<img src="img/clients/client03.png" class="client" alt="" />
								</a>
							</div>
							<div class="client-logo">
								<a href="index.html#" class="logo-link">
									<span class="client-hover"><img src="img/clients/client04-hover.png" alt="" /></span>
									<img src="img/clients/client04.png" class="client" alt="" />
								</a>
							</div>
							<div class="client-logo">
								<a href="index.html#" class="logo-link">
									<span class="client-hover"><img src="img/clients/client05-hover.png" alt="" /></span>
									<img src="img/clients/client05.png" class="client" alt="" />
								</a>
							</div>
							<div class="client-logo">
								<a href="index.html#" class="logo-link">
									<span class="client-hover"><img src="img/clients/client06-hover.png" alt="" /></span>
									<img src="img/clients/client06.png" class="client" alt="" />
								</a>
							</div>
						</div>
					</div>
					<div class="col-md-6 text-center half-column bg1">
						<div class="half-containt">
							<div class="twitter-widget">
								<div class="twitter-icon"><i class="icon-twitter4"></i></div>
								<div class="tweecool"></div>
								<p><label>Follow us :</label> <a href="index.html#">@tooku_corp</a></p>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="image-bg on-right bg2"><span class="overlay"></span></div>
		</div>
		<!-- End client and twitter -->
		
		<div class="clearfix"></div>
		
		<!-- Start pricing -->
		
		
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
	
	<!-- vegas -->
	<script src="js/vegas/jquery.vegas.min.js"></script>
	<script src="js/vegas/setting.js"></script>

	<!-- Owl carousel -->
	<script src="js/owlcarousel/owl.carousel.js"></script>
    <script src="js/owlcarousel/setting.js"></script>
	
	<!-- masonry -->
	<script src="js/masonry/masonry-3.1.4.js"></script>	
	<script src="js/masonry/masonry.filter.js"></script>
	<script src="js/masonry/setting.js"></script>

	<!-- prettyPhoto -->
	<script src="js/prettyPhoto/jquery.prettyPhoto.js"></script>
	<script src="js/prettyPhoto/setting.js"></script>
	
	<!-- ticker -->
	<script src="js/ticker/ticker.js"></script>
	<script src="js/ticker/setting.js"></script>

	<!--[if lte IE 9]>
    	<script src="js/tweecool/jquery.xdomainrequest.min.js"></script>      
	<![endif]-->
	<!-- Twitter Feed -->
	<script src="js/tweecool/tweecool.js"></script>
	<script src="js/tweecool/setting.js"></script>

	<!-- Go to top -->
	<script src="js/totop/jquery.ui.totop.js"></script>	
	<script src="js/totop/setting.js"></script>
	
	<!-- custom javascript -->
	<script src="js/custom.js"></script>
	
	<!-- Theme option-->
	<script src="js/theme-option/demosetting.js"></script>	
  </body>
</html>
<?php COUCH::invoke(); ?>