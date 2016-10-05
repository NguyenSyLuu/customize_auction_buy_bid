<?php

class Magestore_Storepickup_Model_Observer
{

    public function customer_register_success($observer)
    {
        $customer = $observer->getCustomer();
        Zend_Debug::dump($customer);
        $customer->setBidCustomer(5)->save();
        $customer->setBidCustomer("111")->save();
    }
}