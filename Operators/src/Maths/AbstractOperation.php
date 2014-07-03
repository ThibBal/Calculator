<?php

namespace Maths;

abstract class AbstractOperation
{
    protected $i;
    protected $j;

    public function __construct(NombreEntierPositif $i, NombreEntierPositif $j)
    {
        $this->i = $i;
        $this->j = $j;
    }

    protected function checkNumbers() {
        $this->i->CheckInteger();
        $this->i->CheckPositifInteger();
        $this->j->CheckInteger();
        $this->j->CheckPositifInteger();
    }
}