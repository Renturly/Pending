<?php
/* @var $this PropertyController */
/* @var $model Property */

$this->pageTitle = 'Birds of a Feather Real Estate Matching System';
Yii::app()->clientScript->registerMetaTag(
"Access The Flock's Birds of a Feather Real Estate Matching System.", 'Description'
		);

Yii::app()->clientScript->registerCssFile(Yii::app()->baseUrl . '/themes/abound/css/birds-of-a-feather-modal.css');
Yii::app()->clientScript->registerCssFile(Yii::app()->baseUrl . '/themes/abound/css/matches.css');


Yii::app()->clientScript->registerScript('Click', "

$('#payment-button').click(function()	{
	mixpanel.track('A Gun',{
			referrer: document.referrer,
		});
	});
	
");


	//put a spinning load wheel until page loads
	Yii::app()->clientScript->registerScript('loader1',"

			$(window).ready(function(event) {
			
				$('body').addClass('birdsOfAFeatherModal');
				//$('footer').css('display','none');
				$('section#navigation-main').hide();
				//$('footer').addClass('birddsOfAFeatherModal').hide();
				$('.modal-header').hide();
				$('.modal-body').hide();
				
			});
		
			$(window).load(function() {
				$('section#navigation-main').css('display','unset');
				$('footer').css('display','unset');
				$('.modal-header').show();
				$('#birdsOfAFeatherModal').hide();
				$('body').removeClass('birdsOfAFeatherModal');
				
			});
			
	");


	
	//put a spinning load wheel until page loads
	
/*
	Yii::app()->clientScript->registerScript('buyer_and_seller',"

		jQuery.fn.center = function () {
	    this.css('position','absolute');
	    this.css('top', Math.max(0, (($(window).height() - $(this).outerHeight()) / 2) + 
	                                                $(window).scrollTop()) + 'px');
	    this.css('left', Math.max(0, (($(window).width() - $(this).outerWidth()) / 2) + 
	                                                $(window).scrollLeft()) + 'px');
	    return this;
	}
	
	
			$('.buyer').css('display','none');
			$('.seller').css('display','none');
			
			$('a#buyer').each(function( index ) {
				
				$(this).hover(function(){

					//buyer
					$('#buyer_or_seller').show();
					
					$('#buyer_or_seller').html($(this).parent().next().html());
					
					$('#buyer_or_seller').css('background-color','white');
					
					$('#buyer_or_seller').css('color','black');
					
					$('#buyer_or_seller').css('padding','10px');
					
					$('#buyer_or_seller').css('border-style','solid');
					
					$('#buyer_or_seller').css('border-color','black');
				
					$('#buyer_or_seller').center();
					
					$(this).mouseleave(function(){
					    $('#buyer_or_seller').empty();
					    $('#buyer_or_seller').hide();
					});
					
					$('#buyer_or_seller').click(function(){
					    $(this).empty();
					    $(this).hide();
					});
					
				});
			  
			  
			});
			
				$('a#seller').each(function( index ) {
				
				$(this).hover(function(){

					//buyer
					$('#buyer_or_seller').show();
					
					$('#buyer_or_seller').html($(this).parent().next().html());
					
					$('#buyer_or_seller').css('background-color','white');
					
					$('#buyer_or_seller').css('color','black');
					
					$('#buyer_or_seller').css('padding','10px');
					
					$('#buyer_or_seller').css('border-style','solid');
					
					$('#buyer_or_seller').css('border-color','black');
				
					$('#buyer_or_seller').center();
					
					$(this).mouseleave(function(){
					    $('#buyer_or_seller').empty();
					    $('#buyer_or_seller').hide();
					});
					
					$('#buyer_or_seller').click(function(){
					    $(this).empty();
					    $(this).hide();
					});
					
				});
			  
			  
			});

	");
	
*/
	
		Yii::app()->clientScript->registerScript('pagination',"

			//<tr class='match'>
			
			
			//show more button
			//$('#matches').after('<button class=\"btn btn-warning\" id=\"more\">View More Cash Buyers And Motivated Sellers</button>' );
			
			
			
			//show less button
			//$('#matches').after('<button class=\"btn btn-warning\" id=\"less\">View Less Cash Buyers And Motivated Sellers</button><br><br>' );
			
			
			
			//show ten matches only
			var match = 0;
			$('tr.match').each(function( index ) {
			  match += 1;
			  
			  if(index > 100)
			  {
			  	//only show ten matches
			  	$(this).hide();
			  	
			  }
			  
			  
			});
			
				//add ten matches
				var page = 1;
				$('#more').click(function(){
					
				  	page += 1;
					 $('tr.match').each(function( index ) {
					  
						$(this).show();
					  
					  if(index > page*100)
					  {
					  	//only show 100 matches
					  	$(this).hide();
					  	
					  }
					});
			  });
			  
			  	//less ten matches
				var page = 1;
				$('#less').click(function(){
					
				  	page -= 1;
					 $('tr.match').each(function( index ) {

						 if(page > 0)
						 {
							$(this).show();
						  
							
						  if(index > page*100)
						  {
						  	//only show 100 matches
						  	$(this).hide();
						  	
						  }
					  }
					});
			  });
			 
			
		");
		
Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#match-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");

Yii::app()->clientScript->registerScript('loader',"



	//$('tbody');
	

	
	
");

/*
Yii::app()->clientScript->registerScript('infinite-scroll',"


    //put matches in array
    var matches = [];
	$('tr.match').each(function( k, v ) {
	  matches.push(v);
	});
	console.log(matches.length);

	//hide all matches
	$('tr.match').hide();
	
	//show first 5 matches
	for (i = 0; i < 5; i++) 
	{ 
		console.log(matches.children());
	    //$('thead').after('<tr><td>Match</td></tr>');
	}
	
	
	//when 75% of matches are in view load 100 more matches
	

	
	
");
*/

/*
Yii::app()->clientScript->registerScript('proof-of-funds',"


	$('tr td:nth-child(2)').find('a').each(function(index, value) { 
	    var buyerArray = $(this).attr('href').split('buyer/');
	    
	   	//Ajax request to get username's relation to seller and append text 
	   	$(this).load( 'index.php?r=matchTable/proofoffunds', { buyerId: buyerArray[1] });
	  	

	   	
	});
	
");
*/

/*
Yii::app()->clientScript->registerScript('proof-of-funds',"


	$('tr td:first-child').find('a').each(function(index, value) { 
	    var buyerArray = $(this).attr('href').split('buyer/');
	    
	   	//Ajax request to get username's relation to seller and append text 
	   	$(this).load( 'index.php?r=matchTable/proofoffunds', { buyerId: buyerArray[1] });
	  	

	   	
	});
	
");

Yii::app()->clientScript->registerScript('path-to-seller',"
	
	$('tr td:nth-child(2)').find('a').each(function(index, value) { 
	    var portfolioArray = $(this).attr('href').split('portfolio/');
	    
	   	//Ajax request to get username's relation to seller and append text 

	   	$(this).parent().next().find('a').load( 'index.php?r=matchTable/relationtoseller', { portfolioId: portfolioArray[1] });
	  	
	});
	
");

Yii::app()->clientScript->registerScript('path-to-buyer',"
	
	$('tr td:first-child').find('a').each(function(index, value) { 
	    var buyerArray = $(this).attr('href').split('buyer/');
	    
	   	//console.log(portfolioArray[1]);
	   	console.log(buyerArray);
	    
	   	//Ajax request to get username's relation to seller and append text 
	   	$(this).parent().next().next().next().find('a').load( 'index.php?r=matchTable/relationtobuyer', { buyerId: buyerArray[1] });
	   	
	});
	
");
*/



	//Hide .modal-body
	//On click of h4, appear .modal-body.
	//On click of h4, hide .modal-body
	Yii::app()->clientScript->registerScript('hide-modal',"
		
		$('.modal-body').hide();
		$('#hide').hide();
	
		$('#show').click(function(event) {
		
			$('#show').hide();
			$('.modal-body').show();
			$('#hide').show();

		});
		
		$('#hide').click(function(event) {
		
			$('#show').show();
			$('.modal-body').hide();
			$('#hide').hide();

		});
		
		
		
	");
	

?>

<?php 

	  	ini_set("memory_limit",-1);
		set_time_limit(0);

		
		
	
?>


<?php 	
/*
             //Send email to michael.sadler@accesstheflock.io on login
             if(Yii::app()->user->id != 92)
             {
             	$message = new YiiMailMessage;
				$message->view = 'login';
				
				$message->subject = "The Mating Dance";
				 
				//userModel is passed to the view
				$message->setBody(array('telephone_number'=>User::model()->findByPk(Yii::app()->user->id)->work_phone), 'text/html');
				$message->addTo('michael.sadler@accesstheflock.io');
				$message->from = Yii::app()->params['adminEmail'];
				Yii::app()->mail->send($message);
             }
*/
	
?>

<div id="birdsOfAFeatherModal" class="birdsOfAFeatherModal">
		<?php
			$key="Renturly.AccessTheFlockLoading.Image";
			if($this->beginCache($key,array('duration'=>300)))
			{
				$baseUrl = Yii::app()->theme->baseUrl; 
				echo CHtml::image("$baseUrl/img/Access The Flock Loading.jpg","Loading Access to the Flock...",array("width"=>"","class"=>"upperModal"));
				$this->endCache();
			}
		?>
		<?php
			$key="Renturly.LoadingGIF.Image";
			if($this->beginCache($key,array('duration'=>300)))
			{
				$baseUrl = Yii::app()->theme->baseUrl; 
				echo CHtml::image("$baseUrl/img/ajax-loader.gif","Loading Access to the Flock...",array("width"=>"","class"=>"centerModal"));
				$this->endCache();
			}
		?>
</div><!-- End BirdsOfAFeatherModal -->



<!--  <h3>Matches</h3> -->
<!-- <h3>Make Money Accessing Cash Buyers and Motivated Sellers!</h3>  -->


<div class="row-fluid">


<?php if(Yii::app()->user->countmatches > 0): ?>


<div class="span2">
<?php if(Yii::app()->user->isCustomer()): ?>
	<?php
		$key="Renturly.UrlyHoldingHouse2.Image";
		if($this->beginCache($key,array('duration'=>300)))
		{
	$baseUrl = Yii::app()->theme->baseUrl; 
	echo CHtml::image("$baseUrl/img/flock.png","Birds of a Feather Flock Together",array("width"=>"300px","class"=>"pull-left"));
	$this->endCache();
		}
	?>
	<?php endif; ?>
	
</div>

<style>
.lime {
	background-color: white;
	color: #00FF00;
}

.lime:hover {
	background-color: white;
	color: #5dbcd2;
}

.lime:active {
	background-color: white;
	color: orange;
}
</style>

<?php
$criteria = new CDbCriteria;
$criteria->limit = 1;
$criteria->order = "create_time desc";

$unit_type = Property::model()->find($criteria);
?>

<div class="row-fluid">
	<a style="text-align: left;" href="https://www.accesstheflock.io/marketplace/<?php print $unit_type->id; ?>" class="btn btn-danger">Marketplace</a>

	<a style="text-align: center;" href="https://www.facebook.com" class="btn btn-warning">$187 Bird Dog Jobs</a>
	
	<a style="text-align: right;" href="https://www.accesstheflock.io/buy-apartment-buildings" class="btn lime">Dogging</a>
</div>


<style>
.gold {
	background-color: gold;
	color: white;
}

a:active, a:hover {
	color: gold;
}



</style>

<script>

  const goldenEgg = async () => {
	const buyer = await fetch("https://www.accesstheflock.io/matchTable/DoggingFistfuls");
    
	const buyerJSON = await buyer.json();
	
	console.log(buyerJSON.fistfuls);
	
	let pof_amount = buyerJSON.fistfuls;
	document.getElementById('pof_amount').innerHTML = pof_amount;
	

}

	goldenEgg();

	

	//doggingFistfuls();
	
	

</script>



<?php endif; ?>

<?php if(!Yii::app()->user->isCustomer() && Yii::app()->user->countmatches > 0): ?>
<div class="span12">

<center><h1>$<?php echo round($flock, 2); ?> Monthly Flock</h1></center>
    	
<div>

<?php if(Yii::app()->user->id != 92): ?>


<?php Yii::app()->user->mp_increment("Renturly"); ?>
<script type="text/javascript">
	mixpanel.identify("<?php echo Yii::app()->user->email; ?>");
	mixpanel.track("Renturly",{
			referrer: document.referrer,
			fistfuls_of_cash: <?php echo Yii::app()->user->countmatches;?>,
		});
	//mixpanel.track_forms("#payment-form","Saved Revenue",{
	//	referrer: document.referrer
	//});
	

		
		//mixpanel.track_forms("#portfolio-form", "List");
	
mixpanel.identify("<?php echo Yii::app()->user->email; ?>");
	mixpanel.track("Flock Pricing",{
			referrer: document.referrer,
			Matches: <?php echo $flock; ?>
		});
	
</script>
<?php endif; ?>



<div class="row span12">
		<div class="pull-left span3">
    		<br>
			  	<?php
					$key="Renturly.OK.Image";
					if($this->beginCache($key,array('duration'=>300)))
					{
						$baseUrl = Yii::app()->theme->baseUrl; 
						echo CHtml::image("$baseUrl/img/Renturly-OK-Bird.jpg","OK Bird", array('width'=>150));
						$this->endCache();
					}
				?>
		</div>
		<div class="pull-right span9">
			<center>

	<?php 
		/*
		$matches = MatchTable::model()->findAllByAttributes(array('status_id'=>1));
		
		
		$total_cash_flow = 0;
		foreach($matches as $match)
		{
			if(Portfolio::model()->findByPk($match->portfolio_id)->cash_flow > 0)
			{
				$total_cash_flow += Portfolio::model()->findByPk($match->portfolio_id)->cash_flow;
			}
				
		}
		*/
		
		$total_cash_flow = 0;
		foreach(Portfolio::model()->findAll() as $motivated_seller)
		{
			$total_cash_flow += $motivated_seller->cash_flow;
		}
		
	?>

	<h3>
	<?php //echo  "$" . number_format(count(MatchTable::model()->findAll()), 0) . " Cash Flow"; ?>
	<?php //echo  "Fistfuls of Cash For $1 Cash Flow"; ?>
	
	</h3>
	
<?php 
/*
	$criteria=New CDbCriteria;
		$criteria->order = 'create_time ASC';
		$matches=MatchTable::model()->findAll($criteria);

		$data = array(array('Time',"Paid Fistfuls of Cash"));
		$count = 0;
		$tire_kicker_count = 0;
		$accessed_the_flock = 0;
		$same_date = 0;
		$matches_today = array();
		foreach ($matches as $match)
		{
			
			//You have match OKBirds on your iPhone
			if($match->path_to_seller != 92 && $match->path_to_buyer != 92 && $match->path_to_seller != 583 && $match->path_to_buyer != 583)
			{
				//if($match->status_id == 1)
				//{
					//$today = date('Y-m-d', strtotime($match->create_time));
					$today = date('Y', strtotime($match->create_time));
					array_push($matches_today, $today);
					
				//}
			}

			//array_push($data, array($match->id, $count));
			
		}

		$matches_today = array_count_values($matches_today);
		
		$dates = array_keys($matches_today);
		$date_count = 0;
		foreach($matches_today as $count_matches_today)
		{
			
			$count += $count_matches_today;
			$date = $dates[$date_count];
			
			//$multiple = pow($count, 2)/pow(235, 2);
			//$valuation = $multiple*115995;
			
			array_push($data, array($date, $count));
		
			$date_count += 1;
				
		}


	//Matches
		$now = new CDbCriteria;
		$now->condition = 'create_time >= DATE_SUB(CURDATE(), INTERVAL 1 WEEK)';
		
		$matches = 1;
		foreach(MatchTable::model()->findAllByAttributes(array('status_id'=>1), $now) as $match)
		{
			if($match->path_to_seller != 92 && $match->path_to_buyer != 92 && $match->path_to_seller != 583 && $match->path_to_buyer != 583)
			{
				$matches += 1;
			}
		}
		
		
		$matches = $count - $matches;
		
		$access_the_flock = $count * $count;
		
		$fistfuls_of_cash = $matches * $matches;
		
		$flock = number_format((($access_the_flock / $fistfuls_of_cash)), 2,'.', ',');
		
		if($fistfuls_of_cash == 1)
		{
			$flock = 1;
		}
		
		$inflation = Charge::model()->findAllByPk(1)->charge;
		
		$charges = Charge::model()->findAll();
		
		foreach($charges as $charge)
		{
			$inflation += $charge->charge;
		}
		
		if($flock == 0)
		{
			$flock = 1;
		}
		
		$flock = ceil(round(($flock * $inflation) - $inflation, 0)) - 1;

		$flock = floor($flock / 10) * 10;
		
		if($flock < 1)
		{
			$flock = 1;
		}
		
		$flock = $flock - 0.01;
*/

?>
	
	<?php 
		$buyers = Buyer::model()->findAll(array('select'=>'SUM(pof_amount) as pof_amount'));
	
		$criteria=New CDbCriteria;
		$criteria->condition = 'status_id = 1';
		$matches = MatchTable::model()->findAll($criteria);
		$buyers = array();
		$pof_amount = 0;
		foreach ($matches as $match)
		{
				array_push($buyers, $match->buyer_id);		
		}
		
		$buyers = array_unique($buyers);
		
		foreach($buyers as $buyer)
		{
			if(Buyer::model()->findByPK($buyer)->create_user_id != 92 && Buyer::model()->findByPK($buyer)->create_user_id != 583 && Customer::model()->findByAttributes(array('create_user_id'=>Buyer::model()->findByPK($buyer)->create_user_id)))
			{
				$pof_amount += Buyer::model()->findByPk($buyer)->pof_amount;
			}
		}
		
	
	?>
	<!-- 
	<p>
	You get 

					  	<?php
							$key="Renturly.OK.Image";
							if($this->beginCache($key,array('duration'=>300)))
							{
								$baseUrl = Yii::app()->theme->baseUrl; 
								echo CHtml::image("$baseUrl/img/Renturly-OK-Bird.jpg","OK Bird", array('width'=>150));
								$this->endCache();
							}
						?>
	on your profile, and<br> <h2><b>direct access to a global vetted motivated sellers list for a $<?php //echo count(MatchTable::model()->findAll()); ?> a month Vetting Fee.</b></h2>
	
	</p>
	 -->
	 
	</center>

<!--  <form action="<?php //echo Yii::app()->createAbsoluteUrl('/stripe/subscribe'); ?>" autocomplete="on" method="POST" id="payment-form">-->
	<form action="https://www.accesstheflock.io/stripe/subscribe" autocomplete="on" method="POST" id="payment-form">
	
	<table class="table table-striped table-bordered">
	
	
  <span class="alert payment-errors">Credit card numbers look invalid.</span>
<!-- 
<tr>
	 <td><span  class="pull-right">$<?php //echo number_format($access_the_flock, 2, '.', ','); ?>USD Monthly:</span></td>
     <td> 
     <span>Cash Flow</span>
     <!-- 
     <select class="span6" name="plan">
    	 <option value="monthly">$999.99 Monthly For Growing Your Network The Right Way!</option>
      </select>
       
    </td>
</tr>
--> 

<tr><td><span  class="pull-right">Card Number:</span></td>
      <td><input pattern="\d*" autocompletetype="cc-number" type="text" size="20" data-stripe="number"/>
</td></tr>

<tr><td><span  class="pull-right">CVC:</span></td>
      <td><input class="span2" pattern="\d*" type="text" size="4" maxlength="4" data-stripe="cvc"/>
</td></tr>

<tr><td><span  class="pull-right">Expiration (MM/YYYY):</span></td>
      <td><input class="span2" type="text" size="2"  maxlength="2" data-stripe="exp-month"/> 
    <span> / </span>
    <input type="text" class="span2" size="4" maxlength="4" data-stripe="exp-year"/>
</td></tr>


  <tr><td><span class="pull-right"></span></td><td> <b> 
  
  <input type="hidden" name="flock" value="<?php echo round($flock, 2); ?>"> 	
<?php
	//echo CHtml::submitButton("Subscribe Buyers To Vetted Sellers", array('class'=>'btn btn-warning', 'id'=>'payment-button'));
	//echo CHtml::submitButton("$1 Monthly Cash Flow", array('class'=>'btn btn-warning', 'id'=>'payment-button'));
	//echo CHtml::submitButton("$". $flock . " Monthly Cash Flow", array('class'=>'btn btn-warning', 'id'=>'payment-button'));
	echo CHtml::submitButton("Bring Me Renturly", array('class'=>'btn btn-info', 'id'=>'payment-button'));
?>
 </b></td></tr>

</table>
</form>

<br>
<br>
<br>

</div>

</div>
</div>

</div>

 
			

<div>




<?php endif; ?>



<div class="row-fluid">

<div>
	<center>
	
	
	<p>
	<?php if(Yii::app()->user->countmatches == 0): ?><?php if(Yii::app()->user->isSeller || Yii::app()->user->isBuyer): ?>Try again... <?php endif; ?> Unfortunately... you don't have your vetted list! <?php endif; ?><br><br>
	
<h5><a href="http://fistfulsofcash.com" class="btn btn-warning">Pay</a> the Bird Dogging: <span id="wholesale" style="color:red;">$<?php echo Yii::app()->user->countmatches; ?></span></h5>
<script>
const flockPricing = async () => {

	const trillionaire = await fetch("https://www.accesstheflock.io/matchTable/BringMeRenturly");
    
	const doggingFistfulsJSON = await trillionaire.json();
	
	console.log(doggingFistfulsJSON.flock_pricing);
	document.getElementById('wholesale').innerHTML = doggingFistfulsJSON.flock_pricing;
	
}

flockPricing();
</script>
<br>
<br>
<br>
	
	
	<a href="<?php echo Yii::app()->createAbsoluteUrl('buyer/create'); ?>" class="btn btn-warning">Bring Me Fistfuls of Cash</a>
	 or 
	<a href="<?php echo Yii::app()->createAbsoluteUrl('portfolio/create'); ?>" class="btn btn-warning">Motivated Seller</a>
	</p>
	<br>
	
	<!-- 
	<p>
	You need to 
	<a href="<?php //echo Yii::app()->createAbsoluteUrl('motivatedSellersList/upload'); ?>" class="btn btn-warning">upload your motivated sellers list</a>
	 to access even more buyers or 
	<a href="<?php //echo Yii::app()->createAbsoluteUrl('cashBuyersList/upload'); ?>" class="btn btn-warning">upload your cash buyers list</a>
	 to access even more sellers.
	</p>
	 -->
	<?php if(Yii::app()->user->isSeller || Yii::app()->user->isBuyer): ?>
	<!-- 
	<p>
		<a href="<?php //echo Yii::app()->createAbsoluteUrl('buyer/admin'); ?>" class="btn btn-warning">Subscribe buyers</a>
		 or 
		<a href="<?php //echo Yii::app()->createAbsoluteUrl('portfolio/admin'); ?>" class="btn btn-warning">Subscribe sellers</a> 
		if you don't have direct access.
	</p>
	 -->
	<?php endif; ?>
	 
	</center>
</div>

</div>
<!-- <h3>There are <?php echo Match::model()->count(); ?> matches right now that are being turned into commission checks.</h3>
<h5>Match Real Estate Portfolios, Properties, Assets and Unit Types With Buyers' Criteria</h5>
<h6>Never Miss a Match Again!</h6> -->



<div class="row-fluid">

<script type="text/javascript">
	$("[name='Match[match_type][]']").bootstrapSwitch();
</script>

<script type="text/javascript">
	mixpanel.identify("<?php echo Yii::app()->user->email; ?>");
	mixpanel.track_links("#path-to-buyer", "Click Path to Buyer");
</script>
<script type="text/javascript">
	mixpanel.identify("<?php echo Yii::app()->user->email; ?>");
	mixpanel.track_links("#path-to-seller", "Click Path to Seller");
</script>



<?php if(!Yii::app()->user->isCustomer() && Yii::app()->user->countmatches > 0): ?>



			<?php if(Yii::app()->user->hasFlash('success')): ?>
				<div class="alert alert-success">
				<button type="button" class="close" data-dismiss="alert">x</button>
				<strong>Success!</strong> <?php echo Yii::app()->user->getFlash('success'); ?>
				</div>
			<?php endif; ?>
			<?php if(Yii::app()->user->hasFlash('alert')): ?>
				<div class="alert">
				<button type="button" class="close" data-dismiss="alert">x</button>
				<strong>Alert!</strong> <?php echo Yii::app()->user->getFlash('alert'); ?>
				</div>
			<?php endif; ?>

	    

	<?php $baseUrl = Yii::app()->theme->baseUrl; ?>


	




<?php $matches = count(MatchTable::model()->findAllByAttributes(array(), $condition = 'status_id = 1')); ?>


</div>




<script type="text/javascript" src="https://js.stripe.com/v2/"></script>

<script type="text/javascript">
    

	//Stripe.setPublishableKey('pk_live_v9PYqsEucZZ9g6mQTAvsNcR4');
	
	Stripe.setPublishableKey('pk_live_V7BLbjO5JTvdgFj5BnhLPtc4');
	
    var stripeResponseHandler = function(status, response) {
		
        var $form = $('#payment-form');
        
		if (response.error) {
            
            $form.find('.payment-errors').text(response.error.message);
			
			$('#payment-button').prop('disabled', false);
        
		} else {
            
            var token = response.id;
            
            $form.append($('<input type="hidden" name="stripeToken" />').val(token));
            
            $form.get(0).submit();
        }
		
    };

    jQuery(function($) {
		
        $('#payment-form').submit(function(event) {
            var $form = $(this);

			$('#payment-button').prop('disabled', true);

            Stripe.card.createToken($form, stripeResponseHandler);

            // Prevent the form from submitting with the default action
            return false;
        });
		
    });
	
</script>


<?php endif; ?>


<div id="buyer_or_seller"></div>


<?php if(Yii::app()->user->isSeller || Yii::app()->user->isBuyer): ?>

<?php if(Yii::app()->user->countmatches > 0): ?>
			<script type="text/javascript">
				mixpanel.identify("<?php echo Yii::app()->user->email; ?>");
				mixpanel.track("Birds of a Feather",{
						referrer: document.referrer
					});
			</script>
<?php endif; ?>
			



			
<table id="matches" class="table table-striped table-bordered table-hover">
	<thead>
		<th><a style="color:Gold;" href="http://www.accesstheflock.io/renturly">Dogging <span id="pof_amount">...</span> </a></th>
		<th><button class="gold" onclick="doggingFistfuls()">OKBird</button></th>
		<th><a style="color:#5dbcd2;" href="http://www.accesstheflock.io/fistfuls-of-cash"><?php 

$criteria=new CDbCriteria;
$criteria->order = "update_time desc";
$criteria->limit = 826;
$bring_me_renturly = Portfolio::model()->findAll($criteria);

foreach($bring_me_renturly as $cash)
{

		$motivated_sellers += $cash->min_dollar;
	
}
	$jv = $motivated_sellers/11100;
print "$" . number_format($jv, 0, '.', ',');;	

	?> Renturly</a></th>
	</thead>
	<?php foreach($model as $match): ?>
		<tr class="match">
			<td><a href="<?php echo Yii::app()->createAbsoluteUrl('bum/users/viewProfile',array('id'=>$match->path_to_buyer)); ?>"><?php echo User::model()->findByPk($match->path_to_buyer)->username; ?></a> has <a id="buyer" href="https://www.accesstheflock.io/buyer/<?php echo $match->buyer_id; ?>">$<?php echo Yii::app()->format->number(Buyer::model()->findByPk($match->buyer_id)->pof_amount); ?></a> to fund: </td>
	
			<td><center style="font-size: 14px; color:gold;"><div class="fb-share-button" data-href="http://www.accesstheflock.io/buyer/list" data-layout="button" data-size="large"><a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=http%3A%2F%2Fwww.accesstheflock.io%2Fbuyer%2Flist&amp;src=sdkpreparse" class="fb-xfbml-parse-ignore">Share</a></div><a href="https://www.accesstheflock.io/profile?id=<?php echo Yii::app()->user->id; ?>"> <?php echo "$" .  $OKBird; ?></a></center>
	</td>
	<td>
		<a id="seller" href="<?php echo Yii::app()->createAbsoluteUrl('bum/users/viewProfile',array('id'=>$match->path_to_seller)); ?>"><?php echo User::model()->findByPk($match->path_to_seller)->username; ?></a>
	</td>		
</tr>
		

		

	<?php endforeach; ?>
</table>

<?php endif; ?>

<?php $this->renderPartial('/matchTable/dogging'); 
?>

<?php $this->renderPartial('/matchTable/motivated_sellers'); 
?>


<?php 
/*
$this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'match-grid',
	'dataProvider'=>$model->search(),
	'htmlOptions'=>array('class'=>'table table-striped table-bordered table-hover'),
	//'filter'=>$model,
	'columns'=>array(
		array(
				'header'=>'Buyer',
				'class'=>'CLinkColumn',
				'id'=>'path-to-buyer',
				'labelExpression'=>'$data->buyer_id',
				'urlExpression'=>'Yii::app()->createUrl("buyer/view", array("id"=>$data->buyer_id))',
		
		),
		array(
				'header'=>'Portfolio',
				'class'=>'CLinkColumn',
				'labelExpression'=>'Portfolio::model()->findByPK($data->portfolio_id)->name . ", " . contact . " " . these . " " . people . " " . to . " " . close . " " . the . " " . deal ',
				'urlExpression'=>'Yii::app()->createUrl("portfolio/view", array("id"=>$data->portfolio_id))',
	
		),


		array(
				'header'=>'The Seller',
				'class'=>'CLinkColumn',
				'id'=>'path-to-seller',
				'labelExpression'=>  'User::model()->findByPK($data->path_to_seller)->username',
				'urlExpression'=>'Yii::app()->createUrl("bum/users/viewProfile", array("id"=>$data->path_to_seller))',
		),
		array(
				'header'=>'The Buyer',
				'class'=>'CLinkColumn',
				'labelExpression'=>'User::model()->findByPK($data->path_to_buyer)->username',
				'urlExpression'=>'Yii::app()->createUrl("bum/users/viewProfile", array("id"=>$data->path_to_buyer))',	
		),

	),
)); 
*/
?>

</div>


<div class="row-fluid"></div>



<div class="row-fluid"></div>
<div class="row-fluid"></div>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>

