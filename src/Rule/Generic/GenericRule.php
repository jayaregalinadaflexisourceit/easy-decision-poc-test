<?php
declare(strict_types=1);

namespace App\Rule\Generic;

use EonX\EasyDecision\Interfaces\RuleInterface;
use EonX\EasyUtils\Traits\HasPriorityTrait;

final class GenericRule implements RuleInterface
{
    use HasPriorityTrait;

    /**
     * @inheritDoc
     */
    public function proceed(array $input)
    {
        return true;
    }

    /**
     * @inheritDoc
     */
    public function supports(array $input): bool
    {
        return false;
    }

    public function toString(): string
    {
        return 'generic_rule';
    }
}
