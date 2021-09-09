<?php
declare(strict_types=1);

namespace App\Service\Music\Model;

final class MusicInstrument
{
    private string $classification;

    private string $name;

    private Size $size;

    public function getClassification(): string
    {
        return $this->classification;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getSize(): Size
    {
        return $this->size;
    }

    public function setClassification(string $classification): MusicInstrument
    {
        $this->classification = $classification;

        return $this;
    }

    public function setName(string $name): MusicInstrument
    {
        $this->name = $name;

        return $this;
    }

    public function setSize(Size $size): MusicInstrument
    {
        $this->size = $size;

        return $this;
    }

    public function toArray(): array
    {
        return [
            'name' => $this->name,
            'classification' => $this->classification,
            'size' => $this->size->toArray(),
        ];
    }
}
