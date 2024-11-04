<?php

namespace Feature;

class TennisGame4 implements TennisGame
{
    private array $score = [
        "player1" => 0,
        "player2" => 0
    ];

    private const SCORE_MESSAGES = ["Love", "Fifteen", "Thirty", "Forty"];

    public function wonPoint($player): void
    {
        $this->score[$player]++;
    }

    public function getScore(): string
    {
        if ($this->isTie()) return $this->getTieScore();
        if ($this->isGameOver()) return $this->getGameOutcome();
        return $this->getRegularScore();
    }

    private function isTie(): bool
    {
        return $this->score["player1"] === $this->score["player2"];
    }

    private function getTieScore(): string
    {
        $tieScore = $this->score["player1"];
        return $tieScore > 2 ? "Deuce" : self::SCORE_MESSAGES[$tieScore] ."-All";
    }

    private function isGameOver(): bool
    {
        return $this->score["player1"] >= 4 || $this->score["player2"] >= 4;
    }

    private function getGameOutcome(): string
    {
        $scoreDifference = $this->score["player1"] - $this->score["player2"];

        if ($scoreDifference === 1) return "Advantage player1";
        if ($scoreDifference === -1) return "Advantage player2";

        return $scoreDifference >= 2 ? "Win for player1" : "Win for player2";
    }

    private function getRegularScore(): string
    {
        return self::SCORE_MESSAGES[$this->score["player1"]] . "-" . self::SCORE_MESSAGES[$this->score["player2"]];
    }
}
