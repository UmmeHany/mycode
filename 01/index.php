<?php
ini_set('display_errors', true);
error_reporting(E_ALL);

$fruits = array(
  'Banane',
  'Apfel',
  'Zitrone',
  'Melone',
  'Kiwi',
  'Orange',
  'Himbeere',
  'Erdbeere'
);

// Add element "Maracuja" to array
array_push($fruits,"Maracuja");
//print_r($fruits);



// Print first element of array
$fruit_rev=array_reverse($fruits);
$first_element=array_pop($fruit_rev);
echo "<pre>";
echo "<strong>First Element:</strong> <br>";
echo $first_element."<br>";
//print_r($first_element);



// Get lenght of array
$c=count($fruits);
//print_r($c);
echo "<pre>";
echo "<strong>Array Length:</strong> <br>";
echo $c."<br>";


// Print array with for loop
echo "<pre>";
echo "<strong>for loop:</strong> <br>";
for($i=0;$i<count($fruits);$i++){
  echo $fruits[$i]."<br>";
}


// Print array with foreach loop
echo "<pre>";
echo "<strong>foreach loop:</strong> <br>";
foreach ($fruits as $value) {
  echo "$value <br>";
}


// Sort ascending
$fruits_assending = $fruits;
sort($fruits_assending);
//print_r($fruits);
echo "<pre>";
echo "<strong>Sorted Array:</strong> <br>";
for($i=0;$i<count($fruits_assending);$i++){
  echo $fruits_assending[$i]."<br>";
}


// Create random order
$fruits_shuffle=$fruits;
shuffle($fruits_shuffle);
//print_r($fruits_shuffle);
echo "<pre>";
echo "<strong>Random order:</strong> <br>";
for($i=0;$i<count($fruits_shuffle);$i++){
  echo $fruits_shuffle[$i]."<br>";
}


// Select random value
$k = array_rand($fruits);
$v = $fruits[$k];
//print_r($v);
echo "<pre>";
echo "<strong>Random value:</strong> <br>";
echo $v."<br>";


// Convert all values to uppercase letters
$fruits_upper=array();
for($i=0;$i<count($fruits);$i++){
  array_push($fruits_upper,strtoupper($fruits[$i]));
}
//print_r($fruits_upper);
echo "<pre>";
echo "<strong>UpperCase:</strong> <br>";
for($i=0;$i<count($fruits_upper);$i++){
  echo $fruits_upper[$i]."<br>";
}




// Add the following array to array $fruits
$more_fruits = array(
  'Heidelbeere',
  'Birne',
  'Kirsche'
);
echo "<br>";
//print_r(array_merge($fruits,$more_fruits));
$merged_array = array_merge($fruits,$more_fruits);
echo "<pre>";
echo "<strong>Merged Array:</strong> <br>";
for($i=0;$i<count($merged_array);$i++){
  echo $merged_array[$i]."<br>";
}


?>