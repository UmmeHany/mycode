<?php
ini_set('display_errors', true);
error_reporting(E_ALL);

/**
 * Test 1:
 * Extend class "Car" with:
 * - protected vars for number of doors and name of the brand
 * - public methods to set the above vars
 * - public methods to get the above vars
 */
class Car {

	protected $door_numbers;
	protected $brand_name;
	
	function __construct() {
		$this->door_numbers=0;	
	}

	function set_door_numbers($door_numbers) {
		$this->door_numbers=$door_numbers;
	}
	function set_brand_name($brand_name) {
		$this->brand_name=$brand_name;
	}
	function get_door_numbers() {
		return $this->door_numbers;
	}
	function get_brand_name() {
		return $this->brand_name;
	}

}

// Create instance and set values to: Mercedes with four doors
$carMercedes = new Car();
$carMercedes->set_door_numbers(4);
$carMercedes->set_brand_name("Mercedes");
// Create another instance for: Fiat with three doors
$carFiat = new Car();
$carFiat->set_door_numbers(3);
$carFiat->set_brand_name("Fiat");
//echo $carFiat->get_brand_name();

/**
 * Test 2:
 * Create child class with:
 * - protected var for color of car
 * - public method to set color
 * - public method to get color
 */

class Child extends Car {

	protected $color;

	function set_color($color) {
		$this->color=$color;
	}
	
	function get_color() {
		return $this->color;
	}

}

// Create instance for: red BMW with five doors
$child = new Child();
$child->set_door_numbers(5);
$child->set_brand_name("BMW");
$child->set_color("red");

// Print color of the BMW
$car_name=$child->get_brand_name();
$color_name=$child->get_color();
echo "<strong>Brand :</strong> <br>";
echo $car_name;
echo "<br><strong>Color :</strong> <br>";
echo $color_name;

?>