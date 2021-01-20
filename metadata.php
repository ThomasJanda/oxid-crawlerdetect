<?php

$sMetadataVersion = '2.0';

$aModule = array(
    'id'          => 'rs-crawlerdetect',
    'title'       => '*RS Crawler Detect',
    'description' => 'Extend Crawler Detection implemented in the shop.',
    'thumbnail'   => '',
    'version'     => '1.0.0',
    'author'      => 'Thomas Janda',
    'url'         => '',
    'email'       => '',

    'extend'      => array(
        \OxidEsales\Eshop\Core\Utils::class => rs\crawlerdetect\Core\Utils::class,
    ),
    'settings'    => array(
        array(
            'group' => 'rs-crawlerdetect_settings',
            'name'  => 'rs-crawlerdetect_settings_enable_se_mode',
            'type'  => 'bool',
            'value' => false,
        ),
    )
);