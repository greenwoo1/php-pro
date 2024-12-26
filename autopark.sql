
CREATE DATABASE auto_park_db;

USE auto_park_db;


CREATE TABLE Parks (
                       id INT AUTO_INCREMENT PRIMARY KEY,
                       address VARCHAR(255) NOT NULL
);

CREATE TABLE Cars (
                      id INT AUTO_INCREMENT PRIMARY KEY,
                      park_id INT NOT NULL,
                      model VARCHAR(255) NOT NULL,
                      price FLOAT NOT NULL,
                      FOREIGN KEY (park_id) REFERENCES Parks(id)
);

CREATE TABLE Drivers (
                         id INT AUTO_INCREMENT PRIMARY KEY,
                         car_id INT NOT NULL,
                         name VARCHAR(55) NOT NULL,
                         phone VARCHAR(55),
                         FOREIGN KEY (car_id) REFERENCES Cars(id)
);

CREATE TABLE Orders (
                        id INT AUTO_INCREMENT PRIMARY KEY,
                        driver_id INT NOT NULL,
                        customer_id INT NOT NULL,
                        start TEXT NOT NULL,
                        finish TEXT NOT NULL,
                        total FLOAT NOT NULL,
                        FOREIGN KEY (driver_id) REFERENCES Drivers(id),
                        FOREIGN KEY (customer_id) REFERENCES Customers(id)
);

CREATE TABLE Customers (
                           id INT AUTO_INCREMENT PRIMARY KEY,
                           name VARCHAR(55) NOT NULL,
                           phone VARCHAR(55)
);
