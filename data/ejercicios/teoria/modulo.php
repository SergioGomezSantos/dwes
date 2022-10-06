<?php

class modulo extends asignatura {

    private $code = 0;

    public function __construct($name, $numCredits, $code)
    {
        parent::__construct($name, $numCredits);
        $this->code = $code;
    }

    /**
     * Get the value of code
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * Set the value of code
     */
    public function setCode($code): self
    {
        $this->code = $code;

        return $this;
    }

    public function __toString()
    {
        return "<p>Asignatura:
                <ul>
                    <li>Name: " . $this->getName() . "</li>
                    <li>NumCredits:" . $this->getNumCredits() ." </li>
                    <li>Code: " . $this->getCode() . "</li>
                </ul>
                </p>";
    }
}