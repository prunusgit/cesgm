DROP DATABASE IF EXISTS bdentreprise;

CREATE DATABASE IF NOT EXISTS bdentreprise;

USE bdentreprise;

CREATE TABLE Entrepreneur ( IdEntrepreneur INT(5) NOT NULL AUTO_INCREMENT, 
							NomEntrepreneur VARCHAR(20) NOT NULL,
							PrenomEntrepreneur VARCHAR(20) NOT NULL,
							Username VARCHAR(10) NOT NULL,
							Password VARCHAR(10) NOT NULL,
							PRIMARY KEY (IdEntrepreneur)
						  ) ENGINE = InnoDB AUTO_INCREMENT = 10;
						  
INSERT INTO Entrepreneur (NomEntrepreneur, PrenomEntrepreneur, Username, Password) 
VALUES ('Entrepreneur1', 'Prenom1', 'agent1', '12345'),
	   ('Entrepreneur2', 'Prenom2', 'agent2', '12345');
	   
	   
CREATE TABLE TachesEntrepreneur ( IdTache INT(10) NOT NULL AUTO_INCREMENT,
								  IdEntrepreneur INT(10) NOT NULL,							  
								  Taches VARCHAR(5000) DEFAULT NULL,
								  PRIMARY KEY (IdTache, IdEntrepreneur),
								  CONSTRAINT fk_taches_entrepreneur FOREIGN KEY (IdEntrepreneur) REFERENCES Entrepreneur(IdEntrepreneur)
								) ENGINE = InnoDB AUTO_INCREMENT = 1;
INSERT INTO TachesEntrepreneur (IdEntrepreneur, Taches)
VALUES (11, "Pas grand choses, juste passer quelques appels"),
	   (10, "Toi aussi tu n'a pas grand choses à faire");
						  
					
CREATE TABLE Client ( IdClient INT(10) NOT NULL AUTO_INCREMENT,
					  IdEntrepreneur INT(5) NOT NULL,
					  NomClient VARCHAR(20) NOT NULL,
					  PrenomClient VARCHAR(20) NOT NULL,
					  NomEntreprise VARCHAR(20) NOT NULL,
					  Contact VARCHAR(20) NOT NULL,
					  Adresse VARCHAR(50) NOT NULL,
					  Ville VARCHAR(20) NOT NULL,
					  Province VARCHAR(20) NOT NULL,
					  CodePostal VARCHAR(7) NOT NULL,
					  Email VARCHAR(20) DEFAULT NULL,
					  Statut TINYINT(1) DEFAULT 0,
					  PRIMARY KEY (IdClient, NomClient),
					  CONSTRAINT fk_client_entrepreneur FOREIGN KEY (IdEntrepreneur) REFERENCES Entrepreneur(IdEntrepreneur)
) ENGINE = InnoDB AUTO_INCREMENT = 1; 

INSERT INTO Client (IdEntrepreneur, NomClient, PrenomClient, NomEntreprise, Contact, Adresse, Ville, Province, CodePostal, Email, Statut) 
VALUES (10, 'Monpremier', 'Client1', 'Personelle', 'Aucun', '1010 des Champs', 'Montréal', 'Quebec', 'H0H0H0', NULL, 0),
	   (10, 'Mondeuxieme', 'Client2', 'Personelle', 'Aucun', '2020 des Champs', 'Montréal', 'Quebec', 'H0H0H0', NULL, 0),
	   (11, 'Montroisieme', 'Client3', 'Personelle', 'Aucun', '3030 de la ville', 'Montréal', 'Quebec', 'H0H0H0', NULL, 0),
	   (11, 'Monquatrieme', 'Client4', 'Personelle', 'Aucun', '4040 de la campagne', 'Montréal', 'Quebec', 'H0H0H0', NULL, 0);
	

CREATE TABLE NotesdesClients ( IdNote INT(10) NOT NULL AUTO_INCREMENT,
							  IdClient INT(10) NOT NULL,							  
							  Clauses VARCHAR(5000) DEFAULT NULL,
							  PRIMARY KEY (IdNote, IdClient),
							  CONSTRAINT fk_notes_client FOREIGN KEY (IdClient) REFERENCES Client(IdClient)
							) ENGINE = InnoDB AUTO_INCREMENT = 1;

	
CREATE TABLE ContratEtDevis ( IdContrat INT(10) NOT NULL AUTO_INCREMENT,
							  IdEntrepreneur INT(5) NOT NULL,
							  IdClient INT(10) NOT NULL,							  
							  Clauses VARCHAR(5000) DEFAULT NULL,
							  PRIMARY KEY (IdContrat, IdEntrepreneur, IdClient),
							  CONSTRAINT fk_contrat_client FOREIGN KEY (IdClient) REFERENCES Client(IdClient),
							  CONSTRAINT fk_contrat_entrepreneur FOREIGN KEY (IdEntrepreneur) REFERENCES Entrepreneur(IdEntrepreneur),
							) ENGINE = InnoDB AUTO_INCREMENT = 1;

INSERT INTO ContratEtDevis (IdEntrepreneur, IdClient, Clauses) 
VALUES (11, 3, NULL),
	   (10, 1, NULL),
	   (11, 4, NULL),
	   (10, 2, NULL);
