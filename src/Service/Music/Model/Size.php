<?php
declare(strict_types=1);

namespace App\Service\Music\Model;

final class Size
{
    private int $height;

    private int $width;

    public function __construct(int $width, int $height)
    {
        $this->width = $width;
        $this->height = $height;
    }

    public function getHeight(): int
    {
        return $this->height;
    }

    public function getWidth(): int
    {
        return $this->width;
    }

    /**
     * @return array<string, int>
     */
    public function toArray(): array
    {
        return [
            'height' => $this->height,
            'width' => $this->width,
        ];
    }
}
