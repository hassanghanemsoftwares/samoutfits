CREATE TABLE `ahmad_accounting`.`sections` (
     `id` INT UNSIGNED NOT NULL AUTO_INCREMENT , 
     `name` VARCHAR(100) NOT NULL , 
     `value` VARCHAR(255) NOT NULL , 
     `type` VARCHAR(20) NULL , 
     PRIMARY KEY (`id`)) ENGINE = InnoDB;