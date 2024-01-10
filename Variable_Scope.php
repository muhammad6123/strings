<?php 

$y = 100;
function test1(){
    global $y;
    $s = 10;
    echo $s;
    echo "<br/>";
    echo "acces from funcrion test1 ".$y;
    echo "<br/>";


}
function test2 (){
    global $y;

    $x = 40;
    echo $x;
    echo "<br/>";
    echo "acces from funcrion test2 ".$y;
    echo "<br/>";
}
test1();
test2();
?>