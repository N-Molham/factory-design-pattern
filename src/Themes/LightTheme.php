<?php

namespace App\Themes;

class LightTheme implements Contracts\ThemeContract
{
    public function fontFamily() : string
    {
        return 'Verdana';
    }

    public function primaryColor() : string
    {
        return '#000000';
    }

    public function secondaryColor() : string
    {
        return '#EEEEEE';
    }

    public function backgroundColor() : string
    {
        return '#FFFFFF';
    }
}
