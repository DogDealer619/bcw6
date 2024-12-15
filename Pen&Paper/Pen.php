<?php

require_once 'OutOfInkException.php';
require_once 'Paper.php';

class Pen {
    private int $symbols;
    private int $maxSymbols;

    public function __construct(int $maxSymbols = 4096) {
        $this->symbols = $maxSymbols;
        $this->maxSymbols = $maxSymbols;
    }

    public function __toString() {
        return "Paper (" . $this->symbols . "/" . $this->maxSymbols . ")";
    }

    public function write($paper, string $message) {
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
