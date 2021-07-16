<!--Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>

<head>
<title>E-LEARNING SMPN 96 JAKARTA</title>
<link href="{{asset('admin/css/bootstrap.css')}}" rel="stylesheet" type="text/css" media="all">
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="{{asset('admin/js/jquery-1.11.0.min.js')}}"></script>
<!-- Custom Theme files -->
<link href="{{asset('admin/css/style.css')}}" rel="stylesheet" type="text/css" media="all"/>
<!-- Custom Theme files -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Study Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!--Google Fonts-->
<!-- start-smoth-scrolling -->
<script type="text/javascript" src="{{asset('admin/js/move-top.js')}}"></script>
<script type="text/javascript" src="{{asset('admin/js/easing.js')}}"></script>
	<script type="text/javascript">
			jQuery(document).ready(function($) {
				$(".scroll").click(function(event){		
					event.preventDefault();
					$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
				});
			});
	</script>
<!-- //end-smoth-scrolling -->
<script src="{{asset('admin/js/menu_jquery.js')}}"></script>
</head>


<body>
<!--header start here-->
<div class="header" id="Home">
	<div class="container">
		 <div class="header-main">
				<!---->
					<div class="header-logo">
						<div class="logo">
						<a href="#Home"><img src="{{asset('admin/images/lo1.png')}}" width="60%" height="60%" alt="" width="100%" height="100%"></a>
						</div>
						<div class="top-nav">
							<span class="icon"><img src="{{asset('admin/images/menu.png')}}" alt=""> </span>
							<ul>
								<li ><a href="#Home">Home</a> </li>
								<li ><a href="#about" >About  </a> </li>
								<li><a href="#kontak"  >Contact</a></li>
								<li><a href="{{ route('login') }}" target="_blank" id="login"><span>Login</span></a></li>
								<li><a href="{{ route('register') }}" target="_blank" id="register"><span>Register</span></a></li>
							</ul>
							<!--script-->
						<script>
							$("span.icon").click(function(){
								$(".top-nav ul").slideToggle(500, function(){
								});
							});
					</script>				
				</div>
				<div class="clearfix"> </div>

					</div>
			<!---->
			<div class="top-menu">					
					<ul>
						<li ><a href="#Home" >Home</a> </li>
						<li ><a href="#about">About  </a> </li>
						<li><a href="#kontak">Contact</a></li>
						<li><a href="#Home"> <img src="{{asset('admin/images/lo1.png')}}" width="60%" height="60%" alt=""> </a></li>
						<li><div class="header-login">
									 <div class="top-nav-right">
										<div id="loginContainer"> <a href="{{ route('login') }}" target="_blank" id="login"><span>Login</span></a>
									  </div>
								   </div>
							</div></li>
							<li><div class="header-login">
								<div class="top-nav-right">
								    <div id="loginContainer"> <a href="{{ route('register') }}" target="_blank" id="register"><span>Register</span></a>
									</div>
								</div>
							</div></li>
					</ul>
			</div>

					<!--script-->
			<div class="bann-bottom">
				<h1>Welcome To</h1>
				<h1>E-Learning SMP Negeri 96 Jakarta</h1>
				<div class="bann-main">
					<div class="col-md-4 bann-grid">
						<img src="{{asset('admin/images/i1.png')}}" width="100%" height="100%" alt="">
					</div>
					<div class="col-md-4 bann-grid">
							<img class="img-circle " src="{{asset('admin/img/SMPN.jpg')}}" width="100%" height="300%" alt="">
					</div>
					<div class="col-md-4 bann-grid">
							<img class="img-circle " src="{{asset('admin/images/i3.jpg')}}" width="90%" height="110%" alt="">
				</div>
				<div class="clearfix"> </div>
			</div>
		 </div>
	 </div>
   </div>
</div>
<!--header end here-->


<!--baner-info start here-->
<div class="banner-info" id="about">
	<div class="container text-center">
		<h1>Sekolah Menengah Pertama Negeri 96 Jakarta</h1>
		<h1>Telah Terakreditasi A</h1>
		<div class="bann-info-btn"><a href="http://sekolah.data.kemdikbud.go.id/index.php/chome/profil/8004EE95-2BF5-E011-AF55-913D6FAF5EDB" target="_blank" class="hvr-bounce-to-right" >Selengkapnya</a></div>
	</div>
</div>
<!--banner-info end here-->


<!--testimonal start here-->
<div class="testimonal">
	<div class="container">
		<div class="testimonal-main">
			 <h2>Tata Cara Registrasi Akun</h2>
			 <h2>E-Learning SMP Negeri 96 Jakarta</h2>
			 <a href="https://drive.google.com/file/d/0B08TCEBcWP9mc3RhcnRlcl9maWxl/view?usp=sharing" target="_blank" class="hvr-bounce-to-right  testimo-btn">Download</a>
			<div class="clearfix"> </div>
		</div>
	</div>
</div>
<!--testimonal end here-->


<!--we work strat her-->
<div class="we-work" id="kontak">
	<div class="container">
		<div class="we-work-main">
			<div class="we-work-top">
				<h2>Kontak Kami</h2>
			</div>
			<div class="map">
				<h1>SMP Negeri 96 Jakarta</h1>
				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3965.6149889010776!2d106.79997021413851!3d-6.314201463546262!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69ee117264d6d5%3A0xd2dd7b534b400e7a!2sSekolah%20Menengah%20Pertama%20Negeri%2096%20Jakarta%20Selatan!5e0!3m2!1sid!2sid!4v1621350293106!5m2!1sid!2sid"> </iframe>
			</div>
	</div>
</div>
<!--we work end here-->


<!--footer start here-->
<div class="footer">
	<div class="container">
		<div class="footer-main">
			 <div class="col-md-4 ftr-grid">
			 	<div class="ftr-grid-left">
			 	    <img src="{{asset('admin/images/location.png')}}" alt="">
			 	</div>
			 	<div class="ftr-grid-right">
				 	<p><span class="local">Telepon : </span><a href="#">(021) 7658121</a></p>
			 	</div>
			   <div class="clearfix"> </div>
			 </div>
			 <div class="col-md-4 ftr-grid">
			 	 <div class="ftr-grid-left">
			 	    <img src="{{asset('admin/images/email.png')}}" alt="">
			 	</div>
			 	<div class="ftr-grid-right">
				 	<p>Jl. Margasatwa Raya Komplek Timah, 
					Kota Jakarta Selatan, <span class="local">Daerah Khusus Ibukota Jakarta. 12450.</span></p>
			 	</div>
			   <div class="clearfix"> </div>
			 </div>
			 <div class="col-md-4 ftr-grid">
			 	 <div class="ftr-grid-left">
			 	    <img src="{{asset('admin/images/phone.png')}}" alt="">
			 	</div>
			 	<div class="ftr-grid-right">
			 		<p><span class="local">Fax : </span><a href="#">(021) 7658121</a></p>
			 	</div>
			   <div class="clearfix"> </div>
			 </div>
			<div class="clearfix"> </div>
		</div>
	</div>
</div>
<!--footer end here-->



<!--copyright start here-->
<div class="copyright">
	<div class="container">
		<div class="copyright-main">
			   <p>© 2021 E-Learning SMPN 96 Jakarta. All rights reserved.</p>
			<div class="clearfix"> </div>
		</div>
	</div>
</div>
<!--copyright end here-->

</body>
</html>