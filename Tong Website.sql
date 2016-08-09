USE ums;
CREATE TABLE items (
	id INT PRIMARY KEY,
	itemType INT,
    itemPrice NVARCHAR(50),
    itemPicture NVARCHAR(50),
    itemDescription NVARCHAR(200),
    CONSTRAINT fk_itemType FOREIGN KEY (itemType)
	REFERENCES itemType(id)
)

CREATE TABLE itemTypes (
	id INT PRIMARY KEY AUTO_INCREMENT,
    itemTypeDescription NVARCHAR(20)
)



INSERT INTO itemTypes(itemTypeDescription) VALUES ('clothes');
INSERT INTO itemTypes(itemTypeDescription) VALUES ('shoes');
INSERT INTO itemTypes(itemTypeDescription) VALUES ('toys');

INSERT INTO items(id, itemType, itemPrice, itemPicture, itemDescription) 
VALUES (11, 1,'100','images/clothesOne.jpg','White T-shirt');
INSERT INTO items(id, itemType, itemPrice, itemPicture, itemDescription) 
VALUES (12, 1,'100','images/clothesTwo.jpg','Colorful T-shirt');
INSERT INTO items(id, itemType, itemPrice, itemPicture, itemDescription) 
VALUES (13, 1,'100','images/clothesThree.jpg','Black Pean');
INSERT INTO items(id, itemType, itemPrice, itemPicture, itemDescription) 
VALUES (14, 1,'100','images/clothesFour.jpg','Black T-shirt');

INSERT INTO items(id, itemType, itemPrice, itemPicture, itemDescription) 
VALUES (21, 2,'100','images/shoseOne.jpg','White Converse');
INSERT INTO items(id, itemType, itemPrice, itemPicture, itemDescription) 
VALUES (22, 2,'100','images/shoseTwo.jpg','High-Heeled Shose');
INSERT INTO items(id, itemType, itemPrice, itemPicture, itemDescription) 
VALUES (23, 2,'100','images/shoseThree.jpg','Spoets shoes');
INSERT INTO items(id, itemType, itemPrice, itemPicture, itemDescription) 
VALUES (24, 2,'100','images/shoseFour.jpg','White Sandals');

INSERT INTO items(id, itemType, itemPrice, itemPicture, itemDescription) 
VALUES (31, 3, '100','images/toyOne.jpg','Lovely Rabbit');
INSERT INTO items(id, itemType, itemPrice, itemPicture, itemDescription) 
VALUES (32, 3, '100','images/toyTwo.jpg','Lego Airship');
INSERT INTO items(id, itemType, itemPrice, itemPicture, itemDescription) 
VALUES (33, 3, '100','images/toyThree.jpg','Rubik Cube');
INSERT INTO items(id, itemType, itemPrice, itemPicture, itemDescription) 
VALUES (34, 3, '100','images/toyFour.jpg','Pikachu');

SELECT * FROM itemTypes;
SELECT * FROM items;


