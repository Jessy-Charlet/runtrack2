SELECT etage.nom, salles.nom AS 'Biggest Room', capacite
FROM salles
INNER JOIN etage ON salles.id_etage = etage.id
ORDER BY capacite DESC
LIMIT 1
