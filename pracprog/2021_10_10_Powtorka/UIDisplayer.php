<?php

class UIDisplayer
{
    /**
     * @param NumericButton[] $buttons
     */
    public function printNumericButtons(array $buttons) {
        $this->printRow($buttons[6], $buttons[7], $buttons[8]);
        $this->printRow($buttons[3], $buttons[4], $buttons[5]);
        $this->printRow($buttons[0], $buttons[1], $buttons[2]);
    }

    private function printRow(Button $btn1, Button $btn2, Button $btn3){
        echo "<br>";
        $this->printButton($btn1);
        $this->printButton($btn2);
        $this->printButton($btn3);
    }

    private function printButton(Button $button) {
        $id = $button->getId();
        $text = $button->getButtonText();
        echo "<button id='$id'>$text</button>";
    }
}