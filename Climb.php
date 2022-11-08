<?php
/*
*Uber is considered Cash for Facebook 
*
*/

//$square = 1*1;
//EBAY and NTDOY Stock is On
$square = 2 * -0.99;


//print($square);

//A set is a collection of objects
class pokemon {
 
  public $title;
  public $Cash;

  function __construct($Cash) {
    $this->Cash = $Cash; 
  }

  function set_title($title) {
    $this->title = $title;
  }
  function get_title() {
    return $this->title;
  }
  
  function get_Cash() {
    return $this->Cash;
  }
}


//It's natural to open a card
$element044_185 = new pokemon("$11 Cash");
$element044_185->set_title('Pikachu VMAX');
//echo $element044_185->get_Cash();
$element049_078 = new pokemon("$7 Cash");
$element049_078->set_title('Dragonite V');

$set = array();
$collection = array($element044_185, $element049_078);
array_push($set, $collection);
//print_r($set);


$jury_1 = $set;

//

$set = array();
$collection = array($element044_185);
array_push($set, $collection);

$jury_2 = $set;

//Proof
//print_r($jury_1);

//listing; list an element

?>
