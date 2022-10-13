<?php

class customException extends Exception
{
    public function customError()
    {
        $message = "Información del error: " . 
        "<br> Mensaje del error: " . $this->getMessage() . 
        "<br> Fichero origen del error: " . $this->getFile() . "<br> Linea del error: " . $this->getLine();

        return $message;
    }
}
