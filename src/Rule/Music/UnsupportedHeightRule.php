<?php
declare(strict_types=1);

namespace App\Rule\Music;

use EonX\EasyDecision\Rules\AbstractNameRestrictedRule;

final class UnsupportedHeightRule extends AbstractNameRestrictedRule
{
    /**
     * @var string
     */
    public const RULE_NAME = 'unsupported_height';

    /**
     * @inheritDoc
     */
    public function proceed(array $input): bool
    {
        return $input['height'] > 1000 || $input['height'] < 1;
    }

    /**
     * @inheritDoc
     */
    public function supports(array $input): bool
    {
        return isset($input['height']);
    }

    public function toString(): string
    {
        return self::RULE_NAME;
    }

    protected function getDecisionName(): string
    {
        return self::RULE_NAME;
    }
}
