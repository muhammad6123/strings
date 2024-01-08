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
echo strlen($x);
echo "</br>";
echo str_word_count($x);


?>