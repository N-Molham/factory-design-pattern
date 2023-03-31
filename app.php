<?php

use App\Elements\Factories\UIFactory;
use App\Themes\LightTheme;

require 'vendor/autoload.php';

$factory = new UIFactory(new LightTheme());

$button = $factory->button('Login');
$mainSection = $factory->section()->append($button);

dump($mainSection);
