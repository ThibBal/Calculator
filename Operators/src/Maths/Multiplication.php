<?php

namespace Maths;

class Multiplication extends AbstractOperation implements OperationInterface {

    public function compute()
    {
        try
        {
            $this->checkNumbers();
            $res = $this->i->getNombre() * $this->j->getNombre();
            return $res;
        }
        catch (Exception $e)
        {
            echo $e->getMessage();
        }

    }

} 