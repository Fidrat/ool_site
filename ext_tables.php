<?php
defined('TYPO3_MODE') || die('Access denied.');

call_user_func(
    function()
    {

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile('ool_site', 'Configuration/TypoScript', 'Sitewide Typo3 config');

    }
);
