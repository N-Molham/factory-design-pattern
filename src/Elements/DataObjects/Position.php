<?php

namespace App\Elements\DataObjects;

class Position
{
    public function __construct(
        public readonly int $x,
        public readonly int $y,
    ) {
    }
}
