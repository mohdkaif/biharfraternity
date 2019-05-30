<?php
require('header.php');

$API_key    = 'AIzaSyBxu2hOi94lllbdKW961XjUg4PACbAf8NQ';
$channelID  = 'UCt_z3Eg-ZyRtUHGJ-IYFigA';
$maxResults = 50;

  
// Initialize a CURL session. 
$ch = curl_init();  
  
// Return Page contents. 
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); 
  
//grab URL and pass it to the variable. 
curl_setopt($ch, CURLOPT_URL, 'https://www.googleapis.com/youtube/v3/search?order=date&part=snippet&channelId='.$channelID.'&maxResults='.$maxResults.'&key='.$API_key.''); 
  
$videoList = json_decode(curl_exec($ch)); 
  
 
/*$videoList = json_decode(file_get_contents('https://www.googleapis.com/youtube/v3/search?order=date&part=snippet&channelId='.$channelID.'&maxResults='.$maxResults.'&key='.$API_key.''));*/
?>
<section class="video-gallery singlepage backgroundgray">
<div class="container">
	<div class="row">
		
			<?php
        /////print_r($videoList);die();
        foreach($videoList->items as $item){
        	?>
               
        	<div class="col-md-4 videoList">
	        	<?php	
	            if(isset($item->id->videoId)){
	                    echo '<div id="'. $item->id->videoId .'" class="agileits_portfolio_grid" style="margin-top:25px!important">
	                            <iframe  height="190" src="https://www.youtube.com/embed/'.$item->id->videoId.'" frameborder="0" allowfullscreen></iframe>
	                           <h5>'. $item->snippet->title .'</h5>
	                        </div>';
	            }
	            ?>
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