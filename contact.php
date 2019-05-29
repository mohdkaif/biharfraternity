<?php
require('header.php');

    /*$to = 'blueraaga@gmail.com';*/
    if(isset($_POST['submit'])){
      $to = 'sadiya.igniterpro@gmail.com';
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
<section id="contact" class="contact-section">      
    <div class="contact-form">
      <div class="container">
        <div class="row text-center">
                <div class="col-md-12">
                    <h2 class="tittlehead tittlehead-inner">Contact Us</h2>
                    <p>We are reachable through email as well as post.</p>
                </div>
            </div>
        <div class="row contact-form-area wow fadeInUp" data-wow-delay="0.4s">          
          <div class="col-md-7 col-lg-7 col-sm-12">
            <div class="contact-block">
              <h2>Contact Form</h2>
              <form id="contactForm" action="contact.php" method="POST">
                <div class="row">
                  <div class="col-md-12">
                    <div class="form-group">
                      <input type="text" class="form-control" id="name" name="fullname" placeholder="Name" required data-error="Please enter your name">
                      <div class="help-block with-errors"></div>
                    </div>                                 
                  </div>
                  <div class="col-md-12">
                    <div class="form-group">
                      <input type="text" placeholder="Email" id="email" class="form-control" name="email" required data-error="Please enter your email">
                      <div class="help-block with-errors"></div>
                    </div> 
                  </div>
                  <div class="col-md-12">
                    <div class="form-group"> 
                      <textarea class="form-control" id="message" placeholder="Your Message" rows="5" data-error="Write your message" name="message" required></textarea>
                      <div class="help-block with-errors"></div>
                    </div>
                    <div class="submit-button">
                        <div class="g-recaptcha" data-sitekey="6LfWYKMUAAAAACa2Pa_SPI5dmfjJs889J_IRwsO8"></div>
                      <button class="btn btn-common" id="submit" type="submit" name="submit">Send Message</button>
                      <div id="msgSubmit" class="h3 text-center hidden"></div> 
                      <div class="clearfix"></div> 
                    </div>
                  </div>
                </div>            
              </form>
            </div>
          </div>
          <div class="col-md-5 col-lg-5 col-sm-12">
            <div class="footer-right-area wow fadeIn">
              <h2>Contact Address</h2>
              <div class="footer-right-contact">
                <div class="single-contact">
                  <div class="contact-icon">
                    <i class="fa fa-map-marker"></i>
                  </div>
                  <p>Hemingstedter Weg 10,22607 Hamburg, Germany</p>
                </div>
                <div class="single-contact">
                  <div class="contact-icon">
                    <i class="fa fa-envelope"></i>
                  </div>
                  <p><a href="mailto:biharfraternity.de@gmail.com">biharfraternity.de@gmail.com</a></p>
                </div>
              </div>
            </div>
            <div class="m-t-10">
             <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2369.5531887026164!2d9.866861315394454!3d53.56574316595651!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47b184462c435629%3A0x5b8505f974f80749!2sHemmingstedter+Weg+10%2C+22607+Hamburg%2C+Germany!5e0!3m2!1sen!2sin!4v1557737564973!5m2!1sen!2sin" width="100%" height="250" frameborder="0" style="border:0" allowfullscreen></iframe>
             </div>
          </div>
          <!-- <div class="col-md-12 ">    
          </div> -->
        </div>
      </div>
    </div>   
  </section>
  <?php
    require('footer.php');
  ?>