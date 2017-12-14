<?php 

//class declaration 
class Container
{

	//properties
	public $color;
	public $title = 'Johnsons Baby Lotion'; //global variable


	/**
	 * Methods
	 */
	
	public function containerTitle()
	{
		//local variable
		//$title = "this is my title";
		echo $this->title;
		echo "<br>";
		$this->callMeNow();
		echo "<br>";
	}


	public function containerColor($color)
	{
		echo $color;
	}

	public function callMeNow()
	{
		echo "this is for testing";
	}
	
}



//obejct or calling a class
$containerPurple = new Container();
$containerBlue = new Container();

// -> this 
$containerPurple->containerTitle();
$containerPurple->containerColor("Purple");

echo "<hr>";
$containerBlue->containerTitle();
$containerBlue->containerColor("Blue");










