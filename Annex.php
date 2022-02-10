<?php

require_once 'AnnexInterface.php';

abstract class Annex implements AnnexInterface
{
    private float $surface;

    public function __construct(float $surface)
    {
        $this->setSurface($surface);
    }

    public function getSurface(): float
    {
        return $this->surface;
    }

    private function setSurface(float $surface): void
    {
        $this->surface = $surface;
    }
}