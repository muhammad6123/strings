<?php 
function isfemale ($oerson){
    if($oerson['gender'] == 'f'){
        return true;
    }
    return false;
}
 $males = array_filter($oerson, "ismale");
 $females = array_filter($oerson, "isfemale");
 print_r($males);


?>