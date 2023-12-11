SELECT *
FROM etudiants
WHERE YEAR (naissance) + 18 < YEAR (CAST(NOW() AS DATE))