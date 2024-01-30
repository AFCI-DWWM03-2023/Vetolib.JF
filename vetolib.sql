DROP TABLE IF EXISTS Utilisateur;

CREATE TABLE Utilisateur (
    idUtilisateur INT AUTO_INCREMENT NOT NULL,
    nomUtilisateur VARCHAR(50),
    prenomUtilisateur VARCHAR(50),
    emailUtilisateur VARCHAR(50),
    mdpUtilisateur VARCHAR(70),
    idRole INT NOT NULL,
    PRIMARY KEY (idUtilisateur)
) ENGINE = InnoDB;

DROP TABLE IF EXISTS Veterinaire;

CREATE TABLE Veterinaire (
    idVeterinaire INT AUTO_INCREMENT NOT NULL,
    nomVeterinaire VARCHAR(50),
    prenomVeterinaire VARCHAR(50),
    departement VARCHAR(50),
    ville VARCHAR(50),
    emailVeterinaire VARCHAR(50),
    mdpVeterinaire VARCHAR(50),
    telephone VARCHAR(50),
    idRole INT NOT NULL,
    PRIMARY KEY (idVeterinaire)
) ENGINE = InnoDB;


DROP TABLE IF EXISTS Rendezvous ; 

CREATE TABLE Rendezvous 
(idRendezvous INT  AUTO_INCREMENT NOT NULL, 
date VARCHAR(50), 
heureDebut VARCHAR(50), 
heureFin VARCHAR(50), 
idVeterinaire INT NOT NULL, 
idUtilisateur INT NOT NULL, 
idAnimal INT NOT NULL, 
PRIMARY KEY (idRendezvous) 

) ENGINE=InnoDB;

DROP TABLE IF EXISTS Animal;

CREATE TABLE Animal (
    idAnimal INT AUTO_INCREMENT NOT NULL,
    nomAnimal VARCHAR(50),
    race VARCHAR(50),
    poid VARCHAR(50),
    âge VARCHAR(50),
    PRIMARY KEY (idAnimal)
) ENGINE = InnoDB;

DROP TABLE IF EXISTS Role;

CREATE TABLE Role (
    idRole INT AUTO_INCREMENT NOT NULL,
    role VARCHAR(50),
    PRIMARY KEY (idRole)
) ENGINE = InnoDB;

DROP TABLE IF EXISTS Service;

CREATE TABLE Service (
    idService INT AUTO_INCREMENT NOT NULL,
    couper_les_ongles BOOL,
    soindentaire BOOL,
    consultation_de_routine BOOL,
    vaccinations BOOL,
    PRIMARY KEY (idService)
) ENGINE = InnoDB;

DROP TABLE IF EXISTS Specialite;

CREATE TABLE Specialite (
    idSpecialite INT AUTO_INCREMENT NOT NULL,
    toiletteur BOOL,
    chirurgien BOOL,
    PRIMARY KEY (idSpecialite)
) ENGINE = InnoDB;

DROP TABLE IF EXISTS Administrateur;

CREATE TABLE Administrateur (
    idAdministrateur INT AUTO_INCREMENT NOT NULL,
    PRIMARY KEY (idAdministrateur)
) ENGINE = InnoDB;


DROP TABLE IF EXISTS Rechercher;

CREATE TABLE Rechercher (
    idUtilisateur INT AUTO_INCREMENT NOT NULL,
    idVeterinaire INT NOT NULL,
    PRIMARY KEY (idUtilisateur, idVeterinaire)
) ENGINE = InnoDB;

DROP TABLE IF EXISTS Proposer;

CREATE TABLE Proposer (
    idSpecialite INT AUTO_INCREMENT NOT NULL,
    idService INT NOT NULL,
    PRIMARY KEY (idSpecialite, idService)
) ENGINE = InnoDB;

DROP TABLE IF EXISTS Choisir;

CREATE TABLE Choisir (
    idRendezvous INT AUTO_INCREMENT NOT NULL,
    idVeterinaire INT NOT NULL,
    PRIMARY KEY (idRendezvous, idVeterinaire)
) ENGINE = InnoDB;

DROP TABLE IF EXISTS Posséder;

CREATE TABLE Posséder (
    idVeterinaire INT AUTO_INCREMENT NOT NULL,
    idSpecialite INT NOT NULL,
    PRIMARY KEY (idVeterinaire, idSpecialite)
) ENGINE = InnoDB;

DROP TABLE IF EXISTS Avoir;

CREATE TABLE Avoir (
    idVeterinaire INT AUTO_INCREMENT NOT NULL,
    idRole INT NOT NULL,
    idAdministrateur INT NOT NULL,
    idUtilisateur INT NOT NULL,
    PRIMARY KEY (
        idVeterinaire,
        idRole,
        idAdministrateur,
        idUtilisateur
    )
) ENGINE = InnoDB;

ALTER TABLE Rendezvous ADD CONSTRAINT FK_Rendezvous_idVeterinaire FOREIGN KEY (idVeterinaire) REFERENCES Veterinaire (idVeterinaire); 
ALTER TABLE Rendezvous ADD CONSTRAINT FK_Rendezvous_idUtilisateur FOREIGN KEY (idUtilisateur) REFERENCES Utilisateur (idUtilisateur); 
ALTER TABLE Rendezvous ADD CONSTRAINT FK_Rendezvous_idAnimal FOREIGN KEY (idAnimal) REFERENCES Animal (idAnimal); 
ALTER TABLE Rechercher ADD CONSTRAINT FK_Rechercher_idUtilisateur FOREIGN KEY (idUtilisateur) REFERENCES Utilisateur (idUtilisateur); 
ALTER TABLE Rechercher ADD CONSTRAINT FK_Rechercher_idVeterinaire FOREIGN KEY (idVeterinaire) REFERENCES Veterinaire (idVeterinaire); 
ALTER TABLE Proposer ADD CONSTRAINT FK_Proposer_idSpecialite FOREIGN KEY (idSpecialite) REFERENCES Specialite (idSpecialite); 
ALTER TABLE Proposer ADD CONSTRAINT FK_Proposer_idService FOREIGN KEY (idService) REFERENCES Service (idService); 
ALTER TABLE Choisir ADD CONSTRAINT FK_Choisir_idRendezvous FOREIGN KEY (idRendezvous) REFERENCES Rendezvous (idRendezvous); 
ALTER TABLE Choisir ADD CONSTRAINT FK_Choisir_idVeterinaire FOREIGN KEY (idVeterinaire) REFERENCES Veterinaire (idVeterinaire); 
ALTER TABLE Posséder ADD CONSTRAINT FK_Posséder_idVeterinaire FOREIGN KEY (idVeterinaire) REFERENCES Veterinaire (idVeterinaire); 
ALTER TABLE Posséder ADD CONSTRAINT FK_Posséder_idSpecialite FOREIGN KEY (idSpecialite) REFERENCES Specialite (idSpecialite); 
ALTER TABLE Avoir ADD CONSTRAINT FK_Avoir_idVeterinaire FOREIGN KEY (idVeterinaire) REFERENCES Veterinaire (idVeterinaire); 
ALTER TABLE Avoir ADD CONSTRAINT FK_Avoir_idRole FOREIGN KEY (idRole) REFERENCES Role (idRole); 
ALTER TABLE Avoir ADD CONSTRAINT FK_Avoir_idAdministrateur FOREIGN KEY (idAdministrateur) REFERENCES Administrateur (idAdministrateur); 
ALTER TABLE Avoir ADD CONSTRAINT FK_Avoir_idUtilisateur FOREIGN KEY (idUtilisateur) REFERENCES Utilisateur (idUtilisateur);



INSERT INTO Role( idRole, Role)
VALUES
    (1, 'administrateur'),
    (2, 'utilisateur'),
    (3, 'veterinaire');


INSERT INTO Veterinaire (idVeterinaire,nomVeterinaire,prenomVeterinaire,departement,ville,emailVeterinaire,mdpVeterinaire,telephone,idRole)
VALUES
    (1,'Dupont','Robert',59,'Dunkerque','Dupont.rober@example.com','1111','+33000000000',3),
    (2,'Dupont','Roger',59,'Grande-Synthe','Dupont.roger@example.com','2222', '+33000000000', 3),
    (3,'Martin','Lucas', 59,'Dunkerque','martin.lucas@example.com','3333','+33000000000',3),
    (4,'Dupont','Robert',59,'Petite-synthe','Dupont.rober@example.com','4444','+33000000000',3),
    (5,'Lefevre','Sophie',59,'Dunkerque','Lefevre.sophie@example.com','5555','+33000000000',3);


INSERT INTO Utilisateur (idUtilisateur,nomUtilisateur,prenomUtilisateur,emailUtilisateur,mdpUtilisateur,idRole)
VALUES
    (1,'Steel','Max','steel.Max@example.com','1111',2),
    (2,'Storm','Alex','storm.alex@example.com','2222',2),
    (3,'Thompson','Carter ','thompson.carter@example.com','3333',2),
    (4,'Rodriguez','Maya','rodriguez.maya@example.com','4444',2),
    (5,'Salvatore','Damon','salvatore.damonx@example.com','5555',2);

INSERT INTO Animal (idAnimal,nomAnimal,race,poid,âge)
VALUES
    (1,'Eclair','Chien','5kg',2),
    (2,'Ace','Chien','25kg',4),
    (3,'Perle','Chat','20kg',8);


INSERT INTO Rendezvous (idRendezvous,date,heureDebut,heureFin,idVeterinaire,idUtilisateur,idAnimal)
VALUES
    (1, '2024-01-24','14:00', '15:00', 1, 1, 1),
    (2, '2024-01-24','15:30', '16:00', 2, 2, 2);



INSERT INTO Service (idService,couper_les_ongles,soindentaire,consultation_de_routine,vaccinations)
VALUES
    (1, 'Oui', 'Non', 'Oui', 'Oui'),
    (2, 'Oui', 'Oui', 'Oui', 'Oui'),
    (3, 'Oui', 'Non', 'Oui', 'Oui'),
    (4, 'Oui', 'Non', 'Oui', 'Oui'),
    (5, 'Oui', 'Non', 'Oui', 'Oui');

INSERT INTO Specialite (idSpecialite,toiletteur,chirurgien)
VALUES
    (1, 'Oui', 'Non'), 
    (2, 'Non', 'Oui');





