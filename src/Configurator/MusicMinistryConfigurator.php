<?php
declare(strict_types=1);

namespace App\Configurator;

use App\Rule\Music\UnsupportedNameRule;
use EonX\EasyDecision\Configurators\AbstractNameRestrictedConfigurator;
use EonX\EasyDecision\Interfaces\DecisionInterface;

final class MusicMinistryConfigurator extends AbstractNameRestrictedConfigurator
{
    public function configure(DecisionInterface $decision): void
    {
        $decision->addRules([
            new UnsupportedNameRule()
        ]);
    }

    /**
     * @inheritDoc
     */
    protected function getNames(): array
    {
        return ['music_ministry'];
    }
}
