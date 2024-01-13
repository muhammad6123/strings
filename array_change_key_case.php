<?php 
$sub = array(
    "jamal" => 45,
    "kamal" => 25,
    "korim" => 65,
    "rabbi" => 87,
    "hasan" => 45
);
print ("<pre");
print_r (array_change_key_case($sub, CASE_UPPER));
print ("</pre>");



?>