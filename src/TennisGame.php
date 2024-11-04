<?php

namespace Feature;

interface TennisGame
{
    /**
     * @param  $player
     * @return void
     */
    public function wonPoint($player): void;

    /**
     * @return string
     */
    public function getScore(): string;
}
