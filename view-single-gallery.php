<?php
require('header.php');
?>

<section class="gallery-section viewSingle singlepage backgroundgray">
	<div class="container">
		<!-- <div class="row text-center">
			<div class="col-md-12">
				<h2 class="tittlehead">View Single Gallery</h2>
			</div>
		</div> -->
		<div class="row text-center">
			<div class="col-md-12">
				<?php
				if($_REQUEST['id']==1){
				?>
				<div class="item border-all m-b-30 backgroundwhite">
					<div class="row">
						<div class="col-md-5 col-sm-12">
							<div class="gallery-img">
								<img src="images/gallery/gallery.png" alt="gallery">
							</div>
						</div>
						<div class="col-md-7 col-sm-12">
							<div class="gallerycontent">
								<h2 class="eventname">Hartalika Teej Event</h2>
								<p>Hartalika Teej – a festival dedicated to Maa Hartalika is a fasting observed by Hindu women. Hartalika Teej falls on the third day of the first fortnight of the month of ‘Bhadra’.
								The festival is celebrated to commemorate the acceptance of Parvati’s love towards him by Lord Shiva. Women celebrate Hartalika Teej to seek divine blessings from Lord Shiva and Goddess Parvati. Unmarried women also observe the ritual in anticipation of a happy married life.</p>
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
								<img src="images/gallery/gallery2.jpg" alt="gallery">
							</div>
						</div>
						<div class="col-md-7 col-sm-12">
							<div class="gallerycontent">
								<h2 class="eventname">Bihar Fraternity Conclave Patna</h2>
								<p>सोलह नवंबर (16.11.2018) की शाम पाँच बजे से भारतीय नृत्य कला मंदिर, पटना में “Bihar Fraternity Conclave 2018” कार्यक्रम में बिहार के विकास के मुद्दों पर चर्चा और साथ ही साथ कवि सम्मेलन व लोकगीतों का आयोजन होने जा रहा है। शिक्षा-स्वास्थ्य, कला-साहित्य और राजनीति से सम्बंधित विशेषज्ञ और अपना महत्वपूर्ण योगदान दे रहे शख़्सियतों के साथ परिचर्चा। 
									इसके अलावा कवि सम्मेलन जिसमें मशहूर हास्य कवियों की टोली शम्भू शिखर, चिराग़ जैन, रमेश मुस्कान व स्वाति ख़ुशबू अपनी प्रस्तुतियों से लोगों को लोटपोट करने वाले हैं। साथ ही बिहार के उभरते गायक “आलोक चौबे’ और लोक-गायिका “चंदन तिवारी” व “छाया कुमार” अपने लोकगीतों से लोगों को दिल जीतने को तैयार हैं। 
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
								<img src="images/gallery/BiharDiwas_Berlin_Group.jpg" alt="gallery">
							</div>
						</div>
						<div class="col-md-7 col-sm-12">
							<div class="gallerycontent">
								<h2 class="eventname">Bihar Diwas 2018, Berlin</h2>
								<ul>
									<li>Grand official launch of our very own global forum “Bihar Fraternity</li>
									<li> Lighting of lamp-Keynote address by the President of the fraternity</li>
									<li>Message from Indian Deputy Chief of Mission to Germany (Guest of the Honor)</li>
									<li>Address by VP of fraternity about organization and our aims</li>
									<li> Launch of Education welfare program “Project Jyoti</li>
									<li>Solution centric talks on “Brand Bihar</li>
									<li>Talk on "Role of Women in the Growth of Bihar"</li>
								</ul>
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