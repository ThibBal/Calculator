<?php
namespace Calculator\Operators;
use RuntimeException;


class Soustraction {
    protected $i;
    protected $j;

    public function __construct(NombreEntierPositif $i, NombreEntierPositif $j)
    {
        $this->i = $i;
        $this->j = $j;
    }

    public  function CheckPositifRes()
    {
        if($this->i->getNombre() < $this->j->getNombre())
        {
            throw new RuntimeException("Résultat négatif!");
        }
    }

    public function compute()
    {
        try
        {
            $this->i->CheckInteger();
            $this->i->CheckPositifInteger();
            $this->j->CheckInteger();
            $this->j->CheckPositifInteger();
            $this->CheckPositifRes();
            $res = $this->i->getNombre() - $this->j->getNombre();
            return $res;
        }
        catch (Exception $e)
        {
            echo $e->getMessage();
        }

    }

} 