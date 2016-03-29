<?php

class Stuntcoders_FbPixel_Model_Observer
{
    public function onAddToWishlist()
    {
        Mage::getSingleton('customer/session')->setIsProductAddedToWishlist(true);
    }

    public function onAddToCart($observer)
    {
        $product = $observer->getProduct();
        Mage::getSingleton('customer/session')->setAddedProductName($product->getName());
    }

    public function onCompleteRegistration()
    {
        Mage::getSingleton('customer/session')->setCompleteRegistration(true);
    }
}