SELECT `book`.`title`, `author`.`first_name`, `author`.`last_name` FROM `book`
JOIN `book_author` ON `book`.`id_book` = `book_author`.`id_book`
JOIN `author` ON `author`.`id_author` = `book_author`.`id_author`

JOIN `book_genre` ON `book`.`id_book` = `book_genre`.`id_book`
JOIN `genre` ON `book_genre`.`id_genre` = `genre`.`id_genre` WHERE `genre`.`name`='Фантастика'