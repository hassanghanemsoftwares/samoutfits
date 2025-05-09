ALTER TABLE `accounts` CHANGE `address` `country` VARCHAR(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL;
ALTER TABLE `accounts` ADD `city` VARCHAR(255) NOT NULL AFTER `country`, ADD `place` VARCHAR(255) NOT NULL AFTER `city`, ADD `street` VARCHAR(255) NOT NULL AFTER `place`, ADD `building` VARCHAR(255) NULL AFTER `street`, ADD `floor` VARCHAR(255) NULL AFTER `building`;
ALTER TABLE `accounts` CHANGE `country` `country` VARCHAR(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL;
ALTER TABLE `accounts` ADD `phone2` VARCHAR(255) NULL DEFAULT NULL AFTER `phone`;