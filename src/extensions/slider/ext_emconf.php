<?php

$EM_CONF[$_EXTKEY] = [
    'title' => 'slider',
    'description' => 'Just a simple slider',
    'constraints' => [
        'depends' => [
            'typo3' => '12.0.0-12.4.99',
        ],
    ],
    'autoload' => [
        'psr-4' => [
            'Arman\\Slider\\' => 'Classes/',
        ],
    ],
];
