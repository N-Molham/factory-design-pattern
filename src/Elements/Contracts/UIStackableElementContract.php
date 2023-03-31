<?php

namespace App\Elements\Contracts;

interface UIStackableElementContract extends UIElementContract
{
    /**
     * @return UIStackableElementContract[]
     */
    public function children() : array;

    public function append(UIStackableElementContract $element) : UIStackableElementContract;
}
