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
								<a class="fancybox" rel="fancybox-thumb" href="images/food/litti-chokha.jpg">
									<img src="images/food/litti-chokha.jpg" alt="food">
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
								<h2 class="eventname">Litti Chokha</h2>
								<p>The lip-smacking taste of <strong>Litti Chokha</strong>, savoured by one and all, needs no introduction. It is your grand welcome to the food of Bihar, in all its ghee-dripping glory. It consists of wheat and sattu with spices, kneaded into round spicy balls, dipped in ghee. The texture of Litti along with the crunchy crust makes it a foodie’s delight. <strong>Chokha</strong> is prepared by mashing boiled vegetables (most common being potatoes, brinjal, tomatoes), adding spices and chopped onion, garlic etc and served with Litti as a complimentary delicacy.</p>

								<p>Sattu or fried gram flour forms a distinctive element of <strong>Bihari food and cuisine.</strong> The sattu is mixed with spices and filled in wheat dough balls, rolled and cooked with ghee on a hot plate to form sattu paratha which is also called <em>makuni.</em></p>
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
								<a href="images/food/Tilkut__Sweet_savoury.jpg" class="fancybox"  rel="fancybox-thumb">
									<img src="images/food/Tilkut__Sweet_savoury.jpg" alt="food">
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
								<h2 class="eventname">Tilkut</h2>
								<p>To those of you who enjoy a sugar rush a dive into Bihari cuisine will be worth it. This north Indian state has a plethora of desserts and savouries which will be a delight to your sweetened taste buds. A feeling which you are too sure to relinquish for days to come. However, it requires skill and talent to create the choicest of Bihari sweets. One such sweet that requires careful preparation is the Tilkut a healthy dessert prepared from punched sesame seeds. It is cooked with a sugar base rolled into a ball filled with copious amounts of crushed sesame seeds. The tilkut gets tastier, softer and nebulous with a luxurious input of sesame seeds. Heated in an optimum temperature with the right proportions of jaggery and lint is then hammered where the hard work begins to beat them into biscuit like shapes. The best tilkuts are made in the town of Gaya. However, take care Tilkut is a seasonal dish and it is available only in winters (during Makar Sankranti time). The saying Winter is coming can be never be looked forward more optimistically except in the matter of Tilkuts.</p>
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