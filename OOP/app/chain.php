<?php

class manipulateString
{

    public $string;
    public function __construct($input)
    {
        $this->string = $input;
    }

    public function reverse()
    {
        $this->string = strrev($this->string);
        return $this;
    }

    public function uppercase()
    {
        $this->string = strtoupper($this->string);
        return $this;
    }

    public function append($text)
    {
        $this->string .= $text;
        return $this;
    }

    public function getString($text)
    {
        return $this->string . PHP_EOL;
    }
}
