
//Please  create your Mysql database, table & data similar to the one below.


--Create Your Database

CREATE Database CompanyName
--

-- --------------------------------------------------------

--
Create your Table structure for table `Customers`
--

CREATE TABLE `Customers` (
  `Id` int(11) NOT NULL,
  `Name` varchar(100) NOT NULL,
  `City` varchar(150) NOT NULL,
  `Country` varchar(150) NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


--
-- Now add  you need to add data for table `Customers`
--

INSERT INTO `Customers` VALUES(0, 'James Lemaire', 'Rotterdam', 'Netherlands');
INSERT INTO `Customers` VALUES(1, 'Francois Holland', 'Paris', 'France');
INSERT INTO `Customers` VALUES(2, 'Sophie Hilbrand', 'Vermont', 'USA');
INSERT INTO `Customers` VALUES(3, 'Edilver Acosta', 'New York', 'USA');
INSERT INTO `Customers` VALUES(4, 'Michael Caine', 'London', 'Britain');
INSERT INTO `Customers` VALUES(5, 'Antonio Banderas', 'Madrid', 'Spain');

