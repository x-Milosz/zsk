<?php

use JetBrains\PhpStorm\Pure;

class OperationSignButton extends Button
{
    protected OperationSignEnum $operationsEnum;


    #[Pure] public function __construct(string $id, string $buttonText, OperationSignEnum $operationsEnum)
    {
        parent::__construct($id, $buttonText);
        $this->operationsEnum = $operationsEnum;
    }

    /**
     * @return OperationSignEnum
     */
    public function getOperationsEnum(): OperationSignEnum
    {
        return $this->operationsEnum;
    }
}