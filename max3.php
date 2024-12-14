<?php

$a = intval(trim(fgets(STDIN))); 
$b = intval(trim(fgets(STDIN))); 
$c = intval(trim(fgets(STDIN))); 
$maxValue = 0;

    
if ( $a >= $b ) {
    $maxValue = $a;
} else {
    $maxValue = $b;
}
if ( $c >= $maxValue ) {
        $maxValue = $c;
}

echo $maxValue . "\n";

?>
