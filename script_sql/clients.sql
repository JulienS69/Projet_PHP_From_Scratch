
CREATE TABLE `client` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `ClientNom` varchar(25) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `ClientPrenom` varchar(25) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `ClientRue` varchar(250) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `clientCP` varchar(5) NOT NULL,
  `ClientVille` varchar(250) DEFAULT NULL,
  `ClientTelephone` varchar(10) NOT NULL,
  `ClientMail` varchar(250) NOT NULL,
  PRIMARY KEY (id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;





INSERT INTO `client` (`ClientNom`, `ClientPrenom`, `ClientRue`, `clientCP`, `ClientVille`, `ClientTelephone`, `ClientMail`) VALUES
('Michel', 'Bernard', '13 chemin des Chassagnes', '69600', 'Oullins', '07-04-32-8', 'b.michel@gmail.com'),
('Chelim', 'Bertrand', '151 Grande Rue', '69600', 'Oullins', '07-05-33-8', 'b.Chelim@gmail.com'),
('Mechil', 'Bastien', '127 Rue Stephane Dechamp', '69600', 'Oullins', '07-06-33-8', 'b.Mechil@gmail.com'),
('Enzo', 'Bernard', '13 chemin des Chassagnes', '69600', 'Oullins', '07-04-32-8', 'b.michel@gmail.com'),
('Albert', 'Bertrand', '151 Grande Rue', '69600', 'Oullins', '07-05-33-8', 'b.Chelim@gmail.com'),
('Fred', 'Bastien', '127 Rue Stephane Dechamp', '69600', 'Oullins', '07-06-33-8', 'b.Mechil@gmail.com'),
('Simon', 'Bernard', '13 chemin des Chassagnes', '69600', 'Oullins', '07-04-32-8', 'b.michel@gmail.com'),
('Mathieu', 'Bertrand', '151 Grande Rue', '69600', 'Oullins', '07-05-33-8', 'b.Chelim@gmail.com'),
('Kyllian', 'Bastien', '127 Rue Stephane Dechamp', '69600', 'Oullins', '07-06-33-8', 'b.Mechil@gmail.com'),
('Julien', 'Bernard', '13 chemin des Chassagnes', '69600', 'Oullins', '07-04-32-8', 'b.michel@gmail.com'),
('Chelim', 'Bertrand', '151 Grande Rue', '69600', 'Oullins', '07-05-33-8', 'b.Chelim@gmail.com'),
('Mechil', 'Bastien', '127 Rue Stephane Dechamp', '69600', 'Oullins', '07-06-33-8', 'b.Mechil@gmail.com'),
('Michel', 'Bernard', '13 chemin des Chassagnes', '69600', 'Oullins', '07-04-32-8', 'b.michel@gmail.com'),
('Chelim', 'Bertrand', '151 Grande Rue', '69600', 'Oullins', '07-05-33-8', 'b.Chelim@gmail.com'),
('Mechil', 'Bastien', '127 Rue Stephane Dechamp', '69600', 'Oullins', '07-06-33-8', 'b.Mechil@gmail.com'),
('Michel', 'Bernard', '13 chemin des Chassagnes', '69600', 'Oullins', '07-04-32-8', 'b.michel@gmail.com'),
('Chelim', 'Bertrand', '151 Grande Rue', '69600', 'Oullins', '07-05-33-8', 'b.Chelim@gmail.com'),
('Mechil', 'Bastien', '127 Rue Stephane Dechamp', '69600', 'Oullins', '07-06-33-8', 'b.Mechil@gmail.com'),
('Michel', 'Bernard', '13 chemin des Chassagnes', '69600', 'Oullins', '07-04-32-8', 'b.michel@gmail.com'),
('Chelim', 'Bertrand', '151 Grande Rue', '69600', 'Oullins', '07-05-33-8', 'b.Chelim@gmail.com'),
('Mechil', 'Bastien', '127 Rue Stephane Dechamp', '69600', 'Oullins', '07-06-33-8', 'b.Mechil@gmail.com');
