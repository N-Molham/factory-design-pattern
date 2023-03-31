<?php

namespace App\Elements;

use App\Elements\Contracts\UIElementContract;
use App\Elements\Contracts\UIStackableElementContract;

abstract class AbstractStackableElement extends AbstractElement implements UIStackableElementContract
{
    /** @var UIElementContract[] */
    protected array $children = [];

    /**
     * @inheritDoc
     */
    public function children() : array
    {
        return $this->children;
    }

    public function append(UIElementContract $element) : AbstractStackableElement
    {
        $this->children[] = $element;

        return $this;
    }
}
