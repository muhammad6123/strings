<?php 
$car = array("volvo", "bmw","toyota");
$length = count($car);
for($i = 0; $i <$length; $i++){
    echo $car[$i]."<br/>";
}

echo "<br/>";

$age = array(
    "abdulla" => "25",
    "mamun" => "85",
    "jamal" => "45",
    "habib" => "65"


);
foreach($age as $key=>$value){
    echo "name = ".$key.", age = ".$value;
    echo "<br/>";
}

echo "<br/>";

$sub = array(
    array("volvo", "100", "254"),
    array("bmw", "120", "454"),
    array("volvo", "103", "284")


);
echo $sub [2] [1];
?>