CREATE DATABASE si;

\c si;

CREATE TABLE departements(
    id SERIAL PRIMARY KEY,
    nom_departement VARCHAR(255) UNIQUE NOT NULL
);

CREATE TABLE users(
    id SERIAL PRIMARY KEY,
    email_user VARCHAR(100) UNIQUE NOT NULL,
    password_user VARCHAR(200) NOT NULL,
    id_departement INTEGER NOT NULL
);
ALTER TABLE users ADD CONSTRAINT fk_user_departement FOREIGN KEY(id_departement) REFERENCES departements(id);

------- insertion 
INSERT INTO departements (nom_departement) VALUES ('RH');
INSERT INTO departements (nom_departement) VALUES ('Achat'); 
INSERT INTO departements (nom_departement) VALUES ('DG');  
INSERT INTO departements (nom_departement) VALUES ('Informatique');  
INSERT INTO departements (nom_departement) VALUES ('Marketing'); 

INSERT INTO users (email_user, password_user, id_departement) VALUES ('rh@app.work', 'rh', 1);       -- ID 1 pour le département RH
INSERT INTO users (email_user, password_user, id_departement) VALUES ('achat@app.work', 'achat', 2);  -- ID 2 pour le département Achat
INSERT INTO users (email_user, password_user, id_departement) VALUES ('dg@app.work', 'dg', 3);        -- ID 3 pour le département DG
INSERT INTO users (email_user, password_user, id_departement) VALUES ('informatique@app.work', 'informatique', 4); -- ID 4 pour le département Informatique
INSERT INTO users (email_user, password_user, id_departement) VALUES ('marketing@app.work', 'marketing', 5);       -- ID 5 pour le département Marketing
------- insertion

CREATE TABLE materiels(
    id SERIAL PRIMARY KEY,
    nom_materiel VARCHAR(255) UNIQUE NOT NULL,
    unite_materiel VARCHAR(50) NOT NULL
);

CREATE TABLE besoins(
    id SERIAL PRIMARY KEY,
    id_materiel INTEGER,
    quantite_materiel INTEGER,
    id_user INTEGER,
    resolu BOOLEAN DEFAULT FALSE
);
ALTER TABLE besoins ADD CONSTRAINT fk_besoin_materiel FOREIGN KEY(id_materiel) REFERENCES materiels(id);
ALTER TABLE besoins ADD CONSTRAINT fk_besoin_user FOREIGN KEY(id_user) REFERENCES users(id);

------- insertion
INSERT INTO materiels (nom_materiel, unite_materiel) VALUES ('Ordinateur Portable', 'unités');
INSERT INTO materiels (nom_materiel, unite_materiel) VALUES ('Imprimante', 'unités');
INSERT INTO materiels (nom_materiel, unite_materiel) VALUES ('Scanner', 'unités');
INSERT INTO materiels (nom_materiel, unite_materiel) VALUES ('Projecteur', 'unités');
------- insertion