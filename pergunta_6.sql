/** Questão a */
SELECT `nome_estado` FROM `estado` WHERE `nome_estado` = "Paraná";

/** Questão b */
SELECT e.`nome_estado`, p.`nome_pais` FROM `estado` e INNER JOIN `pais` p ON e.`id_pais` = p.`id`;

/** Qestão c */
ALTER TABLE `pais` ADD COLUMN `sigla` VARCHAR(2);

/** Qestão d */
CREATE TABLE `cidade` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `nome_cidade` VARCHAR(255) NOT NULL,
  `id_estado` INT NOT NULL,
  PRIMARY KEY (`id`),
  INDEX `id_estado_idx` (`id_estado` ASC) VISIBLE,
  CONSTRAINT `id_estado`
    FOREIGN KEY (`id_estado`)
    REFERENCES `estado` (`id`)
);