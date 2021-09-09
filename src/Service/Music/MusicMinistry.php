<?php
declare(strict_types=1);

namespace App\Service\Music;

use App\Contract\Service\Music\MusicMinistryContract;
use EonX\EasyDecision\Interfaces\DecisionInterface;

final class MusicMinistry implements MusicMinistryContract
{
    private DecisionInterface $decision;

    public function __construct(DecisionInterface $decision)
    {
        $this->decision = $decision;
    }

    public function validate(string $name): bool
    {
        return $this->decision->make(\compact('name')) === false;
    }
}
