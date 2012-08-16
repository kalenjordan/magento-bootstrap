<?php

class SPS_Twumbag_Block_Twumbag_List_Winner extends SPS_Twumbag_Block_Twumbag_List
{
    public function getAccounts()
    {
        return Mage::getModel('twumbag/account')
            ->getCollection()
            ->addFieldToFilter('points', array('gt' => 0));
    }
}