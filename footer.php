<?php
require('header.php');

    /*$to = 'blueraaga@gmail.com';*/
    if(isset($_POST['submit'])){
      $to = 'blueraaga@gmail.com';
      $fullname = $_POST["fullname"];
      $email= $_POST["email"];
      $text= $_POST["message"];
      


      $headers = 'MIME-Version: 1.0' . "\r\n";
      $headers .= "From: " . $email . "\r\n"; // Sender's E-mail
      $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

      $message ='<table style="width:100%">
          <tr>
              <td>'.$fullname.'</td>
          </tr>
          <tr><td>Email: '.$email.'</td></tr>
          <tr><td>Text: '.$text.'</td></tr>
          
      </table>';
      $res = @mail($to, "[CRYPTOINDICATOR] Contact form", $message, $headers);
      // echo '<br><br><br><br><br><pre>'; print_r($res);die;
      if (@mail($to, "[CRYPTOINDICATOR] Contact form", $message, $headers))
      {
          header("Location: http://cryptointegrator.com");
          echo 'The message has been sent.';
      }else{
          echo 'failed';
      }
      
    }
?>
<footer class="footer">
		<div class="bg-footer footerSection border-top">
			<div class="container">
				<div class="row">
					<div class="col-lg-4 col-md-6">
						<div class="footer-links">
							<h3>Helpful Links</h3>
							<div>
								<ul class="links-footer">
									<li><a href="about.php">About Us</a></li>
									<li><a href="impressum.php">Impressum</a></li>
									<li><a href="datenschutz.php">Datenschutz</a></li>
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
					<div class="col-lg-4 col-md-6">
						<div class="footer-links">
							<h3>Contact US</h3>
							<ul class="links-footer contactlinks">
								<li class="clearfix">
									<i class="fa fa-map-marker fontaddress float-left" style="font-size: 22px;"></i>
									<div class="float-left" style="padding-right: 8px;padding-bottom: 10px;font-family: 'Montserrat', sans-serif;">Hemingstedter Weg<br> 10,22607 Hamburg, Germany</div></li>
								<li class="clearfix">
									<i class="fa fa-envelope fontaddress float-left"></i>
									<a href="mailto:connect@biharfraternity.de" class="float-left">connect@biharfraternity.de</a>
								</li>
							</ul>
						</div>
					</div>
					<div class="col-lg-4 col-md-6">
						<div class="footer-links">
							<h3>Suggestions ?</h3>
							<div>
								<form id="contactForm" action="footer.php" method="POST">
									<div class="row">
										<div class="col-md-12">
											<div class="form-group">
												<input type="text" name="fullname" class="form-control" placeholder="Name">
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-md-12">
											<div class="form-group">
												<input type="text" name="email" class="form-control" placeholder="Email">
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-md-12">
											<div class="form-group">
												<textarea type="text" class="form-control" name="message">Message</textarea>
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-md-12">
											<div class="g-recaptcha" data-sitekey="6LcAXqMUAAAAANNJVFDw91eZkT21S7RAxG3bkqKZ"></div>
											<button class="btn-btn-blue" id="submit" type="submit" name="submit">Submit</button>
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
    <script src="js/owl.carousel.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.js"></script>
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
                  items: 1
              },
              991: {
                  items: 1
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
            nav: false,
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
        });
/*----------------------Our testimonial---------------------------*/ 
        var owl = $('.testimonial');
           owl.owlCarousel({
            loop: true,
            nav: true,
            margin:10,
            dots: false,
            autoplaySpeed: 2000,
            autoplay:true,
            autoplayHoverPause:true,
            // autoplayTimeout:500,
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
                  items: 3
              }
            }
          });

           $('.testimonial-outer').on('mouseleave',function(){
            owl.trigger('play.owl.autoplay',[500])
          })
          $('.testimonial-outer').on('mouseover',function(){
              owl.trigger('stop.owl.autoplay')
          });

          /*----------------------Our testimonial---------------------------*/ 

        /*-----------------------Start Gallery slider------------------------------------*/
          var owl = $('.galleryslide');
             owl.owlCarousel({
              loop: true,
              nav: true,
              items: 1,
              margin:30,
              dots: false,
              autoplaySpeed: 2000,
              autoplay:true,
              autoplayTimeout:1000,
              autoplayHoverPause:true,
              
          });
          $('.galleryslide').on('mouseleave',function(){
              owl.trigger('play.owl.autoplay',[2000])
          })
          $('.galleryslide').on('mouseover',function(){
              owl.trigger('stop.owl.autoplay')
          });

         /*-----------------------End Gallery slider------------------------------------*/

        $(document).ready(function() {
          $(".fancybox").fancybox({
            openEffect  : 'none',
            closeEffect : 'none'
          });
        });



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
            $(".mobile-dropdown2").click(function(){
                $(".mobileToggle2").toggle();
            });
            // $(".redd").click(function(){
            //   if($id==3){
            //     window.location.href="view-single-testimonial.php?id=3";

            //   }
            // });


    });
    </script>
</body>
</html>