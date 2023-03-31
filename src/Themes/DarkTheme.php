<?php

namespace App\Themes;

class DarkTheme implements Contracts\ThemeContract
{
    public function fontFamily() : string
    {
        return 'Verdana';
    }

    public function primaryColor() : string
    {
        return '#FFFFFF';
    }

    public function secondaryColor() : string
    {
        return '#6f6f6f';
    }

    public function backgroundColor() : string
    {
        return '#000000';
    }
}
