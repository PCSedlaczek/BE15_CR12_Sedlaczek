DROP TABLE offers;

CREATE TABLE offers (
  id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
  location VARCHAR (50) NOT NULL,
  city VARCHAR (45) NOT NULL,
  country VARCHAR (53) NOT NULL,
  description TEXT,
  price DECIMAL(10,2), 
  latitude DECIMAL(10,8),
  longitude DECIMAL(11,8),
  img VARCHAR(50),
  src VARCHAR(50),
  url VARCHAR(100),
  free ENUM("Available","Full","Closed") DEFAULT "Available"
);

INSERT INTO offers 
  (location, city, country, description, price, latitude, longitude, img, src, url)
VALUES
  ("New Camping Le Tamerici","Cecina Mare","Italy","On the Tuscan Costa degli Etruschi (Etruscan Coast), in the resort town of Marina di Cecina, you will find New Camping Le Tamerici. Here you are staying on a well maintained, level camping site on the edge of a pine forest, approx. 500 m from the beach. Apart from relaxing on the beach or around the pool, you can also make lovely excursions into Tuscany from here.",450,47.6964719,13.3457582,"Cecina_distance_Moralist_Wikimedia.jpg","Moralist, Wikimedia Commons","https://commons.wikimedia.org/wiki/File:Cecina_distance.JPG");