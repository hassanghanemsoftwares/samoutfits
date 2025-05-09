ALTER TABLE `items` 
ADD `gender` VARCHAR(50) NULL AFTER `qty`, 
ADD `color` VARCHAR(50) NULL AFTER `gender`, 
ADD `note` VARCHAR(255) NULL AFTER `color`, 
ADD `publish` INT NULL AFTER `note`;

CREATE TABLE `tags` ( 
    `id` INT UNSIGNED NOT NULL AUTO_INCREMENT , 
    `tag` VARCHAR(255) NOT NULL , PRIMARY KEY (`id`)) 
    ENGINE = InnoDB CHARSET=utf8 COLLATE utf8_general_ci;

CREATE TABLE 
`item_tags` (
  `id` INT UNSIGNED NOT NULL AUTO_INCREMENT , 
`item_id` INT UNSIGNED NOT NULL , 
`tag_id` INT UNSIGNED NOT NULL , PRIMARY KEY (`id`)) 
ENGINE = InnoDB CHARSET=utf8 COLLATE utf8_general_ci;