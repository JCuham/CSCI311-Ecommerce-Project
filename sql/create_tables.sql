CREATE TABLE User (
  username VARCHAR(256) NOT NULL PRIMARY KEY,
  pword VARCHAR(256) NOT NULL,
  firstname VARCHAR(256) NOT NULL,
  lastname VARCHAR(256) NOT NULL,
  email VARCHAR(128) NOT NULL,
  street_address VARCHAR(256) NOT NULL,
  postal_code VARCHAR(6) NOT NULL
  );

CREATE TABLE Product (
  id INT(12) NOT NULL AUTO_INCREMENT PRIMARY KEY,
  title VARCHAR(42) NOT NULL,
  prod_desc VARCHAR(500) NOT NULL,
  category VARCHAR (32) NOT NULL, -- Categories should be controlled to a finite list
  price DECIMAL(13,2) NOT NULL CHECK (price > -0.01),
  Stock INT(4) NOT NULL CHECK (stock > -1),
  owner VARCHAR(256) REFERENCES User(username) NOT NULL,
  UNIQUE(title, prod_desc, category, owner)
);

CREATE TABLE Images (
  id INT(12) NOT NULL AUTO_INCREMENT PRIMARY KEY,
  product_id INT(12) REFERENCES Product(id),
  path VARCHAR(200) NOT NULL,
  data BLOB
);
