//1 - CREATE DATABASE Commande
//2 - CREATE TABLE `Produit` (Id INT(6) primary key, PNOM VARCHAR(50), COULEUR VARCHAR(50) , POIDS VARCHAR(20) , PRIX Int(5));
//3 - INSERT insert into `Produit` (Id, PNOM , COULEUR , POIDS , PRIX) values  (001,'P1','Red','2kg',50);INSERT insert into `Produit` (Id, PNOM , COULEUR , POIDS , PRIX) values  (002,'P2','Red','8kg',350);INSERT insert into `Produit` (Id, PNOM , COULEUR , POIDS , PRIX) values  (003,'P3','black','20kg',800);
//4 - SELECT * FROM `Produit`
//5 - SELECT * FROM `Produit` where prix > 300 order by prix desc
//6 - SELECT id, COULEUR from Produit where POIDS > 5 order by PRIX desc
//7 - Update Produit set prix = 400 where id = 3
//8 - DROP TABLE Produit