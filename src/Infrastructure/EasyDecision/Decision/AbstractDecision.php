<?php
declare(strict_types=1);

namespace App\Infrastructure\EasyDecision\Decision;

use EonX\EasyDecision\Context;
use EonX\EasyDecision\Decisions\AbstractDecision as EasyDecisionAbstractDecision;
use EonX\EasyDecision\Interfaces\ContextInterface;

/**
 * This class created to avoid throwing ContextNotSetException
 * @see https://github.com/eonx-com/easy-monorepo/issues/721
 */
abstract class AbstractDecision extends EasyDecisionAbstractDecision
{
    public function getContext(): ContextInterface
    {
        return $this->context = $this->context ?? new Context(static::class, []);
    }
}
