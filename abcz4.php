<?php

$a = intval(trim(fgets(STDIN))); 
$b = intval(trim(fgets(STDIN))); 


if ( $a > $b && $b > 0 ) {
    echo "alpha\n";
} else if ( $a < 0 && $b == 0 ) {
    echo "bravo\n";
} else if ( $a == 0 || $b == 0 ) {
    echo "charlie\n";
} else {
    echo "zulu\n";
}

?>
