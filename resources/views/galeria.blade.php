
<!DOCTYPE html>
<html lang="en">
<link rel="icon" type="image/vnd.microsoft.icon" href="assets/img/logo.ico">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--<link rel="stylesheet" href="{{asset('style.css')}}">-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>

    <title>JCI Tunari</title>
		<link rel="shortcut icon" href="assets/demo/images/favourite-icon-1.html">
    <!-- All CSS Files -->		
		<link href="https://fonts.googleapis.com/css?family=Quicksand:400,500,600,700&amp;display=swap" rel="stylesheet">
		<link rel="stylesheet" type="text/css" href="assets/bootstrap/css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="assets/css/themify-icons.css">
		<link rel="stylesheet" type="text/css" href="assets/css/slick.css">
		<link rel="stylesheet" type="text/css" href="assets/css/slick-theme.css">
		<link rel="stylesheet" type="text/css" href="assets/css/slicknav.css">
		<link rel="stylesheet" type="text/css" href="assets/css/aos.css">
		<link rel="stylesheet" type="text/css" href="assets/venobox/venobox.css">
		<link rel="stylesheet" type="text/css" href="assets/css/owl.carousel.css">
		<link rel="stylesheet" type="text/css" href="assets/css/owl.theme.default.css">
		<link rel="stylesheet" type="text/css" href="assets/css/style.css">
		<link rel="stylesheet" type="text/css" href="assets/css/responsive.css">

</head>
<body>

    <!-- Start Preloader -->
		<div id="preloader" style="background: #ffffff url('assets/img/preloader.gif') no-repeat center center;"></div>
		<!-- End Preloader -->

		<!-- Start Header Section -->
		<header id="header-section">
			<div class="header-top clearfix">
				<div class="container">
					

					<div class="float-right">
						<ul class="header_social">
							<li><a href="https://twitter.com/jcitunari/" target="_blank"><i class="ti-twitter-alt"></i></a></li>
							<li><a href="https://www.instagram.com/jcitunari/" target="_blank"><i class="ti-instagram"></i></a></li>
							<li><a href="https://www.facebook.com/JCITunari" target="_blank"><i class="ti-facebook"></i></a></li>
							<li><a href="https://jcitunari.tumblr.com" target="_blank"><i class="ti-tumblr-alt"></i></a></li>
						</ul>
					</div>
				</div>
			</div>
			<!-- End header-top -->
			<div class="clearfix"></div>
			
			<div class="main_header sticky-header sticky-header2">
				<div class="container">
					<div class="row">
						<!-- Start Logo -->
						<div class="col-lg-2 col-md-2 col-sm-6 col-12">
							<div class="site_logo">
								<img src="assets/img/logo.png" alt="jci-tunari - unidos impactamos mejor" />
							</div>	

							<!--<div cla	ss="site_logo sticky">
								<img src="assets/img/logo-sticky.png" alt="jci-tunari - unidos impactamos mejor" />
							</div>-->
						</div>
						<!-- End Logo -->

						<!-- Start Main Menu -->
						<div class="col-lg-10 col-md-10 col-sm-6 col-12">
							<nav id="navigation" class="main-menu text-right clearfix">
								<ul> 
									<li><a class="ref" href="{{ route('welcome') }}">Volver a Inicio</a></li>
									<li><a href="{{ route('events') }}">Convocatoria</a></li>
									<!-- Button trigger modal -->
									<li><a href="#exampleModalCenter" data-toggle="modal">.      .</a></li>
									
								</ul>
							</nav>
							<div id="mobile_menu"></div>
						</div>
						<!-- End Main Menu -->

					</div>
				</div>
			</div>
		</header>
		<!-- End Header Section -->
        <!-- End Header Section -->
        
        
		<div class="clearfix"></div>

<!-- Start Banner Area -->
<section id="banner-area" class="banner-area" style="background-image: url(assets/img/slider/1.jpg);">	
    <div class="container text-center">
        <h3>GALERIA "INSPIRA CON UNA IMAGEN"</h3>
        
        <!--<p>Homepage | <a href="#">Blog Details</a></p>-->
    </div>
</section>
<!-- End Banner Area -->



<section class="bg-light" id="carrousel">
  <div class="album py-5 bg-light">
    <div class="container" id="div"> 

        <div id="carouselExampleFade" class="carousel slide carousel-fade py-5" data-ride="carousel">
            <ol class="carousel-indicators py-5">
                <li data-target="#carouselExampleFade" data-slide-to="0" class="active"></li>
                @foreach($fotografias as $fotografia)
                <li data-target="#carouselExampleFade" data-slide-to="{{ $fotografia['id']}}"></li>
                @endforeach
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="{{asset('images/Post.jpg')}}" class="d-block w-100" width="100%">
                    <!--<div class="carousel-caption d-none d-md-block">
                        <h5>First slide label</h5>
                        <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
                    </div>-->
                </div>
                @foreach($fotografias as $fotografia)
                <div class="carousel-item">
                    <img src="{{ $fotografia['ubicacion'] }}" class="d-block w-100" width="100%">
                    <div class="carousel-caption d-none d-md-block" style="background: rgba(0, 0, 0, 0.0)">
                        <h5 class="color-jci" style="text-align: right;"> {{ $fotografia['titulo'] }}</h5>
                        <p style="text-align: right;"> By: {{ $fotografia['autor'] }}</p>
                    </div>
                </div>
                @endforeach

            </div>
            <a class="carousel-control-prev" href="#carouselExampleFade" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleFade" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>

        <div class="row" id="galeria">
            @foreach($fotografias as $fotografia)
            <div class="col-md-4">
                <div class="card mb-4 shadow-sm single-work">
                    <img class="bd-placeholder-img card-img-top" width="100%" height="225" src="{{ $fotografia['ubicacion'] }}" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: Thumbnail"></img>
                    <div class="card-body work-content" style="background: rgba(255, 255, 255); width:90%">
                        <h4 style="color:#20c997">{{ $fotografia['titulo'] }}</h4>
                        <p class="card-text" style="color:black">{{ $fotografia['descripcion'] }}</p>
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="btn-group">
                                <a type="button" class="btn btn-sm btn-info" href="#carouselExampleFade"  data-slide-to="{{ $fotografia['id']}}">View</a>
                                <a type="button" href="{{asset($fotografia['ubicacion'])}}" class="venobox btn btn-sm btn-outline-info" data-gall="myGallery">Expand</a>
                            </div>
                            <small style="color:#17a2b8; font-weight: bold; text-align: right;">{{ $fotografia['autor'] }}</small>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
  </div>


<!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Publicacion de fotografias</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
	  </div>
	  <div class="container">
			<form method="POST" action="{{ route('galeria.post') }}" enctype="multipart/form-data">
      <div class="modal-body">
		

				<div class="form-group">
    				<input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Autor/Fotografo" name="autor" maxlength="18" required>
  				</div>
  				<div class="form-group">
    				<input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Titulo" name="titulo" required>
  				</div>
  				<div class="form-group">
    				<textarea class="form-control" id="exampleFormControlTextarea1" rows="2" placeholder="Descripcion" name="descripcion" maxlength="80"></textarea>
  				</div>
  				<!--<div class="form-group">
	  				<div class="row">
		  				<div class="col-md-6">
		  					<label for="exampleFormControlSelect1">Categoria</label>
    						<select class="form-control" id="exampleFormControlSelect1" name="categoria" required>
      							<option>Aficionado</option>
      							<option>Profesional</option>
    						</select>
		  				</div>
		  				<div class="col-md-6">
		  					<label for="exampleFormControlSelect1">Mes</label>
    						<select class="form-control" id="exampleFormControlSelect1" name="mes" required>
								<option>Enero</option>
								<option>Febrero</option>
								<option>Marzo</option>
								<option>Abril</option>
								<option>Mayo</option>
								<option>Junio</option>
								<option>Julio</option>
								<option>Agosto</option>
								<option>Septiembre</option>
								<option>Octubre</option>
								<option>Noviembre</option>
								<option>Diciembre</option>
    						</select>
		 			 	</div>
	  				</div>
    
  				</div>-->
  				<div class="form-group">
    				<label for="exampleFormControlFile1">Example file input</label>
					<input type="file" class="form-control-file" name="foto" required>
  				</div>
				{!! csrf_field() !!}
				
			

      </div>
      <div class="modal-footer" style="display: flex;align-items: center;">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
		<button type="submit" class="btn green-btn popup-btn">Guardar</button>
	  </div>
	  </form>
		</div>
    </div>
  </div>
</div>
<!-- END Modal -->
  
</section>

<!-- Start Footer -->
<footer class="footer-area bg-light">
			<div class="container text-center">
				<div class="row" style="padding:0">	
					<div class="col-md-6 col-12 col-center">
						<h1 class="footer-logo">JCI Tunari</h1>
						<p>Una organización que crea y desarrolla lideres de impacto.</p>						
					</div>
				</div>
				
				<div class="col-md-4 col-12 foot-divider col-center"></div><br/>
				<ul class="social-link" style="margin:0">
					<li><a href="https://twitter.com/jcitunari/" target="_blank"><i class="ti-twitter-alt"></i></a></li>
							<li><a href="https://www.instagram.com/jcitunari/" target="_blank"><i class="ti-instagram"></i></a></li>
							<li><a href="https://www.facebook.com/JCITunari" target="_blank"><i class="ti-facebook"></i></a></li>
							<li><a href="https://jcitunari.tumblr.com" target="_blank"><i class="ti-tumblr-alt"></i></a></li>
				</ul>
			
				<p class="copyright-text">&copy; 2020 JCI Tunari all rights reserved </br> Hosted by <a href="doc/premios_inspirate.pdf" target = "blank" class="post_btn"><img /> LogicalCrow</a></p>
				
			
			</div>
		</footer>
		<!-- End Footer -->
		
		<!-- backtotop - start -->
		<div id="thetop"></div>
		<div id="backtotop">
			<a href="#galeria" id="scroll">
				<i class="ti-arrow-up"></i>
			</a>
		</div>
		<!-- backtotop - end -->

		<!-- All jQuery Files Include here -->
		<script src="assets/js/jquery.js"></script>
		<script src="assets/bootstrap/js/bootstrap.min.js"></script>
		<script src="assets/js/jquery.nav.js"></script>
		<script src="assets/js/aos.js"></script>
		<script src="assets/js/jquery.slicknav.js"></script>
		<script src="assets/venobox/venobox.min.js"></script>
		<script src="assets/js/slick.js"></script>
		<script src="assets/js/isotope.pkgd.min.js"></script>
		<script src="assets/js/imagesloaded.pkgd.js"></script>
		<script src="assets/js/owl.carousel.js"></script>
		<script src="assets/js/scripts.js"></script>

</body>
</html> 
