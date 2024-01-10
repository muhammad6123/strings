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
echo "<br/>";
$cars = array(
    array("bmw", 14, 58),
    array("valoe", 48, 65),
    array("saab", 14, 58)
);
echo $cars[1][2];
echo "<br/>";

$sub = array(
    array("bmw", 14, 58),
    array("valoe", 48, 65),
    array("saab", 14, 58),
    array("nice",15, 23)
);

for($row = 0; $row<4; $row++){
    echo "<p> row namber $row </p>";
    echo "<ul>";
    for($col = 0; $col <3; $col++){
       echo "<li>".$sub[$row][$col]."</li>"; 

    }
    echo "</ul>";
}

$nam = array()
?>