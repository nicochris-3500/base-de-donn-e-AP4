SELECT * FROM Customers;
CREATE TABLE MATERIEL_M2L( 
ID int(3) NOT NULL primary key,
Nom VARCHAR(30) NOT NULL,
Année int(4) NOT NULL,
Détails varchar(40),
Type varchar(20) NOT NULL,
Appartenance varchar(30));
