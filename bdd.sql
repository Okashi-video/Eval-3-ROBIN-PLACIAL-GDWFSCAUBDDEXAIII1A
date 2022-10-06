DROP TABLE IF EXISTS 'place_de_cine';
CREATE DATABASE IF NOT EXISTS 'place_de_cine';
USE 'place_de_cine'; 





CREATE TABLE Cinéma(
   Id_Cinéma COUNTER,
   name VARCHAR(20),
   phone_cinéma INT,
   Zip_code INT,
   city VARCHAR(20),
   admin_id INT,
   PRIMARY KEY(Id_Cinéma)
);


CREATE TABLE USER_info(
   Id_USER_info COUNTER,
   Firstname VARCHAR(20),
   Lastname VARCHAR(20),
   date_birth DATE,
   email VARCHAR(254),
   password VARCHAR(60),
   PRIMARY KEY(Id_USER_info)
);

CREATE TABLE customer(
   Id_customer COUNTER,
   user_id INT,
   price_customer DECIMAL(4,2),
   type_payement INT,
   Id_USER_info INT NOT NULL,
   PRIMARY KEY(Id_customer),
   FOREIGN KEY(Id_USER_info) REFERENCES USER_info(Id_USER_info)
);
 
CREATE TABLE reverve(
   Id_reverve COUNTER,
   id_customer INT,
   date_reserv DATE,
   id_sceance INT,
   type_pay VARCHAR(20),
   date_pay DATE,
   PRIMARY KEY(Id_reverve)
);

CREATE TABLE movie(
   Id_movie COUNTER,
   genre VARCHAR(20),
   sceance_id INT,
   name VARCHAR(200),
   producteur VARCHAR(200),
   PRIMARY KEY(Id_movie)
);

CREATE TABLE Admin(
   Id_Admin COUNTER,
   user_id INT,
   Id_Cinéma INT NOT NULL,
   PRIMARY KEY(Id_Admin),
   FOREIGN KEY(Id_Cinéma) REFERENCES Cinéma(Id_Cinéma)
);




CREATE TABLE sceance(
   Id_sceance COUNTER,
   room_id_sceance INT,
   time_sceance DATE,
   Id_movie INT NOT NULL,
   PRIMARY KEY(Id_sceance),
   FOREIGN KEY(Id_movie) REFERENCES movie(Id_movie)
);

CREATE TABLE MovieRoom(
   Id_MovieRoom COUNTER,
   id_cinéma VARCHAR(50),
   nb_room INT,
   nb_place BIGINT,
   Id_sceance INT NOT NULL,
   Id_Cinéma_1 INT NOT NULL,
   PRIMARY KEY(Id_MovieRoom),
   FOREIGN KEY(Id_sceance) REFERENCES sceance(Id_sceance),
   FOREIGN KEY(Id_Cinéma_1) REFERENCES Cinéma(Id_Cinéma)
);



CREATE TABLE do(
   Id_customer INT,
   Id_reverve INT,
   PRIMARY KEY(Id_customer, Id_reverve),
   FOREIGN KEY(Id_customer) REFERENCES customer(Id_customer),
   FOREIGN KEY(Id_reverve) REFERENCES reverve(Id_reverve)
);

CREATE TABLE is_for(
   Id_reverve INT,
   Id_sceance INT,
   PRIMARY KEY(Id_reverve, Id_sceance),
   FOREIGN KEY(Id_reverve) REFERENCES reverve(Id_reverve),
   FOREIGN KEY(Id_sceance) REFERENCES sceance(Id_sceance)
);

