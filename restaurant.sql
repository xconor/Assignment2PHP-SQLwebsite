CREATE DATABASE IF NOT EXISTS `restaurant` DEFAULT CHARACTER SET utf8 COLLATE utf8_General_ci;
USE `restaurant`;

--Table structure for table `menu`--

DROP TABLE IF EXISTS menu_items;
CREATE TABLE menu_items (
itemID int(11) NOT NULL,
itemName varchar(255) NOT NULL,
itemDescription varchar(255) DEFAULT '',
itemPrice decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


-- Dumping data for table menu_items
INSERT INTO menu_items (itemID, itemName, itemDescription, itemPrice) VALUES
(1, 'Pizza Margherita', 'Tomato sauce, mozzarella cheese, and basil', '12.99'),
(2, 'Spaghetti Carbonara', 'Spaghetti with a creamy egg and bacon sauce', '14.99'),
(3, 'Beef Burger', 'Juicy beef patty topped with cheddar cheese, lettuce, tomato, and pickles', '16.99'),
(4, 'Chicken Caesar Salad', 'Romaine lettuce, grilled chicken, croutons, and Caesar dressing', '13.99'),
(5, 'Salmon Fillet', 'Grilled salmon fillet with a lemon herb butter sauce', '21.99'),
(6, 'Mushroom Risotto', 'Creamy risotto with sauteed mushrooms', '15.99'),
(7, 'Small Fry', 'A serving of small French fries', '4.50'),
(8, 'Chicken Curry', 'Spicy curry made with chicken and aromatic spices', '13.50'),
(9, 'Choclate Fudge Cake', 'Decadent chocolate cake with fudge icing', '6.50'),
(10, 'Pancakes', 'A stack of fluffy pancakes served with butter and syrup', '5.25'),
(11, 'Apple Tart', 'Buttery pastry shell filled with sweetened apples', '6.00'),
(12, 'Fish and Chips', 'Crispy battered fish with a side of thick-cut fries', '10.00'),
(13, 'Chicken Goujans', 'Tender strips of chicken coated in seasoned breadcrumbs', '8.50'),
(14, 'Wagyu Steak', 'Premium cut of Wagyu beef, grilled to perfection', '24.00');

-- Indexes for table menu_items
ALTER TABLE menu_items
ADD PRIMARY KEY (itemID);

-- AUTO_INCREMENT for table menu_items
ALTER TABLE menu_items
MODIFY itemID int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

DROP TABLE IF EXISTS Waiter;
CREATE TABLE Waiter (
waiter_ID INT NOT NULL,
waiter_name VARCHAR(20) NOT NULL,
waiter_number VARCHAR(10));

INSERT INTO Waiter VALUES (1,"Conor","0864856875");
INSERT INTO Waiter VALUES (2,"John","0864567878");
INSERT INTO Waiter VALUES (3,"Dave","0862567485");
INSERT INTO Waiter VALUES (4,"Sophia","0872937485");
INSERT INTO Waiter VALUES (5,"Ben","0862930467");
INSERT INTO Waiter VALUES (6,"Jack","0863846702");


DROP TABLE IF EXISTS Chef;
CREATE TABLE Chef(
chef_ID INT NOT NULL,
chef_name VARCHAR(20),
chef_number VARCHAR(20),
chef_address VARCHAR(30),
chef_DOB DATE,
PRIMARY KEY (chef_ID));


INSERT INTO Chef VALUES(1,"Peter","0872638674","Dublin","1986-03-13");
INSERT INTO Chef VALUES(2,"Jamie","0872375274","Dundalk","1982-12-25");
INSERT INTO Chef VALUES(3,"Gino","0872638474","Dublin","1974-04-01");
INSERT INTO Chef VALUES(4,"Kate","0872638564","Dublin","1972-04-09");
INSERT INTO Chef VALUES(5,"Cormac","0872298474","Limerick","1984-06-12");