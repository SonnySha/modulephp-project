-- Récupération de toutes les données de cities
SELECT * FROM cities;
-- Suppression de toutes les données de cities
TRUNCATE TABLE cities;
-- Insertion dans cities de toutes les données de villes_france_free,
-- triées par ordre alphabétique croissant du nom
INSERT INTO cities(nom, code_pays)
(
	SELECT villes_france, 'FR' 
	FROM villes_france
	ORDER BY ville_nom_reel ASC
);