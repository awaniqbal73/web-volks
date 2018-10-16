<!doctype html>
<html>
    <head>
        <title>Lespoir</title>

        <!-- Link to Owl Carousel  -->
        <link rel="stylesheet" href="owlcarousel/dist/assets/owl.carousel.min.css">
        <link rel="stylesheet" href="owlcarousel/dist/assets/owl.theme.default.css">
        <link rel="stylesheet" href="css/animate.css">
        <link rel="stylesheet" href="css/bost/css/bootstrap.min.css">
		<link rel="stylesheet" href="css/style.css">
		
		<script src="css/bost/js/jquery.js"></script>
		<script src="css/bost/js/bootstrap.min.js"></script>
    </head>

    <body>
        <header>
		
		<div class="container">
								      <div class="hidden-xs hidden-sm hidden-md col-lg-12" style="padding-top:80px;">
								
											<div class="tanyaleft" >ABC 1234567896</div>
											<div class="tanyaright" >ABC 123456123456</div>
									 </div>
									 </div>
		
        <!-- Mobile navbar -->  
						<div id="myNav" class="overlay" style="padding-top:50px;">
						   <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
								<div class="overlay-content">

									<a href="https://www.youtube.com/watch?v=bfte6RrcMc4">About</a>
									<a href="#">Services</a>
									<a href="#">Clients</a>
									<a href="#">Contact</a>
							
							<div class="dropdown">
								<button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">TENTANG 
								<span class="caret"></span></button>
								<ul class="dropdown-menu">
								  <li><a href="#">Sejarah</a></li>
								  <li><a href="#">Kontak</a></li>
								  <li><a href="#">JavaScript</a></li>
								</ul>
						    </div>
							
						  </div>
						</div>
			
							 
							<div class="container-fluid">
								     <div class="col-xs-12 col-sm-12 col-md-12 hidden-lg" >
						<span style="font-size:130px;cursor:pointer; padding:30px; text-align:center; color:white;" onclick="openNav()">&#9776;  <img hspace="30" src="http://via.placeholder.com/600x150?text=Slider+A" /></span>

								</div>
								</div>
						<script>
						function openNav() {
						  document.getElementById("myNav").style.width = "100%";
						}

						function closeNav() {
						  document.getElementById("myNav").style.width = "0%";
						}
						</script>
		
		   <!-- Mobile navbar -->  	 
	
		
		
		
	
		
		   <!-- PC navbar -->  
											
<div id="navbar">
	<div class="container">
	
								     <div class="hidden-xs hidden-sm hidden-md col-lg-12" >

									 
 <img src="http://via.placeholder.com/150x80?text=Logo" />	
 <a href="#">Produk</a>
  <a href="#">Konsultasi</a>
	
			  <div class="dropdown">
    <button class="navbtn dropdown-toggle" type="button" data-toggle="dropdown">Tentang Kami
    <span class="caret"></span></button>
    <ul class="dropdown-menu nav-li">
      <li><a href="#">Sejarah</a></li>
      <li><a href="#">Kontak</a></li>
      <li><a href="#">JavaScript</a></li>
    </ul>
  </div>
			
									
									
				<a style = "position: absolute; text-align:right; right: 0;" href="#">Tanya Kami</a>
			
									</div>
	</div>	
</div>
			
<script>
var prevScrollpos = window.pageYOffset;
window.onscroll = function() {
var currentScrollPos = window.pageYOffset;
  if (prevScrollpos > currentScrollPos) {
    document.getElementById("navbar").style.top = "0";
  } else {
    document.getElementById("navbar").style.top = "-80px";
  }
  prevScrollpos = currentScrollPos;
}
</script>


   <!-- PC navbar -->  

        </header>
		

		
		
		
		

        <div class="container-fluid">
		 TENTANG KAMI

Kulit adalah aset berharga yang dimiliki tubuh kita. Kulit merupakan bagian pelindung terluar tubuh yang melindungi kita dari berbagai macam musim, suhu, kotoran bahkan virus dan bakteri. Sebagai payung pelindung, kulit harus mendapatkan nutrisi yang cukup dan tepat untuk mampu melakukan tugas beratnya.

Beranjak dari pemahaman ini, L'espoir berupaya dan telah menemukan kandungan terbaik yang dimiliki oleh alam untuk menutrisi bagian - bagian kulit terluar sesuai dengan kebutuhannya. Nutrisi alami yang terdapat dalam berbagai jenis tumbuhan adalah yang paling ramah dengan kulit dan mudah diserap tubuh tanpa menimbulkan resiko dan ketergantungan.
</div>
		
		
			
		
		<br><br>
		<br><br><br><br><br><br><br><br><br><br>
		
		<br><br>
		<br><br><br><br>
			
		
		<br><br>
		<br><br><br><br><br><br><br><br><br><br>
		
		<br><br>
		<br><br><br><br>
			
		
		<br><br>
		<br><br><br><br><br><br><br><br><br><br>
		
		<br><br>
		<br><br><br><br>
		
		
		
			  <?php include ("footer.php"); ?>
		
		
		
		
		
		
        
        <!-- Jquery  -->
        <script src="js/jquery.min.js"> </script>
        <script src="owlcarousel/dist/owl.carousel.min.js"></script>
		
        <script>
            // Initialize Owl Carousel Plugin
            $(document).ready(function(){
                var heroSlider = $('.owl-carousel');
                heroSlider.owlCarousel({
                    loop: true,
                    items: 1,
                   // nav: true,
                    dots: false,
                    autoplay: true,
                    autoplayTimeOut: 5000, //5sec
                   // navText:['<i class="fa fa-angle-left fa-2x fa-fw" aria-hidden="true"></i>','<i class="fa fa-angle-right fa-2x fa-fw" aria-hidden="true"></i>'], //we will be using font awesome icon here
                });

                heroSlider.on("changed.owl.carousel", function(event){
                    // selecting the current active item
                    //var item = event.item.index-2;
                    // first removing animation for all captions
                    $('h3').removeClass('animated fadeInUp');
                    //$('.owl-item').not('.cloned').eq(item).find('h3').addClass('animated fadeInUp');
                })

                // No animation in other captions so we need to add animation to owl-item while slide changed.


            })
        </script>
		
	
		
		
	
		
		
		
		
		
		
		
		
		
		
    </body>
</html>