<?php
namespace Htlw3r\Bootube;

abstract class Video
{
    private string $name;

    function __construct($name)
    {
        $this->name=$name;
    }

    function getVideoName(): string
    {
        return $this->name;
    }
}