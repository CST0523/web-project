CREATE TABLE `tbl_bus` (
  `transportID` int(11) NOT NULL AUTO_INCREMENT,
  `Num` varchar(100) NOT NULL,
  `startPoint` varchar(100) NOT NULL,
  `endPoint` varchar(100) NOT NULL,
  `color` varchar(100) NOT NULL,
  `operationHour` varchar(100) NOT NULL,
  `frequency` varchar(100) NOT NULL,
  `type` varchar(100) NOT NULL,
  PRIMARY KEY (`transportID`)
);

INSERT INTO `tbl_bus`(`transportID`,`Num`,`startPoint`,`endPoint`,`color`,`operationHour`,`frequency`,`type`) values 
(1,'GOKL01','Suria KLCC','Bukit Bintang','GREEN','5:10 AM - 9:10 PM','5','Eco-Bus'),
(2,'GOKL02','Hab Pasar Seni','Bukit Bintang','PURPLE','6:00 AM - 11:00 PM','15','Eco-Bus'),
(3,'GOKL03','Titiwangsa','KL Sentral','RED','6:00 AM - 11:00 PM','15','Eco-Bus'),
(4,'GOKL04','Titiwangsa','Bukit Bintang','BLUE','6:00 AM - 11:00 PM','15','Eco-Bus'),
(5,'GOKL05','Titiwangsa','MINDEF','ORANGE','6:00 AM - 11:00 PM','30','Eco-Bus'),
(6,'GOKL06','PPR Pantai Ria','LRT Universiti ','PINK','6:00 AM - 11:00 PM','30','Eco-Bus'),
(7,'GOKL07','LRT Dato Keramat','Taman Setiawangse','TURQUOISE','6:00 AM - 11:00 PM','15','Eco-Bus'),
(8,'GOKL08','MRT/KTM Kampung Batu','Chow Kit','MARRON','6:00 AM - 11:00 PM','30','Eco-Bus'),
(9,'GOKL09','LRT Sri Rampai','Seksyen 10 Wangsa Maju','CHOCOLATE','6:00 AM - 11:00 PM','30','Eco-Bus'),
(10,'GOKL10','LRT/MER Maluri','Bandar Sri Permaisuri','PARROT-GREEN','6:00 AM - 11:00 PM','30','Eco-Bus'),
(11,'GOKL11','LRT/MER Maluri','Bandar Tun Razak','GREY','6:00 AM - 11:00 PM','30','Eco-Bus'),
(12,'GOKL12','Taman Fadason','MRT Sri Delima','CREAM','6:00 AM - 11:00 PM','30','Eco-Bus'),
(13,'GOKL13','MRT Jinjang', 'MATRADE','MAGENTA','6:00 AM - 11:00 PM','30','Eco-Bus'),
(14,'GOKL14','LRT Muhibbah','PPR Pinggiran Bukit Jalil/ Taman Oversea Union','-','6:00 AM - 11:00 PM','30','Eco-Bus'),
(15,'KL Monarail','KL Sentral','Titiwangsa','LIGHT GREEN','6:00 AM - 11:46 PM','10','Monorail'),
(16,'MRT Kajang Line','Kwasa Damansara','Kajang','GREEN','6:00 AM - 11:28 PM','10','MRT'),
(17,'MRT Putrajaya Line','Putrajaya Sentral','Kwasa Damansara','YELLOW','6:00 AM - 11:34 PM','8','MRT'),
(18,'LRT Ampang Line','Masjid Jamek','Ampang','ORANGE','6:00 AM - 11:58 PM','5','LRT'),
(19,'LRT Sri Petaling Line','Putra Heights','Hang Tuah','MAROON','5:45 AM - 11:30 PM','10','LRT'),
(20,'LRT Kelana Jaya Line','Putra Heights','Gombak','RED','5:45 AM - 11:36 PM','7','LRT');
