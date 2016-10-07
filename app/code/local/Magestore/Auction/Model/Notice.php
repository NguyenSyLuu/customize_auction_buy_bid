<?php

class Magestore_Auction_Model_Notice extends Varien_Object
{
	
	public function getNoticeSuccess($msg=null, $bid_number)
	{
		$msg1 = $msg ? $msg : Mage::helper('auction')->__('You have placed a bid successfully.') ;
		$msg2 = Mage::helper('auction')->__('You bid remaining: ').$bid_number ;
		return '<input type="hidden" id="notice_success" value="'.$msg1.'</br>'.$msg2.'"/>';
	}
//	public function getBidRemaining($bid_number){
//		$msg = Mage::helper('auction')->__('You bid remaining: ').$bid_number ;
//		return '<input type="hidden" id="notice_success" value="'.$msg.'"/>';
//	}
	public function getNoticeError($msg=null)
	{
		$msg = $msg ? $msg : Mage::helper('auction')->__('An error occur, try bid again please') ;
		
		return '<input type="hidden" id="notice_error" value="'.$msg.'"/>';
	}
}