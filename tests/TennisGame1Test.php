<?php

use Feature\TennisGame1;

class TennisGame1Test extends TennisGameTest
{
    protected function setUp(): void
    {
        $this->game = $this->createGame("player1", "player2");
    }

    protected function createGame(string $player1, string $player2): \Feature\TennisGame
    {
        return new TennisGame1($player1, $player2);
    }
}
