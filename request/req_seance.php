<?php
$request_seance = "
SELECT NomSeance, Difficulte, Jour, Heure_Debut, Heure_Fin, l.NumSalle, Adresse, Ville, CodePostale, NomSport
FROM lieu l
INNER JOIN seance se ON l.NumSalle = se.NumSalle
INNER JOIN sport sp ON sp.ID_sport = se.ID_sport;
";
?>