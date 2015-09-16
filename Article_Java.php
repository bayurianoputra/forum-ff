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

    <title>I-MiNOR - Article - Java</title>

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
		
		<!-- Start inner head -->
		<div class="inner-header">
			<div class="inner-overlay">
				<div class="container">
					<div class="row">
						<div class="col-md-6 col-sm-6">
							<h3><i class="icon-book-open"></i> Java</h3>
						</div>
						<div class="col-md-6 col-sm-6 text-right">
							<ol class="breadcrumb">
							  <li><a href="index.php#">Back To Home</a></li>
							  
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
						<div class="row">
							<div class="article-post">
								<div class="col-md-5 article-media">
									<a href="Ebook Java Visual.pdf#"><img src="img/Java-Logo.jpg" class="img-thumbnail img-responsive" alt="" /></a>
								</div>
								<div class="col-md-7">
									<article>
										<div class="article-title">
											<div class="post-date"><span>06</span>Sept</div>
											<h5><a href="Ebook Java Visual.pdf#">
												Ebook Java Visual</a></h5>
										</div>
										<p>
										Bahasa Java adalah bahasa pemrograman berorientasi obyek,
sehingga untuk memperoleh pemahaman yang lebih baik terhadap materi
pada bab-bab selanjutnya, perlu disampaikan beberapa topik mengenai
pemrograman berorientasi obyek yang berhubungan langsung dengan
topik-topik
yang
akan
dibahas,
diantaranya
mengenai
konsep
pemrograman berorientasi obyek, inheritance dan constructor. Topik-topik
lain dalam pemrograman berorientasi obyek akan dibahas lebih lanjut bila
memang diperlukan.
										</p>
										<a href="Ebook Java Visual.pdf#" class="btn btn-default">Read more</a>
									</article>
								</div>
							</div>
						</div>
						<!-- End article 1 -->
						
						<div class="divider"></div>
						
						<!-- Start article 2 -->
						<div class="row">
							<div class="article-post">
								<div class="col-md-5 article-media">
									<blockquote>
										<p>
										Jangan menganggap diri kita tidak mampu sebelum , MENCOBA , BELAJAR , dan BERLATIH

										<p>" Bayu Riano Putra (Public Relations)"</p>

										</p>
									</blockquote>
								</div>
								<div class="col-md-7">
									<article>
										<div class="article-title">
											<div class="post-date"><span>06</span>Sept</div>
											<h5><a href="Gui.pdf#">Java GUI</a></h5>
											
										</div>
										<p>
										GUI (Grafik User Interface)
Pertanyaan mendasar mengenai penggunaan tampilan atau GUI dalam program
adalah seberapa penting hal itu dilakukan. Bukankah program sudah berjalan sesuai
dengan permintaan?
Pertanyaan itu biasanya menghantui setiap pengembang program (programmer)
pada saat membuat program.
Tentu saja kepentingan penggunaan tampilan akan berpulang pada penempatan
program itu sendiri.
										</p>
										<a href="Gui.pdf#" class="btn btn-default">Read more</a>
									</article>
								</div>
							</div>
						</div>
						<!-- End article 2 -->
						
						<div class="divider"></div>
						
						<!-- Start article 3 -->
						<div class="row">
							<div class="article-post">
								<div class="col-md-5 article-media">
									<a href="Pocket Book WindowBuilder Eclipse.pdf#"><img src="img/300px-Java_logo.jpg" class="img-thumbnail img-responsive" alt="" /></a>
								</div>
								
								<div class="col-md-7">
									<article>
										<div class="article-title">
											<div class="post-date"><span>06</span>Sept</div>
											<h5><a href="Pocket Book WindowBuilder Eclipse.pdf#">Pocket Book Windows Builder Eclipse</a></h5>
											
										</div>
										<p>
										WindowBuilder adalah GUI Builder yang berfungsi untuk memudahkan programmer dalam membuat
aplikasi Java dengan Eclipse.Jadi dengan tool ini, anda hanya drag and drop komponen Swing
Java.WindowBuilder include di dalam Eclipse Juno dan Eclipse edisi sebelumnya yaitu Helios.
WindowBuilder cara menggunakannya hampir sama dengan GUI Builder milik Netbeans.Akan tetapi
menurut pengalaman penulis, code generator dari komponen yang di drag and drop WindowBuilder
lebih simpel dari GUI Builder milik Netbeans.Jadi anda dapat mengubahnya dengan mudah. Pada
tutorial kali ini saya akan membuat aplikasi database sederhana dengan menggunakan Java dan
MySQL.
										</p>
										<a href="Pocket Book WindowBuilder Eclipse.pdf#" class="btn btn-default">Read more</a>
									</article>
								</div>
							</div>
						</div>
						
						<!-- End article 3 -->
						
						<div class="divider"></div>
						
						<!-- Start article 4 -->
						<div class="row">
							<div class="article-post">
								<div class="col-md-5 article-media">
									<div class="embed-container">							
										<iframe src="https://w.soundcloud.com/player/?url=http%3A%2F%2Fapi.soundcloud.com%2Ftracks%2F79069430" class="img-thumbnail"></iframe>	
									</div>	
								</div>
								<div class="col-md-7">
									<article>
										<div class="article-title">
											<div class="post-date"><span>18</span>July</div>
											<h5><a href="blog-alt1-rightsidebar.html#">Ut est probo dolore populo</a></h5>
											<ul class="mata-post">
												<li><a href="blog-alt1-rightsidebar.html#"><i class="icon-profile-male"></i> John doe</a></li>
												<li><a href="blog-alt1-rightsidebar.html#"><i class="icon-pencil"></i> Photography</a></li>
												<li><a href="blog-alt1-rightsidebar.html#"><i class="icon-chat"></i> 3 comments</a></li>
											</ul>
										</div>
										<p>
										Iusto veritus an eos, eam ad graece nusquam volumus, eos eu quot sonet. Ut est probo dolore populo, ut tamquam intellegat vim, ea quo elitr dictas. An audire ceteros duo, dicunt debitis his at, has veri idque et. Vix ea elitr antiopam, pri solum prompta dissentias no.
										</p>
										<a href="blog-alt1-rightsidebar.html#" class="btn btn-default">Read more</a>
									</article>
								</div>
							</div>
						</div>
						<!-- End article 4 -->
						
						<div class="divider"></div>
						
						<ul class="pagination margin-clear">
							<li class="disabled"><a href="blog-alt1-rightsidebar.html#">Prev</a></li>
							<li class="active"><a href="blog-alt1-rightsidebar.html#">1</a></li>
							<li><a href="blog-alt1-rightsidebar.html#">2</a></li>
							<li><a href="blog-alt1-rightsidebar.html#">3</a></li>
							<li><a href="blog-alt1-rightsidebar.html#">4</a></li>
							<li><a href="blog-alt1-rightsidebar.html#">5</a></li>
							<li><a href="blog-alt1-rightsidebar.html#">Next</a></li>
						</ul>
					</div>
					<!-- End article -->
					
					<!-- Start aside -->
					<div class="col-md-3 col-sm-3">
						<aside>
							<div class="widget">
								<h5 class="widget-title">Latest work</h5>
								<ul class="popular-item">
									<li><a href="blog-alt1-rightsidebar.html"><img src="img/gallery/thumbs/thumb01.jpg" class="img-responsive" alt="" /></a></li>
									<li><a href="blog-alt1-rightsidebar.html"><img src="img/gallery/thumbs/thumb02.jpg" class="img-responsive" alt="" /></a></li>
									<li><a href="blog-alt1-rightsidebar.html"><img src="img/gallery/thumbs/thumb03.jpg" class="img-responsive" alt="" /></a></li>
									<li><a href="blog-alt1-rightsidebar.html"><img src="img/gallery/thumbs/thumb04.jpg" class="img-responsive" alt="" /></a></li>
									<li><a href="blog-alt1-rightsidebar.html"><img src="img/gallery/thumbs/thumb05.jpg" class="img-responsive" alt="" /></a></li>
									<li><a href="blog-alt1-rightsidebar.html"><img src="img/gallery/thumbs/thumb06.jpg" class="img-responsive" alt="" /></a></li>
									<li><a href="blog-alt1-rightsidebar.html"><img src="img/gallery/thumbs/thumb07.jpg" class="img-responsive" alt="" /></a></li>
									<li><a href="blog-alt1-rightsidebar.html"><img src="img/gallery/thumbs/thumb08.jpg" class="img-responsive" alt="" /></a></li>
									<li><a href="blog-alt1-rightsidebar.html"><img src="img/gallery/thumbs/thumb09.jpg" class="img-responsive" alt="" /></a></li>
									<li><a href="blog-alt1-rightsidebar.html"><img src="img/gallery/thumbs/thumb10.jpg" class="img-responsive" alt="" /></a></li>
								</ul>
							</div>
							<div class="widget">
								<h5 class="widget-title">Categories</h5>
								<ul class="cat">
									<li><a href="Article_Java.php#"><i class="icon-pencil"></i> Java</a></li>
									<li><a href="Article_Web.php#"><i class="icon-pencil"></i> Web</a></li>
									
								</ul>
							</div>
							<div class="widget">
								<h5 class="widget-title">Recent post</h5>
								<ul class="recent">
									<li>
										<a href="blog-alt1-rightsidebar.html#" class="post-thumb" ><img src="img/blog/thumbs/thumb01.jpg" class="img-responsive" alt="" /></a>
										<h6><a href="blog-alt1-rightsidebar.html#">Sale ipsum ea nemore</a></h6>
										<p>
										Nam modo hinc an, ancillae oportere assueverit an.
										</p>
									</li>
									<li>
										<a href="blog-alt1-rightsidebar.html#" class="post-thumb" ><img src="img/blog/thumbs/thumb02.jpg" class="img-responsive" alt="" /></a>
										<h6><a href="blog-alt1-rightsidebar.html#">Et insolens assentior</a></h6>
										<p>
										Nam modo hinc an, ancillae oportere assueverit an.
										</p>
									</li>
									<li>
										<a href="blog-alt1-rightsidebar.html#" class="post-thumb" ><img src="img/blog/thumbs/thumb03.jpg" class="img-responsive" alt="" /></a>
										<h6><a href="blog-alt1-rightsidebar.html#">Unum postea alienum</a></h6>
										<p>
										Nam modo hinc an, ancillae oportere assueverit an.
										</p>
									</li>
								</ul>
							</div>
							<div class="widget margintop-min10">
								<h5 class="widget-title">Recent comments</h5>
								<ul class="list-unstyled ticker">
									<li>
										<blockquote class="margin-clear"><p>Kita tidak diciptakan dari cetakan kue. maka menjadi tidak sama dengan orang kebanyakan bukanlah sebuah kesalahan ! . <br>
											<p> Rika_Chu (Member I-MiNOR)</p></p></blockquote>
									</li>
									<li>
										<blockquote class="margin-clear"><p>No omnes nullam inciderint ius, qui ad sale simul primis aeterno assueverit.</p></blockquote>
									</li>
									<li>
										<blockquote class="margin-clear"><p>Sea rebum appareat perfe ctout. Ea meis menandri mei ex nec malis.</p></blockquote>
									</li>
								</ul>
							</div>
							<div class="widget">
								<h5 class="widget-title">Tags</h5>
								<ul class="tags">
									<li><a href="blog-alt1-rightsidebar.html#"><i class="icon-pricetags"></i> Web</a></li>
									<li><a href="blog-alt1-rightsidebar.html#"><i class="icon-pricetags"></i> Design</a></li>
									<li><a href="blog-alt1-rightsidebar.html#"><i class="icon-pricetags"></i> Photo</a></li>
									<li><a href="blog-alt1-rightsidebar.html#"><i class="icon-pricetags"></i> Graphic</a></li>
									<li><a href="blog-alt1-rightsidebar.html#"><i class="icon-pricetags"></i> logo</a></li>
									<li><a href="blog-alt1-rightsidebar.html#"><i class="icon-pricetags"></i> Icon</a></li>
									<li><a href="blog-alt1-rightsidebar.html#"><i class="icon-pricetags"></i> Tips</a></li>
									<li><a href="blog-alt1-rightsidebar.html#"><i class="icon-pricetags"></i> Tutorial</a></li>
									<li><a href="blog-alt1-rightsidebar.html#"><i class="icon-pricetags"></i> Resource</a></li>
									<li><a href="blog-alt1-rightsidebar.html#"><i class="icon-pricetags"></i> App</a></li>
									<li><a href="blog-alt1-rightsidebar.html#"><i class="icon-pricetags"></i> Mobile</a></li>
								</ul>
							</div>
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
			<div class="subfooter">
				<p class="copyright">2015 &copy; Copyright <a href="">I-MiNOR</a> &#45; All Rights Reserved</p>
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
