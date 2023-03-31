<?php

namespace App\Elements;

use App\Elements\Contracts\UIElementContract;
use App\Elements\DataObjects\Position;

abstract class AbstractElement implements UIElementContract
{
    protected Position $position;

    public function setPosition(Position $position) : UIElementContract
    {
        $this->position = $position;

        return $this;
    }

    public function getPosition() : Position
    {
        return $this->position;
    }
}
