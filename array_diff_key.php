<?php 
$array_one = array(
    "a" => "red",
    "b" => "green",
    "c" => "blue",
    "d" => "yellow",
);

$array_two = array(
    "a" => "red",

    "c" => "blue",
    "d" => "green",
);
$array_thray = array(
    "a" => "green",
    
    "c" => "purple",
    "d" => "red",
);
$differ = array_diff_key($array_one, $array_two, $array_thray);

print("<pre>");
print_r($differ);
print("</pre>");

?>