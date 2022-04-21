DROP TABLE offers;

CREATE TABLE offers (
  id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
  location VARCHAR (50) NOT NULL,
  city VARCHAR (45) NOT NULL,
  region VARCHAR (45) NOT NULL,
  country VARCHAR (53) NOT NULL,
  description TEXT,
  price DECIMAL(10,2),
  per ENUM("day","week","weekend"), 
  latitude DECIMAL(10,8),
  longitude DECIMAL(11,8),
  img VARCHAR(50),
  src VARCHAR(50),
  url VARCHAR(100),
  free ENUM("Available","Full","Closed") DEFAULT "Available"
);

INSERT INTO offers 
  (location, city, region, country, description, price, per, latitude, longitude, img, src, url)
VALUES
  ("New Camping Le Tamerici","Cecina Mare","Tuscany","Italy","On the Tuscan Costa degli Etruschi (Etruscan Coast), in the resort town of Marina di Cecina, you will find New Camping Le Tamerici. Here you are staying on a well maintained, level camping site on the edge of a pine forest, approx. 500 m from the beach. Apart from relaxing on the beach or around the pool, you can also make lovely excursions into Tuscany from here.",450,"week","43.29263860", "10.50779920","Cecina_distance_Moralist_Wikimedia.jpg","Moralist, Wikimedia Commons","https://letamerici.it/en/"),
  ("New Camping Le Tamerici","Cecina Mare","Tuscany","Italy","On the Tuscan Costa degli Etruschi (Etruscan Coast), in the resort town of Marina di Cecina, you will find New Camping Le Tamerici. Here you are staying on a well maintained, level camping site on the edge of a pine forest, approx. 500 m from the beach. Apart from relaxing on the beach or around the pool, you can also make lovely excursions into Tuscany from here.",450,"week","43.29263860", "10.50779920","Cecina_distance_Moralist_Wikimedia.jpg","Moralist, Wikimedia Commons","https://letamerici.it/en/"),
  ("New Camping Le Tamerici","Cecina Mare","Tuscany","Italy","On the Tuscan Costa degli Etruschi (Etruscan Coast), in the resort town of Marina di Cecina, you will find New Camping Le Tamerici. Here you are staying on a well maintained, level camping site on the edge of a pine forest, approx. 500 m from the beach. Apart from relaxing on the beach or around the pool, you can also make lovely excursions into Tuscany from here.",450,"week","43.29263860", "10.50779920","Cecina_distance_Moralist_Wikimedia.jpg","Moralist, Wikimedia Commons","https://letamerici.it/en/"),
  ("New Camping Le Tamerici","Cecina Mare","Tuscany","Italy","On the Tuscan Costa degli Etruschi (Etruscan Coast), in the resort town of Marina di Cecina, you will find New Camping Le Tamerici. Here you are staying on a well maintained, level camping site on the edge of a pine forest, approx. 500 m from the beach. Apart from relaxing on the beach or around the pool, you can also make lovely excursions into Tuscany from here.",450,"week","43.29263860", "10.50779920","Cecina_distance_Moralist_Wikimedia.jpg","Moralist, Wikimedia Commons","https://letamerici.it/en/"),
  ("New Camping Le Tamerici","Cecina Mare","Tuscany","Italy","On the Tuscan Costa degli Etruschi (Etruscan Coast), in the resort town of Marina di Cecina, you will find New Camping Le Tamerici. Here you are staying on a well maintained, level camping site on the edge of a pine forest, approx. 500 m from the beach. Apart from relaxing on the beach or around the pool, you can also make lovely excursions into Tuscany from here.",450,"week","43.29263860", "10.50779920","Cecina_distance_Moralist_Wikimedia.jpg","Moralist, Wikimedia Commons","https://letamerici.it/en/");