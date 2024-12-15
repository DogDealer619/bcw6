<?php

require_once 'OutOfSpaceException.php';

class Paper {
    private int $maxSymbols;
    private string $content;

    public function __construct(int $maxSymbols = 1024) {
        $this->maxSymbols = $maxSymbols;
        $this->content = '';
    }

    public function __toString() {
        return "Paper (" . strlen($this->content) . "/" . $this->maxSymbols . ")";
    }

    public function addContent(string $message) {
        $available = $this->maxSymbols - strlen($this->content);

        if ($available <= 0) {
            throw new OutOfSpaceException("No space left on the paper.");
        }

        if (strlen($message) > $available) {
            $this->content .= substr($message, 0, $available);
            throw new OutOfSpaceException("Not enought space");
        }

        $this->content .= $message;
    }

    public function show() {
        echo $this->content . PHP_EOL;
    }
}

?>