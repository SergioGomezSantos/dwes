<?php

class asignatura
{

    private $name = null;
    private $numCredits = null;
    private static $cicle;

    public function __construct($name, $numCredits)
    {
        $this->name = $name;
        $this->numCredits = $numCredits;
    }

    /**
     * Get the value of name
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set the value of name
     */
    public function setName($name): self
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get the value of numCredits
     */
    public function getNumCredits()
    {
        return $this->numCredits;
    }

    /**
     * Set the value of numCredits
     */
    public function setNumCredits($numCredits): self
    {
        $this->numCredits = $numCredits;

        return $this;
    }

    /**
     * Get the value of cicle
     */
    public static function getCicle()
    {
        return self::$cicle;
    }

    /**
     * Set the value of cicle
     */
    public static function setCicle($cicle)
    {
        self::$cicle = $cicle;
    }

    public function __toString()
    {
        return "<p>Asignatura:
                <ul>
                    <li>Name: " . $this->getName . "</li>
                    <li>NumCredits:" . $this->getNumCredits() ." </li>
                </ul></p>";
    }

}
