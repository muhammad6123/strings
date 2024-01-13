<?php 
$arr = array(
    array(
        'id' =>'210',
        'fast_name' => 'abdullah',
        'last_name' => 'mamun'
    ),
    array(
        'id' =>'250',
        'fast_name' => 'akbor',
        'last_name' => 'khan'
    ),
    array(
        'id' =>'240',
        'fast_name' => 'han',
        'last_name' => 'khan'
    )
  
    );

    $fast_name = array_column($arr, 'fast_name', 'id');
    
    print("<pre>");
    print_r($fast_name);
    print("<pre>");

?>