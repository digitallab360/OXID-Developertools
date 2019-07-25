<?php
/**
 * Modul: dlb_developertools
 * Web: https://www.digitallab360.de
 * Mail: oxid@digitallab360.de
 * (c) 2019 by digitallab360
 */

/**
 * Metadata version
 */
$sMetadataVersion = '2.0';

/**
 * Module information
 */
$aModule = [
    'id'          => 'dlb_developertools',
    'title'       => [
        'de' => '.dlb. | Entwicklerwerkzeuge',
        'en' => '.dlb. | Developertools'
    ],
    'description' => [
        'de' => 'Der perfekte Helfer für alle OXID eShop Entwickler. Häufig benötigte Aktionen mit nur einem Klick ausführen.',
        'en' => 'The perfect helper for all OXID eShop developers. Perform common actions with just one click.'
    ],
    'thumbnail'     => 'out/admin/src/img/logo.svg',
    'version'       => '2.0',
    'author'        => 'digitallab360',
    'url'           => 'https://www.digitallab360.de',
    'email'         => 'oxid@digitallab360.de',
    'extend'        => [],
    'controllers'	=> [
        'DlbLogViewer'		=> \DigitalLab\DeveloperTools\Application\Controller\Admin\DlbLogViewer::class,
        'DlbClearTmp'		=> \DigitalLab\DeveloperTools\Application\Controller\Admin\DlbClearTmp::class,
        'DlbUpdateView'	    => \DigitalLab\DeveloperTools\Application\Controller\Admin\DlbUpdateView::class,
        'DlbCredits'		=> \DigitalLab\DeveloperTools\Application\Controller\Admin\DlbCredits::class
    ],
    'blocks'        => [
        [
            'template'      => 'headitem.tpl',
            'block'         => 'admin_headitem_inccss',
            'file'          => 'Application/views/admin/blocks/dlb_headitem.tpl'
        ]
    ],
    'templates'     => [
        'dlb_logviewer.tpl'		=> 'dlb360/dlb_developertools/Application/views/admin/tpl/dlb_logviewer.tpl',
        'dlb_cleartmp.tpl'		=> 'dlb360/dlb_developertools/Application/views/admin/tpl/dlb_cleartmp.tpl',
        'dlb_updateviews.tpl'	=> 'dlb360/dlb_developertools/Application/views/admin/tpl/dlb_updateviews.tpl',
        'dlb_credits.tpl'		=> 'dlb360/dlb_developertools/Application/views/admin/tpl/dlb_credits.tpl'
    ],
    'events'        => [],
    'settings'      => []
];