<?php

class Stuntcoders_FbPixel_Helper_Data extends Mage_Core_Helper_Abstract
{
    const ACCOUNT_ID_SYSTEM_PATH = 'stuntcoders_fbpixel/general_options/account_id';
    const ACTIVATE_SYSTEM_PATH = 'stuntcoders_fbpixel/general_options/activate';

    public function getAccountId()
    {
        return Mage::getStoreConfig(self::ACCOUNT_ID_SYSTEM_PATH);
    }

    public function isEnabled()
    {
        return Mage::getStoreConfigFlag(self::ACTIVATE_SYSTEM_PATH);
    }
}