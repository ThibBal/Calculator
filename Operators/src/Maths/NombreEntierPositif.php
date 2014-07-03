<?php

namespace Maths;

class NombreEntierPositif {

    protected $i;

    public function __construct($i)
    {
        $this->i = $i;
    }

    public  function CheckPositifInteger()
    {
        if($this->i < 0) {
            throw new Exception\RuntimeException("Nombre négatif!");
        }
    }

    public function CheckInteger()
    {
        if(!is_integer($this->i)) {
            throw new Exception\DomainException("Nombre pas entier");
        }
    }

    public function getNombre()
    {
        return $this->i;
    }

} 