<?php
declare(strict_types=1);

namespace App\Controller;

use App\Contract\Service\Music\MusicInstrumentFactoryContract;
use App\Contract\Service\Music\MusicMinistryContract;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Throwable;

/**
 * @Route("/instrument", name="instrument_create", methods={"GET"})
 */
final class CreateMusicInstrumentController
{
    public function __invoke(MusicInstrumentFactoryContract $factory): Response {
        $instrumentRequests = [
            [
                // This is a good instrument
                'name' => 'Good boy instrument',
                'classification' => 'wind',
                'width' => 10,
                'height' => 10,
            ],
            [
                // This instrument should trigger UnsupportedNameRule
                'name' => 'ass instrument',
                'classification' => 'wind',
                'width' => 10,
                'height' => 10,
            ],
            [
                // This is a good instrument
                'name' => 'Good boy instrument 2',
                'classification' => 'wind',
                'width' => 10,
                'height' => 10,
            ],
            [
                // This is a good instrument
                'name' => 'Good boy instrument 3',
                'classification' => 'wind',
                'width' => 10,
                'height' => 10,
            ],
        ];

        $instruments = [];

        foreach ($instrumentRequests as $instrumentRequest) {
            try {
                $instrument = $factory->create(
                    $instrumentRequest['name'],
                    $instrumentRequest['classification'],
                    $instrumentRequest['width'],
                    $instrumentRequest['height']
                );

                $instruments[] = $instrument->toArray();
            } catch (Throwable $throwable) {
                // nothing happen
            }
        }

        return new JsonResponse($instruments);
    }
}
