<?php

abstract class NodeAbstract implements NodeInterface
{

    protected string $name = '';

    public function __construct(string $name)
    {
        $this->name = $name;
    }

}


