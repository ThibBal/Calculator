<?php
namespace Calculator\Operators;

class Multiplication {
    protected $i;
    protected $j;

    public function __construct(NombreEntierPositif $i, NombreEntierPositif $j)
    {
        $this->i = $i;
        $this->j = $j;
    }


    public function compute()
    {
        try
        {
            $this->i->CheckInteger();
            $this->i->CheckPositifInteger();
            $this->j->CheckInteger();
            $this->j->CheckPositifInteger();
            $res = $this->i->getNombre() * $this->j->getNombre();
            return $res;
        }
        catch (Exception $e)
        {
            echo $e->getMessage();
        }

    }

} 