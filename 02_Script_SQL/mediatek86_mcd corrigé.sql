
 CREATE TABLE Service( 
   _idService VARCHAR(50), 
   libelle VARCHAR(100) NOT NULL, 
   PRIMARY KEY(_idService) 
);   
 CREATE TABLE Motif( 
   idMotif VARCHAR(50), 
   libelle VARCHAR(100) NOT NULL,
   PRIMARY KEY(idMotif) 
);   
 CREATE TABLE Responsable( 
   login VARCHAR(64), 
   pwd VARCHAR(64) NOT NULL, 
   PRIMARY KEY(login) 
);   
 CREATE TABLE Personnel( 
   idPersonnel BIGINT, 
   nom VARCHAR(50) NOT NULL, 
   prénom VARCHAR(50) NOT NULL, 
   _idService VARCHAR(50) NOT NULL, 
   PRIMARY KEY(idPersonnel), 
   FOREIGN KEY(_idService) REFERENCES Service(_idService) 
);   
 CREATE TABLE Absence( 
   _idAbsence VARCHAR(50), 
   dateDebut DATE NOT NULL, 
   dateFin DATE NOT NULL, 
   commentaire VARCHAR(255) NOT NULL, 
   login VARCHAR(64), 
   PRIMARY KEY(_idAbsence), 
   FOREIGN KEY(login) REFERENCES Responsable(login) 
);   
 CREATE TABLE est_absent( 
   _idAbsence VARCHAR(50), 
   login VARCHAR(64), 
   PRIMARY KEY(_idAbsence, login), 
   FOREIGN KEY(_idAbsence) REFERENCES Absence(_idAbsence), 
   FOREIGN KEY(login) REFERENCES Responsable(login) 
);   
 CREATE TABLE a_motif( 
   idMotif VARCHAR(50), 
   _idAbsence VARCHAR(50), 
   PRIMARY KEY(idMotif, _idAbsence), 
   FOREIGN KEY(idMotif) REFERENCES Motif(idMotif), 
   FOREIGN KEY(_idAbsence) REFERENCES Absence(_idAbsence) 
);   

