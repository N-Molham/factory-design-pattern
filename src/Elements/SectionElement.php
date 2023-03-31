<?php

namespace App\Elements;

class SectionElement extends AbstractStackableElement
{
    protected ?string $label = null;

    protected ?string $backgroundColor = null;

    /**
     * @return string|null
     */
    public function getBackgroundColor() : ?string
    {
        return $this->backgroundColor;
    }

    /**
     * @param string|null $backgroundColor
     * @return SectionElement
     */
    public function setBackgroundColor(?string $backgroundColor) : SectionElement
    {
        $this->backgroundColor = $backgroundColor;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getLabel() : ?string
    {
        return $this->label;
    }

    /**
     * @param string|null $label
     * @return SectionElement
     */
    public function setLabel(?string $label) : SectionElement
    {
        $this->label = $label;
        return $this;
    }
}
