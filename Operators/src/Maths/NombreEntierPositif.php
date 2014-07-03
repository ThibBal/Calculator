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
            throw new RuntimeException("Nombre négatif!");
        }
    }

    public function CheckInteger()
    {
        if(!is_integer($this->i)) {
            throw new DomainException("Nombre pas entier");
        }
    }

    public function getNombre()
    {
        return $this->i;
    }

} 