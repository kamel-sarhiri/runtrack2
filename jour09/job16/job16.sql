/* récupérer le nom de l'étage ayant la salle avec la plus grande capacité (et afficher aussi le nom de cette salle
ainsi que sa capacité).
Dans ce résultat, la colonne “nom” de la salle doit être renommée en “Biggest Room” */
SELECT `salles`.`nom` AS 'Biggest Room', `salles`.`capacite`, `etage`.`nom` AS 'Nom étage' FROM `salles` INNER JOIN `etage` ON `salles` . `id_etage` = `etage`.`id` WHERE `capacite` = (SELECT MAX(`capacite`) FROM `salles`);