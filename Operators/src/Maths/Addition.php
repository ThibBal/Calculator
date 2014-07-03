<?php

namespace Maths;

class Addition extends AbstractOperation implements OperationInterface {

    public function compute()
    {
        try
        {
            $this->checkNumbers();
            $res = $this->i->getNombre() + $this->j->getNombre();
            return $res;
        }
        catch (\Exception $e)
        {
            echo $e->getMessage();
        }
    }
}