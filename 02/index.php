<?php
ini_set('display_errors', true);
error_reporting(E_ALL);

$person = array(
  'firstname' => 'Martin',
  'lastname'  => 'Mustermann',
  'address'   => 'Musterweg 1, 12345 Musterstadt',
  'email'     => 'martin@mustermann.de'
);

// Print last name
echo "<pre>";
echo "<strong>Last name:</strong> <br>";
echo $person['lastname'];

// Print array with foreach loop
echo "<pre>";
echo "<strong>foreach loop:</strong> <br>";
foreach($person as $x => $val) {
  echo "$x = $val<br>";
}


// Get keys of array
echo "<pre>";
echo "<strong>Keys of array:</strong> <br>";
$array=array_keys($person);
//print_r($array);
for($i=0;$i<count($array);$i++){
  echo $array[$i]."<br>";
}


// Check if key 'lastname' exists
echo "<pre>";
echo "<strong>lastname exists or not:</strong> <br>";
if (array_key_exists("lastname",$person))
  {
  echo "lastname exists";
  }
else
  {
  echo "lastname does not exist";
  }


// Check if value of key 'lastname' is not empty
echo "<pre>";
echo "<strong>lastname is empty or not:</strong> <br>";
if (array_key_exists("lastname",$person))
  {
    
    if(!empty($person['lastname'])){
      echo "lastname is not empty";
    }
    else{
      echo "lastname is empty";
    }
  }
else
  {
  echo "lastname does not exist";
  }


#--------------------------------------------------------

$persons = array(
  0 => array(
    'firstname' => 'Martin',
    'lastname'  => 'Mustermann',
    'address'   => 'Musterweg 1, 12345 Musterstadt',
    'email'     => 'martin@mustermann.de'
  ),
  1 => array(
    'firstname' => 'Martina',
    'lastname'  => 'Mustermann',
    'address'   => 'Musterweg 1, 12345 Musterstadt',
    'email'     => 'martina@mustermann.de'
  ),
  2 => array(
    'firstname' => 'Torsten',
    'lastname'  => 'Tester',
    'address'   => 'Teststraße 2, 11111 Testensen',
    'email'     => 'torsten@tester.de'
  )
);

// Print all emails
echo "<pre>";
echo "<strong>All emails:</strong> <br>";
for($i=0;$i<count($persons);$i++){
  echo $persons[$i]['email']."<br>";
}


?>