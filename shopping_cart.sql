--  
 -- Table structure for table `tbl_product`  
 --  
 CREATE TABLE IF NOT EXISTS `tbl_product` (  
  `id` int(11) NOT NULL AUTO_INCREMENT,  
  `name` varchar(255) NOT NULL,  
  `image` varchar(255) NOT NULL,  
  `price` double(10,2) NOT NULL,  
  PRIMARY KEY (`id`)  
 ) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;  
 --  
 -- Dumping data for table `tbl_product`  
 --  
 INSERT INTO `tbl_product` (`id`, `name`, `image`, `price`) VALUES  
 (1, 'body shop tea tree face wash', 'shakiraektabangi.jpg', 12.5),  
 (2, 'nature republic aloe vera gel', 'bjkjbn.jpg', 8.75),  
 (3, 'innisfree cherry blossom kit', '95e02ac565d61393d4affd46f8ff4025.jpg', 16.25);
   
