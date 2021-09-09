<?php
declare(strict_types=1);

namespace App\Rule\Music;

use EonX\EasyDecision\Rules\AbstractNameRestrictedRule;

final class UnsupportedClassificationRule extends AbstractNameRestrictedRule
{
    /**
     * @var string
     */
    public const RULE_NAME = 'unsupported_classification';

    /**
     * @var string[]
     */
    private const SUPPORTED_CLASSIFICATION = [
        'electronic',
        'percussion',
        'stringed',
        'wind',
    ];

    /**
     * @inheritDoc
     */
    public function proceed(array $input): bool
    {
        return \in_array($input['classification'], self::SUPPORTED_CLASSIFICATION, true) === false;
    }

    /**
     * @inheritDoc
     */
    public function supports(array $input): bool
    {
        return isset($input['classification']);
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
