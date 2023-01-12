/* une requête permettant de récupérer le nom des salles et le nom de leur étage */
SELECT `salles`.`nom`, `etage`.`nom` FROM `salles` INNER JOIN `etage` ON `salles` . `id_etage` = `etage`.`id`; 
