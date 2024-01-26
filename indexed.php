<?php 

$letters = range('a', 'e');
print_r($letters);
echo "<br>";

$number = range(0, 10, 2);
print_r($number);

echo "<br>";

$stack = array ("orange", "banana", "apple", "raspberry");
$fruit = array_shift($stack);
print_r($fruit);

echo "<br>";
$a =  ["orange",
"banana",
"apple", 
"raspberry"];

array_unshift($a, "red","green");
var_dump($a);
echo "<br>";

// Associative arrays:

$q = array ("first_name" => "muhammad", "last_name" => "sayid");
echo $q["first_name"];
foreach($q as $key => $value){
    echo "$key : $value <br/>";
}

echo "<br>";

$rec = array('Check', 'that', 'variable', 'is an array');
echo is_array($rec) ? 'not': 'output';



echo "<br>";
// $rec = array('Check', 'that', 'variable', 'is an array');
// echo is_array($rec) ? 'Output: it is an array' : 'Output: it is not an array';


echo "<br>";

$Multidimensional_arrays = array(
    array(1, 2, 3, 4),
    array(5, 6, 7, 8),
    array(9, 12, 34, 56)
);
echo $Multidimensional_arrays [2] [3];




echo "<br>";

$user = array (
    "mamun" => array(
        "age" => 45,
        "email" => "mamun@gamil.com"
    )

    );
    echo $user ["mamun"] ["email"];
     foreach ($user as $userName => $value){
        echo "username : $userName <br/>";
        foreach($value as $key => $deteils){
            echo "$key : $deteils<br/>";
        }
     }
echo "<br>";



$g = array ("name" => "riyad", "age" => "90");
 print_r(array_values($g));








echo "<br>";

$assoc = array("a" => "apple", "b" => "banana", "c" => "cherry");
$keys = array_keys($assoc);
print_r ($keys);

echo "<br>";

$keys = array("a", "b", "c");
$values = array("apple", "banana", "cherry");
$combined = array_combine($keys, $values);
print_r($combined);



echo "<br>";

$filled = array_fill(0, 5, "apple");
print_r ($filled);



echo "<br>";
$fruits = array("apple", "banana", "cherry");
$push = array_push($fruits, "date", "elderberry");
print_r ($fruits);
echo "numder of elements :". $push;




echo "<br>";

$fr = array("apple", "banana", "cherry");
$remove = array("a", "f");
$lastFruit = array_diff($fr, $remove);
print_r ($lastFruit);

echo "<br>";
$fmr = array("apple", "banana", "cherry");

array_pop($fmr);
print_r ($fmr);

echo "<br>";




?>