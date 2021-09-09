<?php
declare(strict_types=1);

namespace App\Rule\Music;

use EonX\EasyDecision\Rules\AbstractNameRestrictedRule;

final class UnsupportedMaterialRule extends AbstractNameRestrictedRule
{
    /**
     * @var string
     */
    public const RULE_NAME = 'unsupported_machine';

    /**
     * @var array<string, string[]>
     */
    private const SUPPORTED_MATERIALS = [
        'wood' => [
            'percussion',
            'stringed',
        ],
        'metal' => [
            'electronic',
            'percussion',
            'stringed',
            'wind',
        ],
        'brass' => [
            'wind',
        ],
        'plastic' => [
            'electronic',
            'percussion',
        ],
    ];

    /**
     * @inheritDoc
     */
    public function proceed(array $input): bool
    {
        return \in_array($input['classification'], self::SUPPORTED_MATERIALS[$input['material']], true) === false;
    }

    /**
     * @inheritDoc
     */
    public function supports(array $input): bool
    {
        return isset($input['classification'], $input['material']);
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
