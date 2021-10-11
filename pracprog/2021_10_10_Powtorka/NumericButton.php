<?php

use JetBrains\PhpStorm\Pure;

class NumericButton extends Button
{
    protected int $value;

    /**
     * @param int $value
     */
    #[Pure] public function __construct(string $id, string $buttonText, int $value)
    {
        parent::__construct($id, $buttonText);
        $this->value = $value;
    }

    /**
     * @return int
     */
    public function getValue(): int
    {
        return $this->value;
    }

}