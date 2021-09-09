<?php
declare(strict_types=1);

namespace App\Rule\Music;

use EonX\EasyDecision\Rules\AbstractNameRestrictedRule;

final class UnsupportedWidthRule extends AbstractNameRestrictedRule
{
    /**
     * @var string
     */
    public const RULE_NAME = 'unsupported_width';

    /**
     * @inheritDoc
     */
    public function proceed(array $input): bool
    {
        return $input['width'] > 1000 || $input['width'] < 1;
    }

    /**
     * @inheritDoc
     */
    public function supports(array $input): bool
    {
        return isset($input['width']);
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
