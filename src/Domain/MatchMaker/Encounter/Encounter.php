<?php

/*
 * This file is part of the OpenClassRoom PHP Object Course.
 *
 * (c) Grégoire Hébert <contact@gheb.dev>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace App\Domain\MatchMaker\Encounter;

use App\Domain\MatchMaker\Player\PlayerInterface;
use JetBrains\PhpStorm\ExpectedValues;

class Encounter
{
    public const STATUS_PLAYING = 'En cours';
    public const STATUS_OVER = 'Terminé';

    protected int $dateOfEncounter;

    protected string $status = self::STATUS_PLAYING;

    protected ?float $scorePlayerA = null;

    protected ?float $scorePlayerB = null;

    public function __construct(public ?PlayerInterface $playerA = null, public ?PlayerInterface $playerB = null)
    {
        $this->dateOfEncounter = time();
    }

    public function setStatus(
        #[ExpectedValues([self::STATUS_PLAYING, self::STATUS_OVER])]
        string $status
    ): void {
        if (!\in_array($status, [self::STATUS_PLAYING, self::STATUS_OVER], true)) {
            throw new \BadMethodCallException(sprintf('$status must one of %s', implode(', ', [self::STATUS_PLAYING, self::STATUS_OVER])));
        }

        $this->status = $status;
    }

    public function getStatus(): string
    {
        return $this->status;
    }

    public function getPlayerA(): ?PlayerInterface
    {
        return $this->playerA;
    }

    public function getPlayerB(): ?PlayerInterface
    {
        return $this->playerB;
    }

    public function getWinner(): ?PlayerInterface
    {
        if (null === ($this->scorePlayerA ?? $this->scorePlayerB ?? null)) {
            return null;
        }

        $potentialWinners = [
            -1 => $this->playerB,
            0 => null,
            1 => $this->playerA,
        ];

        return $potentialWinners[$this->scorePlayerA <=> $this->scorePlayerB];
    }

    public function updateRatios(): void
    {
        $winner = $this->getWinner();

        $resultPlayerA = $this->playerA === $winner ? 1 : ($this->playerB === $winner ? 0 : 0.5);
        $resultPlayerB = $this->playerB === $winner ? 1 : ($this->playerA === $winner ? 0 : 0.5);

        $this->playerA->updateRatioAgainst($this->playerB, $resultPlayerA);
        $this->playerB->updateRatioAgainst($this->playerA, $resultPlayerB);
    }

    public function setScores(Score ...$scores): void
    {
        foreach ($scores as $score) {
            if ($score->player === $this->playerA) {
                $this->scorePlayerA = $score->score;
                continue;
            }

            if ($score->player === $this->playerB) {
                $this->scorePlayerB = $score->score;
            }
        }
    }

    /**
     * @return int timestamp
     */
    public function getDateOfEncounter(): int
    {
        return $this->dateOfEncounter;
    }

    public function __toString(): string
    {
        return $this->playerA->getName().' vs '.$this->playerB->getName();
    }
}
