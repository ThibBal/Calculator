<?php

namespace Maths;

use Maths\Exception;

class Soustraction extends AbstractOperation implements OperationInterface {

    public  function CheckPositifRes()
    {
        if($this->i->getNombre() < $this->j->getNombre())
        {
            throw new Exception\RuntimeException("Résultat négatif!");
        }
    }

    public function compute()
    {
        try
        {
            $this->checkNumbers();
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