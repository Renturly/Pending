<?php
/* @var $this PropertyController */
/* @var $model Property */

$this->pageTitle = 'Birds of a Feather Real Estate Matching System';
Yii::app()->clientScript->registerMetaTag(
"Access The Flock's Birds of a Feather Real Estate Matching System.", 'Description'
		);

?>

	<script type="text/javascript">
		
		mixpanel.track("Pokemon In Binders", {
		    "referrer": document.referrer
		});
	</script>

<?php $limit = rand(1,4500); ?>

<div class="row-fluid">

	<a style="text-align: center;" href="https://www.accesstheflock.io/birddogging" class="btn btn-warning">Blogging</a>
	
	<br><br>
	<?php $limit = rand(1,4500); ?>
	<p><a class='btn btn-info' 'id'='payment-button' href="https://www.accesstheflock.io/portfolio/<?php echo $limit; ?>">the Flock</a></p>

</div>

<div class="well">
<?php 
$criteria = new CDbCriteria;
$criteria->condition = "create_user_id != 92";
$criteria->limit = 5;
$criteria->order = "rand()";


$principal = Buyer::model()->findAll($criteria);
?>
<p><a class='btn btn-info' 'id'='payment-button' href='https://www.accesstheflock.io/buyer/<?php echo $principal[0]->id; ?>'>Request Money</a></p>


<p><a href="https://www.accesstheflock.io/the-urly-bird">Attract Bird Dogs to the Flock.</a></p>


<?php 
//This integration test is an information oilfield
//$portfolio = Portfolio::find()->limit(1);
//print_r($portfolio);
$portfolio = User::model()->findByPk($limit);

$criteria = new CDbCriteria;
$criteria->condition = "create_user_id != 92";
$criteria->limit = 1;
$criteria->order = "create_time desc";


$buyer = Match::model()->findAll($criteria);

$communication = Property::model()->findAll($criteria);

//print_r($buyer);

//echo $buyer[0]->buyer_id;


?>



<p><a href="https://www.accesstheflock.io/buyer/<?php echo $buyer[0]->buyer_id; ?>">Offer property to a buyer on my list.</a></p>

<p><a href="https://www.accesstheflock.io/marketplace/<?php echo $communication[0]->id; ?>">Price for the Flock is minimum purchase price.</a></p>

<p><a class='btn btn-info' 'id'='payment-button' href="https://docs.google.com/document/d/10jcqjfNRlDbnJ-Dx493ERn9FSPvQq7c7MLgCI-vDmXY/edit">Bird Dogs' Contract</a></p>

<p><a href="mailto:<?php print($portfolio->email); ?>">Send  money to Common Shareholders.</a></p>

<div id='collection-component-1672031848197'></div>
<script type="text/javascript">
/*<![CDATA[*/
(function () {
  var scriptURL = 'https://sdks.shopifycdn.com/buy-button/latest/buy-button-storefront.min.js';
  if (window.ShopifyBuy) {
    if (window.ShopifyBuy.UI) {
      ShopifyBuyInit();
    } else {
      loadScript();
    }
  } else {
    loadScript();
  }
  function loadScript() {
    var script = document.createElement('script');
    script.async = true;
    script.src = scriptURL;
    (document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(script);
    script.onload = ShopifyBuyInit;
  }
  function ShopifyBuyInit() {
    var client = ShopifyBuy.buildClient({
      domain: 'accesstheflock-io.myshopify.com',
      storefrontAccessToken: '5e1dd2c8b6a57c36e7e82df3d3a17c2f',
    });
    ShopifyBuy.UI.onReady(client).then(function (ui) {
      ui.createComponent('collection', {
        id: '290888941727',
        node: document.getElementById('collection-component-1672031848197'),
        moneyFormat: '%24%7B%7Bamount%7D%7D',
        options: {
  "product": {
    "styles": {
      "product": {
        "@media (min-width: 601px)": {
          "max-width": "calc(25% - 20px)",
          "margin-left": "20px",
          "margin-bottom": "50px",
          "width": "calc(25% - 20px)"
        },
        "img": {
          "height": "calc(100% - 15px)",
          "position": "absolute",
          "left": "0",
          "right": "0",
          "top": "0"
        },
        "imgWrapper": {
          "padding-top": "calc(75% + 15px)",
          "position": "relative",
          "height": "0"
        }
      }
    },
    "text": {
      "button": "Add to cart"
    }
  },
  "productSet": {
    "styles": {
      "products": {
        "@media (min-width: 601px)": {
          "margin-left": "-20px"
        }
      }
    }
  },
  "modalProduct": {
    "contents": {
      "img": false,
      "imgWithCarousel": true,
      "button": false,
      "buttonWithQuantity": true
    },
    "styles": {
      "product": {
        "@media (min-width: 601px)": {
          "max-width": "100%",
          "margin-left": "0px",
          "margin-bottom": "0px"
        }
      }
    },
    "text": {
      "button": "Add to cart"
    }
  },
  "option": {},
  "cart": {
    "text": {
      "total": "Subtotal",
      "button": "Checkout"
    }
  },
  "toggle": {}
},
      });
    });
  }
})();
/*]]>*/
</script>

</div>









			
			
	
		
	

		

	






