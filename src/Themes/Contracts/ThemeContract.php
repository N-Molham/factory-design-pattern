<?php

namespace App\Themes\Contracts;

interface ThemeContract
{
    public function fontFamily() : string;

    public function primaryColor() : string;

    public function secondaryColor() : string;

    public function backgroundColor() : string;
}
