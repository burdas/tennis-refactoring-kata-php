<?php

use Feature\TennisGame3;

class TennisGame3Test extends TennisGameTest
{
    protected function setUp(): void
    {
        $this->game = $this->createGame("player1", "player2");
    }

    protected function createGame(string $player1, string $player2): \Feature\TennisGame
    {
        return new TennisGame3($player1, $player2);
    }
}
