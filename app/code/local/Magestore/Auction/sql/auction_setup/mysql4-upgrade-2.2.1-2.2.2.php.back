<?php
$installer = $this;

$installer->startSetup();
$installer->run("
DROP TABLE IF EXISTS {$this->getTable('auction_buy_package')};
DROP TABLE IF EXISTS {$this->getTable('auction_buy_bid')};

CREATE TABLE {$this->getTable('auction_buy_bid')} (
  `auction_buy_id` int(11) NOT NULL auto_increment,
  `customer_id` int(11) NOT NULL,
  `product_id` varchar(255) NOT NULL,
  `sku` varchar(255) NOT NULL,
  `order_id` varchar(255) ,
  `qty` int(11) NOT NULL  default '1',
  `status` tinyint(1) default '1',
  PRIMARY KEY  (`auction_buy_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 ;
 ");
$installer->endSetup(); 