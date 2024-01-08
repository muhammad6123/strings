<?php 
 class student{
    function department(){
        return "physics";
    }
    function details(){
        echo $this->department();
    }
 }
 $sd = new student();
 $sd->details();
echo "</br>";

$x = "php strings";
$y = "php is nice";
$z = "js is nice";
echo strlen($x);
echo "</br>";
echo str_word_count($x);
echo "</br>";
echo strpos($y, "nice");
echo "</br>";
 echo str_replace("js", "php", $z)





?>