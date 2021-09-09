<?php
declare(strict_types=1);

namespace App\Contract\Service\Music;

interface MusicMinistryContract
{
    public function validate(string $name): bool;
}
