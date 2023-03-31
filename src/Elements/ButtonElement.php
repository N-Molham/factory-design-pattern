<?php

namespace App\Elements;

class ButtonElement extends AbstractElement
{
    protected string $label;

    protected string $textColor;

    protected string $backgroundColor;

    /**
     * @return string
     */
    public function getLabel() : string
    {
        return $this->label;
    }

    /**
     * @param string $label
     * @return ButtonElement
     */
    public function setLabel(string $label) : ButtonElement
    {
        $this->label = $label;

        return $this;
    }

    /**
     * @return string
     */
    public function getTextColor() : string
    {
        return $this->textColor;
    }

    /**
     * @param string $textColor
     * @return ButtonElement
     */
    public function setTextColor(string $textColor) : ButtonElement
    {
        $this->textColor = $textColor;

        return $this;
    }

    /**
     * @return string
     */
    public function getBackgroundColor() : string
    {
        return $this->backgroundColor;
    }

    /**
     * @param string $backgroundColor
     * @return ButtonElement
     */
    public function setBackgroundColor(string $backgroundColor) : ButtonElement
    {
        $this->backgroundColor = $backgroundColor;

        return $this;
    }
}
