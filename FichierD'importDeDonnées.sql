
SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


INSERT INTO `centers` (`ID`, `Label`) VALUES
(1, 'Aix'),
(2, 'Alger'),
(3, 'Arras'),
(4, 'Bordeaux'),
(5, 'Lille'),
(6, 'Lyon'),
(7, 'Nancy'),
(8, 'St-Nazzaire'),
(9, 'Nice'),
(10, 'Orleans'),
(11, 'Paris'),
(12, 'Pau'),
(13, 'Reims'),
(14, 'La Rochelle'),
(15, 'Rouen'),
(16, 'Strasbourg'),
(17, 'Toulouse');

INSERT INTO `orderstypes` (`ID`, `Label`) VALUES
(1, 'En cours'),
(2, 'Commandé'),
(3, 'Finalisé');


INSERT INTO `periodicity` (`ID`, `Label`) VALUES
(1, 'quotidien'),
(2, 'hebdomadaire'),
(3, 'mensuel'),
(4, 'annuel'),
(5, 'occasionnel ');


INSERT INTO `productstypes` (`ID`, `Label`) VALUES
(1, 'nourriture'),
(2, 'goodies'),
(3, 'vetements');


INSERT INTO `usersstatus` (`ID`, `Label`) VALUES
(1, 'etudiant'),
(2, 'membre'),
(3, 'salarie');

INSERT INTO `users` (`ID`, `First_Name`, `Last_Name`, `EMail`, `Password`, `ID_Centers`, `ID_UsersStatus`) VALUES
(1, 'test', 'test', 'test@test.com', 'test', 1, 1),
(2, 'test2', 'test2', 'test2@test.com', 'test', 10, 2),
(3, 'test3', 'test3', 'test3@test.com', 'test', 4, 3),
(4, 'test4', 'test4', 'test4@test.com', 'test', 10, 1);


INSERT INTO `products` (`ID`, `Label`, `Price`, `Description`, `image_url`, `Quantity`, `ID_ProductsTypes`) VALUES
(1, 'Kinder', 2.00, 'Kinder Bueno vraiment très bueno', 'https://image.migros.ch/product-zoom/cbb5be41cf444d96b04ebfecff3722c1c8833634/kinder-bueno.jpg', 45, 1),
(2, 'Twix', 1.50, 'Seulement le twix gauche', 'https://image.migros.ch/product-zoom/ade53bab9e08641a486044cba7d5c73f7b71c244/twix.jpg', 32, 1),
(3, 'Chips', 1.00, 'Paquet de chips avec 90% d\'air', 'https://static.meijer.com/Media/000/28400/0002840019914_2000.png', 12, 1),
(4, 'Tee-shirt', 15.99, 'Le tee-shit officiel du BDE', 'http://bdecesibordeaux.fr/img/blockslideshow/8.jpg', 56, 3),
(5, 'Casquette', 12.99, 'Inspiree des casquettes de Maitre Gims', 'https://www.destock-sport-et-mode.com/media/catalog/product/cache/1/image/9df78eab33525d08d6e5fb8d27136e95/0/1/01-wati-b-speckle-sb-black-gold_3.jpg', 22, 3),
(6, 'Gants', 19.50, 'Gants avec des bouts tactiles, pour être un vrai geek !', 'https://ol-boutique-cdn-1.azureedge.net/19032-large_default/gants-tactiles-marines.jpg', 9, 3),
(7, 'Mug', 9.99, 'Pour tenir le coup lors du projet Web', 'https://image.spreadshirtmedia.net/image-server/v1/products/10530753/views/1,width=650,height=650,appearanceId=1,version=1320836285.jpg', 999, 2),
(8, 'hand-spinner', 999.00, 'Un hand-spinner en or massif', 'https://wegoboard.com/898-thickbox_default/hand-spinner-delta-or.jpg', 2, 2);



INSERT INTO `manifestations` (`ID`, `Label`, `Price`, `Description`, `Date`, `Image_Url`, `ID_Periodicity`, `ID_Users`, `ID_Locations`) VALUES
(1, 'Bal', 0.00, 'Bal d\'hiver', '2019-01-25 21:00:00', 'https://demo.phpgang.com/crop-images/demo_files/pool.jpg', 4, 2, NULL),
(2, 'Visite ', 5.00, 'Visite de Bordeaux en bus', '2019-04-29 11:00:00', 'https://upload.wikimedia.org/wikipedia/commons/thumb/d/d6/Place_de_la_Bourse%2C_Bordeaux%2C_France.jpg/1200px-Place_de_la_Bourse%2C_Bordeaux%2C_France.jpg', 5, 3, NULL);

INSERT INTO `suggestions` (`ID`, `Label`, `Description`, `Date`, `Image_Url`, `ID_Users`) VALUES
(1, 'Soiree casa', 'Faire une soirée d\'intégration avec toutes les promos', '2019-02-15 19:00:00', 'http://www.feestdjdannym.nl/images/night-party-club-background-orange1.jpg', 2),
(2, 'Soccer', 'Une partie de football en salle', '2019-04-17 17:00:00', 'https://www.capebretonpost.com/media/photologue/photos/cache/ThinkstockPhotos-hi-res-soccer-ball-by-net_large.jpg', 3);


INSERT INTO `images` (`id`, `image_url`, `id_manifestations`, `id_users`) VALUES 
(1, 'https://demo.phpgang.com/crop-images/demo_files/pool.jpg', '1', '2'), 
(2, 'https://demo.phpgang.com/crop-images/demo_files/pool.jpg', '1', '4'), 
(3, 'https://demo.phpgang.com/crop-images/demo_files/pool.jpg', '2', '2'), 
(4, 'https://demo.phpgang.com/crop-images/demo_files/pool.jpg', '2', '4');

INSERT INTO `comments` (`id`, `description`, `id_users`, `id_images`) VALUES 
(1, 'Tres belle photo !!', '1', '1'), 
(2, 'Oh magnifique !!!!!!', '3', '2'), 
(3, 'J\'aime moins', '2', '2'), 
(4, 'O.O j\'adore', '2', '3');

INSERT INTO `userscommentsreport` (`id`, `id_comments`, `id_users`) VALUES 
(NULL, '3', '2'), 
(NULL, '4', '4'), 
(NULL, '2', '2'), 
(NULL, '4', '3');

INSERT INTO `usersmanifestationsreport` (`id`, `id_users`, `id_manifestations`) VALUES 
(NULL, '1', '1'), 
(NULL, '3', '2'), 
(NULL, '4', '1'), 
(NULL, '2', '1');

INSERT INTO `usersimagesreport` (`id`, `id_users`, `id_images`) VALUES (NULL, '2', '1'), (NULL, '4', '2'), (NULL, '4', '4'), (NULL, '2', '1');



COMMIT;