<?php

class SPS_Twumbag_Model_Resource_Mysql4_Setup extends Mage_Eav_Model_Entity_Setup
{
    /**
     * Clean the db cache.  This is useful because immediately after creating new db columns, sometimes the
     * db schemas are still cached.
     */
    public function cleanDbCache()
    {
        $app = Mage::app();
        $cache = $app->getCache();
        if ($cache != null)
        {
            $cache->clean('matchingTag', array('DB_PDO_MYSQL_DDL'));
        }
    }
}
