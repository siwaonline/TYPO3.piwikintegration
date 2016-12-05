<?php

/***************************************************************
 * Extension Manager/Repository config file for ext "piwikintegration".
 *
 * Auto generated 11-03-2013 20:23
 *
 * Manual updates:
 * Only the data in the array - everything else is removed by next
 * writing. "version" and "dependencies" must not be touched!
 ***************************************************************/

$EM_CONF[$_EXTKEY] = [
    'title'            => 'Piwik Backend integration',
    'description'      => 'Uses EXT:piwik to inserts Data in the HTML header and gives BE-Users the right to see the data for their sites. Autoupdate of Piwik will work as TYPO3-Admin!',
    'category'         => 'module',
    'version'          => '4.3.3',
    'module'           => 'mod1',
    'state'            => 'beta',
    'uploadfolder'     => 0,
    'createDirs'       => '',
    'clearcacheonload' => 0,
    'author'           => 'Kay Strobach',
    'author_email'     => 'kay.strobach@typo3.org',
    'author_company'   => '',
    'constraints'      => [
        'depends' => [
            'php'   => '5.3.7-7.0.99',
            'typo3' => '6.2.5-7.9.99',
        ],
        'conflicts' => [
            'dbal' => '1.0.0-99.0.0',
        ],
        'suggests' => [
            'piwik' => '2.0.0-2.999.0',
        ],
    ],
    'autoload' => 
        array(
            'classmap' => array(
                'Classes/Controller',
                'Classes/Tracking',
                'Classes/Lib/Config.php',
                'Classes/Lib/Div.php',
                'Classes/Lib/Extmgm.php',
                'Classes/Hooks/BeUserProcessing.php',
                'Classes/Lib/Install.php',
                'pi1/class.tx_piwikintegration_flexform.php',
                'pi1/class.tx_piwikintegration_pi1.php',
                'pi1/class.tx_piwikintegration_pi1_templavoila_preview.php',
                'pi1/class.tx_piwikintegration_pi1_wizicon.php',
                'Classes/SchedulerTasks/Archive.php',
                'Classes/Tracking/Tracking.php',
        )
    ),
];
