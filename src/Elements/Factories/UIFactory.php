<?php

namespace App\Elements\Factories;

use App\Elements\ButtonElement;
use App\Elements\SectionElement;
use App\Themes\Contracts\ThemeContract;

class UIFactory
{
    public function __construct(public ThemeContract $theme)
    {
    }

    public function button(string $label) : ButtonElement
    {
        return (new ButtonElement())
            ->setLabel($label)
            ->setTextColor($this->theme->primaryColor())
            ->setBackgroundColor($this->theme->secondaryColor());
    }

    public function section(?string $label = null) : SectionElement
    {
        return (new SectionElement())
            ->setLabel($label)
            ->setBackgroundColor($this->theme->backgroundColor());
    }
}
