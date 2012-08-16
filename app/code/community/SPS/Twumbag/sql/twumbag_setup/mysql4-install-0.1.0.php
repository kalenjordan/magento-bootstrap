<?php

$installer = $this;
$installer->startSetup();

// Create account table
$installer->run("
    CREATE TABLE IF NOT EXISTS `{$this->getTable('twumbag/account')}` (
        `username` varchar(64),
        `twitter_id` INT(11) unsigned,
        `points` INT(11),
        `is_active` tinyint(1) unsigned NOT NULL default '1',
        `created_at` TIMESTAMP,
        `updated_at` TIMESTAMP,
        PRIMARY KEY  (`twitter_id`),
        UNIQUE KEY `username` (`username`)
    ) ENGINE=InnoDB DEFAULT CHARSET=utf8;
");

/*
 * todop1 Add foreign keys for linking bets to accounts
$installer->getConnection()->addConstraint(
    'FK_REWARDSPLATFORM_WEBSITE_ID',
    $installer->getTable('rewardsplatform/account'),
    'website_id',
    $installer->getTable('core/website'),
    'website_id',
    'cascade',
    'cascade'
);

$installer->getConnection()->addConstraint(
    'FK_REWARDSPLATFORM_USER_ID',
    $installer->getTable('rewardsplatform/account'),
    'user_id',
    $installer->getTable('admin/user'),
    'user_id',
    'cascade',
    'cascade'
);
*/

$installer->cleanDbCache();
$installer->endSetup();
