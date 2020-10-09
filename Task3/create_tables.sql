CREATE TABLE `publishing_house`.`author` ( 
	`id_author` INT UNSIGNED NOT NULL AUTO_INCREMENT , 
	`first_name` VARCHAR(255) NOT NULL , 
	`last_name` VARCHAR(255) NOT NULL , 
	PRIMARY KEY (`id_author`));


CREATE TABLE `publishing_house`.`book` ( 
	`id_book` INT UNSIGNED NOT NULL AUTO_INCREMENT ,
	`ISBN` VARCHAR(20) NOT NULL,	
	`title` VARCHAR(255) NOT NULL , 
	`number_of_pages` INT(5) NOT NULL , 
	`publication_date` INT(20) NOT NULL , 
	PRIMARY KEY (`id_book`));


CREATE TABLE `publishing_house`.`genre` ( 
	`id_genre` INT UNSIGNED NOT NULL AUTO_INCREMENT , 
	`name` VARCHAR(100) NOT NULL , 
	PRIMARY KEY (`id_genre`));

CREATE TABLE `publishing_house`.`book_author` ( 
	`id_book` INT UNSIGNED NOT NULL , 
	`id_author` INT UNSIGNED NOT NULL , 
	PRIMARY KEY (`id_book`, `id_author`));

CREATE TABLE `publishing_house`.`book_genre` ( 
	`id_book` INT UNSIGNED NOT NULL , 
	`id_genre` INT UNSIGNED NOT NULL , 
	PRIMARY KEY (`id_book`, `id_genre`));

ALTER TABLE `book_author` ADD CONSTRAINT FKbook_author FOREIGN KEY (`id_book`) REFERENCES `book`(`id_book`) ON DELETE CASCADE ON UPDATE CASCADE;
ALTER TABLE `book_author` ADD CONSTRAINT FKauthor_book FOREIGN KEY (`id_author`) REFERENCES `author`(`id_author`) ON DELETE CASCADE ON UPDATE CASCADE;

ALTER TABLE `book_genre` ADD CONSTRAINT FKbook_genre FOREIGN KEY (`id_book`) REFERENCES `book`(`id_book`) ON DELETE CASCADE ON UPDATE CASCADE;
ALTER TABLE `book_genre` ADD CONSTRAINT FKgenre_book FOREIGN KEY (`id_genre`) REFERENCES `genre`(`id_genre`) ON DELETE CASCADE ON UPDATE CASCADE;