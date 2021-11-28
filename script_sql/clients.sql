-- Il est nécéssaire de créer la base de données "projet_yael" et ensuite executer les requêtes ci-dessous.


-- 1ère étape, création de la table client.

CREATE TABLE `client`
(
    `id`              bigint(20) NOT NULL AUTO_INCREMENT,
    `ClientNom`       varchar(25) CHARACTER SET utf8 COLLATE utf8_unicode_ci  NOT NULL,
    `ClientPrenom`    varchar(25) CHARACTER SET utf8 COLLATE utf8_unicode_ci  NOT NULL,
    `ClientRue`       varchar(250) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
    `clientCP`        varchar(5)                                              NOT NULL,
    `ClientVille`     varchar(250) DEFAULT NULL,
    `ClientTelephone` varchar(10)                                             NOT NULL,
    `ClientMail`      varchar(250) DEFAULT NULL,
    PRIMARY KEY (id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- 2ème étape, insertion des données dans la table client.

INSERT INTO `client` (`ClientNom`, `ClientPrenom`, `ClientRue`, `clientCP`, `ClientVille`, `ClientTelephone`,
                      `ClientMail`)
VALUES ('Michel', 'Martin', '13 chemin des Chassagnes', '69600', 'Paris', '07-04-32-8', 'm.martin@gmail.com'),
       ('Axel', 'Bernard', '151 Grande Rue', '69600', 'Marseille', '07-05-33-8', 'a.bernard@gmail.com'),
       ('Arthur', 'Thomas', '127 Rue Stephane Dechamp', '69600', 'Lyon', '07-06-33-8', 'a.thomas@gmail.com'),
       ('Enzo', 'Petit', '13 chemin des Chassagnes', '69600', 'Toulouse', '07-04-32-8', 'e.petit@gmail.com'),
       ('Albert', 'Robert', '151 Grande Rue', '69600', 'Nice', '07-05-33-8', 'a.robert@gmail.com'),
       ('Fred', 'Richard', '127 Rue Stephane Dechamp', '69600', 'Nantes', '07-06-33-8', 'f.richard@gmail.com'),
       ('Simon', 'Durand', '13 chemin des Chassagnes', '69600', 'Montpellier', '07-04-32-8', 's.durand@gmail.com'),
       ('Mathieu', 'Dubois', '151 Grande Rue', '69600', 'Strasbourg', '07-05-33-8', 'm.dubois@gmail.com'),
       ('Kyllian', 'SCHMITT', '127 Rue Stephane Dechamp', '69600', 'Bordeaux', '07-06-33-8', 'k.schmitt@gmail.com'),
       ('Julien', 'ROY', '13 chemin des Chassagnes', '69600', 'Lille', '07-04-32-8', 'j.roy@gmail.com'),
       ('Clement', 'LEROUX', '151 Grande Rue', '69600', 'Rennes', '07-05-33-8', 'c.leroux@gmail.com'),
       ('Yael', 'COLIN', '127 Rue Stephane Dechamp', '69600', 'Reims', '07-06-33-8', 'y.colin@gmail.com'),
       ('Amaury', 'VIDAL', '13 chemin des Chassagnes', '69600', 'Toulon', '07-04-32-8', 'a.vidal@gmail.com'),
       ('Maori', 'CARON', '151 Grande Rue', '69600', 'Saint-Etienne', '07-05-33-8', 'm.caron@gmail.com'),
       ('Abed', 'PICARD', '127 Rue Stephane Dechamp', '69600', 'Le Havre', '07-06-33-8', 'a.picard@gmail.com'),
       ('Mohamed', 'FABRE', '13 chemin des Chassagnes', '69600', 'Grenoble', '07-04-32-8', 'm.fabre@gmail.com'),
       ('Calixte', 'AUBERT', '151 Grande Rue', '69600', 'Dijon', '07-05-33-8', 'c.aubert@gmail.com'),
       ('Corentin', 'DUMAS', '127 Rue Stephane Dechamp', '69600', 'Angers', '07-06-33-8', 'c.dumas@gmail.com'),
       ('Valentin', 'LACROIX', '13 chemin des Chassagnes', '69600', 'Abère', '07-04-32-8', 'v.lacroix@gmail.com'),
       ('Matéo', 'OLIVIER', '151 Grande Rue', '69600', 'Abos', '07-05-33-8', 'm.olivier@gmail.com'),
       ('Anthony', 'PHILIPPE', '127 Rue Stephane Dechamp', '69600', 'Ablon', '07-06-33-8', 'a.philipe@gmail.com');


-- 3ème étape, création de la table compte lié à la table client.
-- Un compte est rélié à un client et un seul. Si un client est supprimé, le compte sera supprimé aussi.

CREATE TABLE `compte`
(
    `id`          bigint(20) NOT NULL AUTO_INCREMENT,
    `CompteNum`   int(5) NOT NULL,
    `CompteSolde` double(10, 2) NOT NULL,
  `ClientId` bigint(20)  DEFAULT NULL,
  PRIMARY KEY (id),
  FOREIGN KEY (ClientId) REFERENCES client(id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- 4ème étape, ajout de la contrainte pour le delete en cascade.

ALTER TABLE `compte`
    ADD CONSTRAINT `ClientId` FOREIGN KEY (`ClientId`) REFERENCES `client` (`id`) ON DELETE CASCADE;

-- 5ème étape, insertion des données dans la table compte.

INSERT INTO `compte` (`CompteNum`, `CompteSolde`, `ClientId`)
VALUES (51122, 700.00, 1),
       (52233, 500.00, 2),
       (52763, 600.00, 3),
       (55253, 200.00, 4),
       (55255, 200.00, 5),
       (55258, 200.00, 6),
       (55245, 200.00, 7),
       (52768, 600.00, 8),
       (55101, 200.00, 9),
       (55296, 200.00, 10),
       (55264, 200.00, 11),
       (55212, 200.00, 12),
       (55213, 200.00, 13),
       (55255, 200.00, 14),
       (55261, 200.00, 15),
       (55269, 200.00, 16),
       (55215, 200.00, 17),
       (55226, 200.00, 18);
