<?php

namespace App\Elements\Contracts;

use App\Elements\DataObjects\Position;

interface UIElementContract
{
    public function setPosition(Position $position) : UIElementContract;

    public function getPosition() : Position;
}
