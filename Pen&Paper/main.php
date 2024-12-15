<?php

require_once 'Pen.php';
require_once 'Paper.php';

try {
    $pen = new Pen();
    $paper = new Paper();

    echo $pen . PHP_EOL;
    echo $paper . PHP_EOL;

    $pen->write($paper, "Hello, PHP");
    $paper->show();

    echo $pen . PHP_EOL;
    echo $paper . PHP_EOL;

    $pen->write($paper, str_repeat("KEK", 4100));
} catch (OutOfSpaceException | OutOfInkException $e) {
    echo "Exception: " . $e->getMessage() . PHP_EOL;
}
?>
