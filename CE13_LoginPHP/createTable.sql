/**
 * Author:  mgunders
 * Created: Apr 18, 2018
 */

    CREATE TABLE IF NOT EXISTS `users` (

        `id` INT NOT NULL PRIMARY KEY AUTO_INCREMENT,

        `name` VARCHAR(50) NOT NULL,

        `email` VARCHAR(50) NOT NULL UNIQUE,

        `username` VARCHAR(50) NOT NULL UNIQUE,

        `password` VARCHAR(255) NOT NULL,

        `confirmcode` VARCHAR(50) NOT NULL

    );



