<?php
require('header.php');

?>
<section class="backgroundgray singlepage single-view-testimonial">
	<div class="container">
		<div class="col-md-12 text-center">
			<h2 class="tittlehead" style="padding-top: 20px;">Testimonial</h2>
		</div>
		<div class="row">
			<div class="col-md-12">
				<?php
				if($_REQUEST['id']==1){
				?>
				<div class="testimonial-single-view">
					<div class="row">
						<div class="col-md-3">
							<div class="testimonialimg">
								<img src="images/testimonial1.png" alt="Testimonials">
							</div>
						</div>
						<div class="col-md-9">
							<div class="testimonial-content">
								<h3>Dr. Vinita Sahay</h3>
								<p>Great to hear from the "Son of the SOIL". I am not from Bihar, my better half is, so I'm bahu of Bihar. I truly feel very sad for this soil...because all his SONS aredoing so so well eberywhere outside .. leaving this place in LURCH.. I wish many more sons stay back and contribute and bring back the OLD Glory of MAGADH and Nalanda!!</p>
							</div>
						</div>
					</div>
				</div>
				<?php
				}elseif($_REQUEST['id']==2){
				?>
				<div class="testimonial-single-view">
					<div class="row">
						<div class="col-md-3">
							<div class="testimonialimg">
								<img src="images/testimonial2.png" alt="Testimonials">
							</div>
						</div>
						<div class="col-md-9">
							<div class="testimonial-content">
								<h3>Dr. Kumar Vishvas</h3>
								<p>God bless you Prakash! Positioning Bihar is just as positioning Indiaa's grace and rich history! All the best! All with you for all of your endeavours.</p>	
							</div>
						</div>
					</div>
				</div>
				<?php	
				}elseif($_REQUEST['id']==3){
				?>
				<div class="testimonial-single-view">
					<div class="row">
						<div class="col-md-3">
							<div class="testimonialimg">
								<img src="images/testimonial3.png" alt="Testimonials">
							</div>
						</div>
						<div class="col-md-9">
							<div class="testimonial-content">
								<h3>Ravi Shankar Prasad</h3>
								<p>I am immensely pleased to know that a global forum namely "Bihar Fraternity" is being launched on</p>	
							</div>
						</div>
					</div>
				</div>
				<?php	
				}
				?>
			</div>
		</div>
	</div>
</section>

				
<?php
require('footer.php');
?>