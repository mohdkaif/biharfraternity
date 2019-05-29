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
								<a href="images/place/nalanda-bihar.jpg" class="fancybox"  rel="fancybox-thumb">
									<img src="images/place/nalanda-bihar.jpg" alt="places">
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
								<h2 class="eventname">Nalanda</h2>
								<p>Probably the oldest university in India, Nalanda is an important site to visit in Bihar. A perfect reminisce to the time of flourishing Gupta and Pala period, Nalanda is an acclaimed tourist attraction in Bihar. It is believed that the last and most famous Jain Tirthankara, Mahavira spent 14 monsoon seasons here. Even, Buddha is said to have delivered lectures near the mango grove in Nalanda. The fame of this education centre was to an extent that Hieun Tsang, the famous Chinese traveller visited here and stayed for atleast two years here. Even, I-tsing another famous Chinese voyager stayed at Nalanda for about 10 years, AND such was the glory of this place. Today most parts of Nalanda lie in ruins but the place is surely worth exploring!</p>
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
								<a href="images/place/vaishali-bihar.jpg" class="fancybox"  rel="fancybox-thumb">
									<img src="images/place/vaishali-bihar.jpg" alt="place">
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
								<h2 class="eventname">Ashoka Lion Pillar & Stuba – Vaishali</h2>
								<p>Vaishali is an important archaeological site that was once the capital city of Licchavi rulers. Vaishali earned fame as a birthplace of last Jain Tirthankar Lord Mahavira. It is believed that Mahavira was born and brought up in 6th century BCE in Kundalagram of Republic of Vaishali. Another major event this place was a witness to was the last sermon of Buddha in 483 BCE. Vaishali was a prosperous kingdom during the time of Buddha, it is also known for its beautiful courtesan Amrapali. So, you see, one has enough to recall in Vaishali and adding to its historic charm is the well-preserved Ashokan Pillar. This ancient city finds mention in the travel accounts of eminent Chinese travellers like Fa-hien and Hieun Tsang. 
								</p>
							</div>
						</div>
					</div>
				</div>	
				<?php	
				}elseif($_REQUEST['id']==3){
				?>
				<div class="item border-all m-b-30 backgroundwhite">
					<div class="row">
						<div class="col-md-5 col-sm-12">
							<div class="gallery-img">
								<a href="images/place/patna-buddha-bihar.jpg" class="fancybox"  rel="fancybox-thumb">
									<img src="images/place/patna-buddha-bihar.jpg" alt="place">
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
								<h2 class="eventname">Buddha Memorial Park</h2>
								<p>Situated on the southern bank of Ganga, Patna is the largest city of Bihar. Better known as Patliputra in ancient India, the city is also believed to be the one of the oldest continuously inhabited cities in the world. Patna is a pilgrimage for Sikh devotees as it is reckoned to be the birthplace of last Sikh Guru, Guru Gobind Singh. The city flourished in the period of Haryanka, Nanda, Mauryan, Shunga, Gupta and Pala earned fame all across India. Today’s Patna is a developing city, which is endeavouring to match up to the modernization; malls, high-end hotels and theatres have cropped in the city. However, Patna has to speed up a bit to become the part of other cosmopolitans. Altogether, Patna is a decent destination, with most of the modern facilities available.</p>
								
							</div>
						</div>
					</div>
				</div>
				<?php	
				}elseif($_REQUEST['id']==4){
				?>
				<div class="item border-all m-b-30 backgroundwhite">
					<div class="row">
						<div class="col-md-5 col-sm-12">
							<div class="gallery-img">
								<a class="fancybox" rel="fancybox-thumb" href="images/place/griddhakuta-peak-bihar.jpg">
									<img src="images/place/griddhakuta-peak-bihar.jpg" alt="place">
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
								<h2 class="eventname">Vultures or Griddhakuta Peak</h2>
								<p>Also known as Vulture Peak, Griddhakuta Peak is situated in Rajgir, Bihar. This peak is the most famous place to visit in Rajgir and its sits at an elevation of 400m. It is called a Vulture Peak due to its shape and frequent visit of vultures. The place hold an important position in history as it is reckoned to be the spot where Lord Buddha preached the Lotus Sutra in order to convert Mauryan King Bimbisara. It is also believed that Buddha started the second wheel of law and delivered several sermons here. The peak has a Peace Pagoda said to have been built by Buddhist of Japan. There are couples of caves here as well that further enhances the thrill of reaching here by a chairlift.</p>
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