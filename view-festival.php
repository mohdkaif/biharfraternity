	<?php
require('header.php');
?>
<section class="gallery-section view-places-section singlepage backgroundgray">
	<div class="container">
		<div class="row text-center">
			<div class="col-md-12">
				<?php
				if($_REQUEST['id']==1){
				?>
				<div class="item border-all m-b-30 backgroundwhite">
					<div class="row">
						<div class="col-md-5 col-sm-12">
							<div class="gallery-img">
								<a class="fancybox" rel="fancybox-thumb" href="images/festival/Chatth-Bihar.jpg">
									<img src="images/festival/Chatth-Bihar.jpg" alt="festival">
									<div class="overlay">
										<div class="view-gallery">
											<i class="fa fa-eye"></i>
										</div>
									</div>
								</a>
							</div>
						</div>
						<div class="col-md-7 col-sm-12">
							<div class="gallerycontent">
								<h2 class="eventname">Chatth Puja</h2>
								<p>This is probably the most famous festival of this State. When one hears Chatth Puja, Bihar instantly comes to the mind. This is an actually an ancient Hindu festival which is dedicated to the Sun God, Surya, and take place 6 days after Diwali. It is an expression of thanks giving and seeking blessings from the Almighty for sustaining life on Earth. During this festival, the person observing Chatth, also known as Parvati, observes a fast from dawn to dusk which concludes with sweets. This fast is followed by another fast for 36 hours till the final day, when puja starts at the river, before sunrise. You can witness thousands of devotees and the river during this time. Witnessing Chatth Puja will let you witness the devotion in its true sense.</p>
							</div>
							</div>
						</div>
					</div>
				</div>
				<?php
				}elseif($_REQUEST['id']==2){
				?>
				<div class="item border-all m-b-30 backgroundwhite">
					<div class="row">
						<div class="col-md-5 col-sm-12">
							<div class="gallery-img">
								<a href="images/festival/jivit.jpg" class="fancybox"  rel="fancybox-thumb">
									<img src="images/festival/jivit.jpg" alt="festival">
									<div class="overlay">
										<div class="view-gallery">
											<i class="fa fa-eye"></i>
										</div>
									</div>
								</a>
							</div>
						</div>
						<div class="col-md-7 col-sm-12">
							<div class="gallerycontent">
								<h2 class="eventname">Jivitputrika</h2>
								<p>A three-day long festival is celebrated from the seventh to the ninth lunar day of Krishna Paksha in Ashwin month of Hindu Bikram Sambat that falls generally in September. The first day, the day before Jivitputrika is known as Nahai-khai. On that day, mothers take food only after having their bath. On Jivitputrika day, a strict fast, called Khur Jitiya, is observed without water. On the third day, the fast ends with Paaran, taking the first food of the day. In Mithila , Tharuhat, the region of northeastern Bihar, and eastern Nepal, a variety of food and a special festival delicacy Jhor Bhaat (curry and white rice), Noni ka saag and Madua ki Roti are prepared. In the Bhojpuri region of western Bihar, eastern Uttar Pradesh, and Nepal, Paaran is done with Noni ka saag (summer purslane), Maruwa ki roti, and a vegetable stew of zucchini. The festival is celebrated mainly in the Bhojpuri and Maithili speaking regions of Nepal and Bihar, Jharkhand and Eastern Uttar Pradesh of India.</p>
							</div>
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