CREATE TABLE MATERIEL_M2L( 
ID int(3) NOT NULL primary key,
Nom VARCHAR(30) NOT NULL,
Année int(4) NOT NULL,
Détails varchar(40),
Type varchar(20) NOT NULL,
Appartenance varchar(30));
Insert into MATERIEL_M2L( ID, Nom, Année, Détails, Type, Appartenace)
VALUES(1, 'PC 1 – Unité centrale' ,2016,'','PC','')
VALUES(2, 'PC 2 – Unité centrale' ,2017,'','PC','')
VALUES(3, 'PC 3 – Portable' ,2015,'	Inspiron 15-3558','PC','')
VALUES(4, 'Écran A' ,2012,'HP LA1951g – 19’’ – 1280×1024 – 60 Hz','Ecran','')
VALUES(5, 'Écran B	' ,2010,'Dell E178FP – 17’’ – 1280×1024','Ecran','')
VALUES(6, 'Écran C' ,2009,'Samsung 933SN – 18.5’’ – 1366×768','Ecran','')
VALUES(10, 'CPU PC1' ,2016,'Intel Core i3-6100','CPU','PC 1 – Unité centrale')
VALUES(11, 'RAM PC1' ,2016,'4 Go DDR4 (1×4 Go)','RAM','PC 1 – Unité centrale')
VALUES(12, 'Disque PC1' ,2016,'HDD Seagate 500 Go','Disque','PC 1 – Unité centrale')
VALUES(13, 'GPU PC1' ,2016,'Intel HD 530','GPU','PC 1 – Unité centrale')
VALUES(14, 'Carte réseau PC1' ,2016,'1 Gbps','Carte réseau','PC 1 – Unité centrale')
VALUES(15, 'OS PC1' ,2016,'Windows 10 Pro','OS','PC 1 – Unité centrale')
VALUES(20, 'CPU PC2' ,2017,'Intel Core i5-7500','CPU','PC 2 – Unité centrale')
VALUES(21, 'RAM PC2' ,2017,'8 Go DDR4 (2×4 Go)','RAM','PC 2 – Unité centrale')
VALUES(22, 'Disque PC2' ,2017,'SSD A400 240 Go','Disque','PC 2 – Unité centrale')
VALUES(23, 'GPU PC2' ,2017,'Intel HD 630','GPU','PC 2 – Unité centrale')
VALUES(24, 'Carte réseau PC2' ,2017,'1 Gbps','Carte réseau','PC 2 – Unité centrale')
VALUES(25, 'OS PC2' ,2017,'Pas d’OS','OS','PC 2 – Unité centrale')
VALUES(30, 'CPU PC3' ,2015,'Intel Core i3-5005U','CPU','PC 3 – Portable')
VALUES(31, 'RAM PC3' ,2016,'4 Go DDR3L','RAM','PC 3 – Portable')
VALUES(32, 'Disque PC3' ,2015,'HDD WD Blue 500 Go','Disque','PC 3 – Portable')
VALUES(33, 'Batterie PC3' ,2016,'usée (≈ 40 min)','Batterie','PC 3 – Portable')
VALUES(34, 'OS PC3' ,2015,'Windows 10 Pro','OS','PC 3 – Portable')

