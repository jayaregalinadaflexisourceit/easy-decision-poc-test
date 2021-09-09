<?php
declare(strict_types=1);

namespace App\Rule\Music;

use EonX\EasyDecision\Rules\AbstractNameRestrictedRule;

final class UnsupportedNameRule extends AbstractNameRestrictedRule
{
    /**
     * @var string
     */
    public const RULE_NAME = 'unsupported_name';

    /**
     * @var string[]
     */
    public const UNSUPPORTED_WORDS = [
        'anal',
        'ass',
        'bad',
        'butt',
    ];

    /**
     * @inheritDoc
     */
    public function proceed(array $input): bool
    {
        $name = $input['name'];

        return $this->findMatch($name) > 0 || \strlen($name) > 100;
    }

    /**
     * @inheritDoc
     */
    public function supports(array $input): bool
    {
        return isset($input['name']);
    }

    public function toString(): string
    {
        return self::RULE_NAME;
    }

    protected function getDecisionName(): string
    {
        return self::RULE_NAME;
    }

    private function findMatch(string $name): int
    {
        return (int)\preg_match_all(\sprintf('/%s/', \implode('|', self::UNSUPPORTED_WORDS)), $name);
    }
}
