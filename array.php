<?php 

$x = array(5,8,78,6,25,46);

$length = count($x);
for($i = 0; $i <$length; $i++ ){
    echo $x[$i];
    echo "<br/>";
}




$ages = array("labib" => "14", "kalam" => "78", "korim" => "56");

foreach ($ages as $s => $age) {
    echo "key = " . $s . ", value = " . $age;
    echo "<br/>";
}


?>