<?php
namespace App\Twig;

use Twig\Extension\AbstractExtension;
use Twig\TwigFunction;

class AppExtension extends AbstractExtension
{
    public function getFunctions()
    {
        return [
            new TwigFunction('json_decode', [$this, 'json_decoding']),
        ];
    }

    public function json_decoding($json)
    {
        return json_decode($json,constant('JSON_OBJECT_AS_ARRAY'));
    }
}