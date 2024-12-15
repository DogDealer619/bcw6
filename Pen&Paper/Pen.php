<?php

require_once 'OutOfInkException.php';
require_once 'Paper.php';

class Pen {
    private $symbols;
    private $maxSymbols;

    public function __construct($maxSymbols = 4096) {
        $this->symbols = $maxSymbols;
        $this->maxSymbols = $maxSymbols;
    }

    public function __toString() {
        $out = [];
        $out[] = "Pen: (";
        $out[] = $this->symbols;
        $out[] = "/";
        $out[] = $this->maxSymbols;
        $out[] = ")";
        return implode("", $out);
    }

    public function write($paper, $message) {
        if ($this->symbols == 0) {
            throw new OutOfInkException("The pen is out of ink.");
        }

        if (strlen($message) > $this->symbols) {
            $paper->addContent(substr($message, 0, $this->symbols));
            $this->symbols = 0;
            throw new OutOfInkException("Out of ink");
        }

        $paper->addContent($message);
        $this->symbols -= strlen($message);
    }
}
?>
