<footer class="footer">
		<div class="bg-footer footerSection border-top">
			<div class="container">
				<div class="row">
					<div class="col-md-4">
						<div class="footer-links">
							<h3>Helpful Links</h3>
							<div>
								<ul class="links-footer">
									<li><a href="about.html">About Us</a></li>
									<li><a href="impressum.html">Impressum</a></li>
									<li><a href="datenschutz.html">Datenschutz</a></li>
								</ul>
							</div>
							<h3>Social Links</h3>
							<ul class="Sociallinks">
								<li><a href="https://www.facebook.com/BiharFraternity"><i class="fa fa-facebook"></i></a></li>
								<li><a href=" https://www.instagram.com/biharfraternity"><i class="fa fa-instagram"></i></a></li>
								<li><a href="https://www.linkedin.com/company/biharfraternity"><i class="fa fa-linkedin"></i></a></li>
								<li><a href=" https://twitter.com/BiharFraternity"><i class="fa fa-twitter"></i></a></li>
								<li><a href=" https://www.youtube.com/channel/UCt_z3Eg-ZyRtUHGJ-IYFigA"><i class="fa fa-youtube"></i></a></li>
							</ul>
						</div>
					</div>
					<div class="col-md-4">
						<div class="footer-links">
							<h3>Contact US</h3>
							<ul class="links-footer contactlinks">
								<li class="clearfix">
									<i class="fa fa-map-marker fontaddress float-left" style="font-size: 22px;"></i>
									<div class="float-left" style="padding-right: 8px;padding-bottom: 10px;">Hemingstedter Weg<br> 10,22607 Hamburg</div></li>
								<li class="clearfix">
									<i class="fa fa-envelope fontaddress float-left"></i>
									<a href="mailto:connect@biharfraternity.org" class="float-left">connect@biharfraternity.org</a>
								</li>
							</ul>
						</div>
					</div>
					<div class="col-md-4">
						<div class="footer-links">
							<h3>Suggestions ?</h3>
							<div>
								<form>
									<div class="row">
										<div class="col-md-12">
											<div class="form-group">
												<input type="text" name="" class="form-control" placeholder="Name">
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-md-12">
											<div class="form-group">
												<input type="text" name="" class="form-control" placeholder="Email">
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-md-12">
											<div class="form-group">
												<textarea type="text" class="form-control" >Message</textarea>
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-md-12">
											<div class="g-recaptcha" data-sitekey="6LfWYKMUAAAAACa2Pa_SPI5dmfjJs889J_IRwsO8"></div>
											<button class="btn-btn-blue">Submit</button>
										</div>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="bg-black">
			<div class="text-center copyright_footer">
		     <p>Designed & Developed by <a href="https://www.igniterpro.com/" target="_blank"> Igniterpro</a></p>
		  </div>
		</div>
	</footer>

	<script src="js/jquery-min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.mixitup.js"></script>
    <script src="js/owl.carousel.js"></script>
    <script src='https://www.google.com/recaptcha/api.js'></script>
    <script type="text/javascript">
        $(document).ready(function() {
         var owl = $('#galleryslider');
           owl.owlCarousel({
            loop: true,
            nav: true,
            items: 1,
            dots: false,
            autoplaySpeed: 2000,
            autoplay:true,
            autoplayTimeout:1000,
            autoplayHoverPause:true,
            responsive: {
              0: {
                  items: 1
              },
              360: {
                  items: 1
              },
              500: {
                  items: 2
              },
              991: {
                  items: 2
              },
              1200: {
                  items: 1
              }
            }
          });

            $('#galleryslider').on('mouseleave',function(){
                owl.trigger('play.owl.autoplay',[2000])
            })
            $('#galleryslider').on('mouseover',function(){
                owl.trigger('stop.owl.autoplay')
            })
         /*----------------------Our team---------------------------*/ 
          var owl = $('#our_team');
           owl.owlCarousel({
            loop: true,
            nav: true,
            items: 4,
            margin:30,
            dots: false,
            autoplaySpeed: 2000,
            autoplay:true,
            autoplayTimeout:1000,
            autoplayHoverPause:true,
            responsive: {
              0: {
                  items: 1
              },
              360: {
                  items: 2,
                  margin:20
              },
              500: {
                  items: 2
              },
              991: {
                  items: 3
              },
              1200: {
                  items: 4
              }
            }
        });
        $('#our_team').on('mouseleave',function(){
            owl.trigger('play.owl.autoplay',[2000])
        })
        $('#our_team').on('mouseover',function(){
            owl.trigger('stop.owl.autoplay')
        })


            /*----------------------Our team---------------------------*/ 

            $(window).on('scroll', function() {
                if ($(window).scrollTop() > 150) {
                    $('.scrolling-navbar').addClass('top-nav-collapse');
                } else {
                    $('.scrolling-navbar').removeClass('top-nav-collapse');
                }
            });

            /*-------mobile toggle------------*/
            $(".mobile-dropdown").click(function(){
                $(".mobileToggle").toggle();

            });
            $(".mobile-dropdown1").click(function(){
                $(".mobileToggle").hide();
            });
            $(".mobile-dropdown").click(function(){
                $(".mobileToggle1").hide();
            });
            $(".mobile-dropdown1").click(function(){
                $(".mobileToggle1").toggle();
            });
    });
    </script>
</body>
</html>