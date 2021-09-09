<?php
declare(strict_types=1);

namespace App\Configurator;

use App\Rule\Music\UnsupportedClassificationRule;
use App\Rule\Music\UnsupportedHeightRule;
use App\Rule\Music\UnsupportedWidthRule;
use EonX\EasyDecision\Configurators\AbstractNameRestrictedConfigurator;
use EonX\EasyDecision\Interfaces\DecisionInterface;

final class MusicFactoryConfigurator extends AbstractNameRestrictedConfigurator
{
    protected function getNames(): array
    {
        return ['music_factory'];
    }

    public function configure(DecisionInterface $decision): void
    {
        $decision->addRules([
            new UnsupportedClassificationRule(),
            new UnsupportedHeightRule(),
            new UnsupportedWidthRule()
        ]);
    }
}
