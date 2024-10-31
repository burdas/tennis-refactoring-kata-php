<?php

use PHPUnit\Framework\TestCase;
use Feature\TennisGame;

abstract class TennisGameTest extends TestCase
{
    protected TennisGame $game;

    protected abstract function createGame(string $player1, string $player2): TennisGame;

    public function testWonPointPlayer1IncrementsScore()
    {
        $this->game->wonPoint("player1");
        $this->assertEquals("Fifteen-Love", $this->game->getScore());
    }

    public function testWonPointPlayer2IncrementsScore()
    {
        $this->game->wonPoint("player2");
        $this->assertEquals("Love-Fifteen", $this->game->getScore());
    }

    public function testGetScoreWhenScoresAreEqual()
    {
        $this->game->wonPoint("player1");
        $this->game->wonPoint("player1");
        $this->game->wonPoint("player2");
        $this->game->wonPoint("player2");
        $this->assertEquals("Thirty-All", $this->game->getScore());
    }

    public function testGetScoreWhenPlayer1Wins()
    {
        $this->game->wonPoint("player1");
        $this->game->wonPoint("player1");
        $this->game->wonPoint("player1");
        $this->game->wonPoint("player1");
        $this->assertEquals("Win for player1", $this->game->getScore());
    }
}
