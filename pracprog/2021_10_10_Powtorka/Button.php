<?php

class Button
{
    protected string $buttonText;
    protected string $id;

    /**
     * @param string $id
     * @param string $buttonText
     */
    public function __construct(string $id, string $buttonText)
    {
        $this->buttonText = $buttonText;
        $this->id = $id;
    }

    /**
     * @return string
     */
    public function getButtonText(): string
    {
        return $this->buttonText;
    }

    /**
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }
}