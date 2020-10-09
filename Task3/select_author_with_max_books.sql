SELECT `author`.`first_name`, `author`.`last_name` FROM `author`
JOIN `book_author` ON `book_author`.`id_author`=`author`.`id_author` 
    WHERE
     	(SELECT COUNT(`book_author`.`id_book`) count_books_of_author FROM `book_author` 
         ORDER BY count_books_of_author DESC ) LIMIT 0,1