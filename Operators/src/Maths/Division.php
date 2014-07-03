<?php

namespace Maths;

use Maths\Exception;

class Division extends AbstractOperation implements OperationInterface{

    public function CheckDenominateur($nbJ)
    {
        if($nbJ == 0)
        {
            throw new Exception\DomainException("Division par 0 impossible");
        }
    }

    public function compute()
    {
        try
        {
            $this->checkNumbers();
            $nbJ = $this->j->getNombre();
            $this->CheckDenominateur($nbJ);
            $res = $this->i->getNombre() / $nbJ;
            return $res;
        }
        catch (Exception $e)
        {
            echo $e->getMessage();
        }

    }

} 