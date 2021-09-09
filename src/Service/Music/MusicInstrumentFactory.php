<?php
declare(strict_types=1);

namespace App\Service\Music;

use App\Contract\Service\Music\MusicInstrumentFactoryContract;
use App\Contract\Service\Music\MusicMinistryContract;
use App\Service\Music\Model\MusicInstrument;
use App\Service\Music\Model\Size;
use EonX\EasyDecision\Interfaces\DecisionInterface;
use Exception;

final class MusicInstrumentFactory implements MusicInstrumentFactoryContract
{
    private DecisionInterface $musicDecision;

    private MusicMinistryContract $musicMinistry;

    public function __construct(DecisionInterface $musicDecision, MusicMinistryContract $musicMinistry)
    {
        $this->musicDecision = $musicDecision;
        $this->musicMinistry = $musicMinistry;
    }

    /**
     * @throws \Exception
     */
    public function create(string $name, string $classification, int $width, int $height): MusicInstrument
    {
        if ($this->musicDecision->make(\compact('classification', 'height', 'name', 'width'))) {
            throw new Exception('We cannot make this instrument.');
        }

        if ($this->musicMinistry->validate($name) === false) {
            throw new Exception('We cannot publish this instrument.');
        }

        return (new MusicInstrument())
            ->setName($name)
            ->setClassification($classification)
            ->setSize(new Size($width, $height));
    }
}
