ALTER TABLE `user_permissions` CHANGE `id` `id` INT(11) UNSIGNED NOT NULL AUTO_INCREMENT;
ALTER TABLE `user_permissions` CHANGE `user_type` `user_id` INT(10) UNSIGNED NOT NULL;
ALTER TABLE `user_permissions` ADD CONSTRAINT `user_id_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users`(`id`) ON DELETE CASCADE ON UPDATE CASCADE;