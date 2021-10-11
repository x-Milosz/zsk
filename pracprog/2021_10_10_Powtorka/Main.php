<?php

use JetBrains\PhpStorm\Pure;

include_once './Button.php';
include_once './CalculatorModule.php';
include_once './NumericButton.php';
include_once './OperationSignButton.php';
include_once './OperationSignEnum.php';
include_once './UIDisplayer.php';

class Main {
    private CalculatorModule $calculator;
    private array $numericButtons;
    private UIDisplayer $uIDisplayer;

    #[Pure] public function __construct()
    {
        $this->calculator = new CalculatorModule();
        $this->numericButtons = [];
        $this->uIDisplayer = new UIDisplayer();
    }

    public function start() {
        $this->createButtons();
    }

    private function createButtons() {
        $this->numericButtons = [];
        for ($i = 1; $i <= 9; $i++) {
            array_push($this->numericButtons, new NumericButton("num$i", "$i", $i));
        }
        $this->uIDisplayer->printNumericButtons($this->numericButtons);
    }
}

$runner = new Main();
$runner->start();