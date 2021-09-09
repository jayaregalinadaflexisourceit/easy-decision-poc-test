<?php
declare(strict_types=1);

namespace App\Contract\Service\Music;

use App\Service\Music\Model\MusicInstrument;

interface MusicInstrumentFactoryContract
{
    public function create(string $name, string $classification, int $width, int $height): MusicInstrument;
}
