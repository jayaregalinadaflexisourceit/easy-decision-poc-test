<?php

return [
    Symfony\Bundle\FrameworkBundle\FrameworkBundle::class => ['all' => true],
    EonX\EasyUtils\Bridge\Symfony\EasyUtilsSymfonyBundle::class => ['all' => true],
    EonX\EasyDecision\Bridge\Symfony\EasyDecisionSymfonyBundle::class => ['all' => true],
    Symfony\Bundle\TwigBundle\TwigBundle::class => ['all' => true],
    Symfony\Bundle\WebProfilerBundle\WebProfilerBundle::class => ['dev' => true, 'test' => true],
];
