<?php

class SPS_Twumbag_Model_Mysql4_Account extends Mage_Core_Model_Mysql4_Abstract
{
    protected function _construct()
    {
        $this->_init('twumbag/account', 'twitter_id');
    }
}