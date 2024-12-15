<?php

require_once 'Pen.php';
require_once 'AutoPen.php'; 
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

    //AutoPen тут
    $autoPen = new AutoPen();
    $paper = new Paper(); 

    $autoPen->write($paper, "AutoPen is writing!");
    $paper->show();

    echo $autoPen . PHP_EOL;
    echo $paper . PHP_EOL;

    $autoPen->write($paper, str_repeat("KEK", 4100));

} catch (OutOfSpaceException | OutOfInkException | ClosedPenException $e) {
    echo "Exception: " . $e->getMessage() . PHP_EOL;
}
?>
