<?php

class SPS_Twumbag_Block_Twumbag_List extends Mage_Core_Block_Template
{
    public function getHtmlImageTag($account)
    {
        $html = "<img src='https://api.twitter.com/1/users/profile_image?screen_name=";
        $html .= $account->getUsername();
        $html .= "&size=normal' />";

        return $html;
    }
}