<?php

namespace Maths;

class Division{
    protected $num;
    protected $den;

    public function __construct(NombreEntierPositif $num, NombreEntierPositif $den)
    {
        $this->num = $num;
        $this->den = $den;
    }


    public function CheckDenominateur()
    {
        if($this->den->getNombre() == 0)
        {
            throw new DomainException("Division par 0 impossible");
        }
    }

    public function compute()
    {
        try
        {
            $this->num->CheckInteger();
            $this->num->CheckPositifInteger();
            $this->den->CheckInteger();
            $this->den->CheckPositifInteger();
            $this->CheckDenominateur();
            $res = $this->num->getNombre() / $this->den->getNombre();
            return $res;
        }
        catch (Exception $e)
        {
            echo $e->getMessage();
        }

    }

} 