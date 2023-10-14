<?php

namespace Portal\Portal\enums;

trait Enumable
{
    public function getAll()
    {
        $ref = new \ReflectionClass(static::class);
        return $ref->getConstants();
    }
}
