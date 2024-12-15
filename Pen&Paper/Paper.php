<?php

require_once 'OutOfSpaceException.php';

class Paper {
    private $maxSymbols;
    private $content;

    public function __construct($maxSymbols = 1024) {
        $this->maxSymbols = $maxSymbols;
        $this->content = '';
    }

    public function __toString() {
        $out = [];
        $out[] = "Paper (";
        $out[] = strlen($this->content);
        $out[] = "/";
        $out[] = $this->maxSymbols;
        $out[] = ")";
        return implode("", $out);
    }

    public function addContent($message) {
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