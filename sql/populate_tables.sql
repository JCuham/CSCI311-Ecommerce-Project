-- User table Seeds
INSERT INTO User (username,pword,firstname, lastname, email,
street_address,postal_code)
VALUES ('testuser1','testpass1','John', 'Smith','johnsmith@email.com',
'123 Easy Street','V9X4T6');

INSERT INTO User (username,pword,firstname,lastname,email,
street_address,postal_code)
VALUES ('testuser2','testpass2','Jill' , 'Smith','jillsmith@email.com',
'123 Not Easy Street','Z9Y4U6');

INSERT INTO User (username,pword,firstname,lastname,email,
street_address,postal_code)
VALUES ('testuser3','testpass3','Johnny' , 'Appleseed','appleseeds@email.com',
'456 ABC Lane','Z5R6T8');

INSERT INTO User (username,pword,firstname, lastname,email,
street_address,postal_code)
VALUES ('testuser4','testpass4','Alice' , 'Bob','alicebob@email.com',
'555 Checksum Road','MD5V4T');


--Product table Seeds  *Only three catagories Automotive, Electronics, Textbooks
INSERT INTO Product (id,title,prod_desc,category,price,stock,owner)
VALUES ('1','PS2 Console','Selling my old ps2 console still has lots of life',
'Electronics','150.99','1','testuser1');

INSERT INTO Product (id,title,prod_desc,category,price,stock,owner)
VALUES ('2','Beautiful Jalopy','Selling my prestine condition automobile, 
no low ballers i know what ive got',
'Automotive','100000.00','1','testuser1');

INSERT INTO Product (id,title,prod_desc,category,price,stock,owner)
VALUES ('3','Math Text Books','Selling my textbooks for MATH121, MATH122, MATH123,
 MATH223 and MATH241',
'Textbooks','150.99','4','testuser1');

INSERT INTO Product (id,title,prod_desc,category,price,stock,owner)
VALUES ('4','PS5 Console','Stole this from a scalper and looking to sell it for a good price',
'Electronics','150.99','1','testuser1');

--Images Table Seeds
INSERT INTO Images (id,product_id,path)
VALUES ('1','1','media/gaming.png');

INSERT INTO Images (id,product_id,path)
VALUES ('2','2','media/automotive.jpg');

INSERT INTO Images (id,product_id,path)
VALUES ('3','3','media/textbook.jpg');

INSERT INTO Images (id,product_id,path)
VALUES ('4','4','media/placeholder.jpg');

