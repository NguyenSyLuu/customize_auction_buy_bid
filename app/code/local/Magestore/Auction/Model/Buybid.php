<?php

class Magestore_Auction_Model_Buybid extends Mage_Core_Model_Abstract {



    public function _construct() {
        parent::_construct();
        $this->_init('auction/buybid');
    }


}