CREATE OR REPLACE VIEW v_besoins 
AS
SELECT
    b.id AS id_besoin,
    b.id_materiel,
    m.nom_materiel,
    m.unite_materiel,
    b.quantite_materiel,
    b.id_user,
    u.email_user,
    u.id_departement,
    d.nom_departement,
    b.resolu
FROM 
    besoins b
JOIN
    materiels m ON b.id_materiel = m.id
JOIN
    users u ON b.id_user = u.id
JOIN
    departements d ON u.id_departement = d.id;


CREATE OR REPLACE VIEW v_besoins_grouped
AS 
SELECT 
    id_besoin,
    id_materiel,
    nom_materiel,
    unite_materiel,
    SUM(quantite_materiel) AS total_quantite,
    resolu
FROM
    v_besoins
GROUP BY
    id_materiel, nom_materiel, unite_materiel, id_besoin, resolu;
