<?php

require_once 'Pen.php';
require_once 'ClosedPenException.php';

class AutoPen extends Pen {
    private bool $isOpen = false;

    public function write(Paper $paper, string $message) {
        if (!$this->isOpen) {
            $this->isOpen = true;
        }

        parent::write($paper, $message);
    }
}
?>
