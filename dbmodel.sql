
-- ------
-- BGA framework: © Gregory Isabelli <gisabelli@boardgamearena.com> & Emmanuel Colin <ecolin@boardgamearena.com>
-- VastTheCrystalCaverns implementation : © Silvligh / Funce <funce.973@gmail.com>
-- 
-- This code has been produced on the BGA studio platform for use on http://boardgamearena.com.
-- See http://en.boardgamearena.com/#!doc/Studio for more information.
-- -----

-- dbmodel.sql

-- This is the file where you are describing the database schema of your game
-- Basically, you just have to export from PhpMyAdmin your table structure and copy/paste
-- this export here.
-- Note that the database itself and the standard tables ("global", "stats", "gamelog" and "player") are
-- already created and must not be created here

-- Note: The database schema is created from this file when the game starts. If you modify this file,
--       you have to restart a game to see your changes in database.

-- Example 1: create a standard "card" table to be used with the "Deck" tools (see example game "hearts"):

-- CREATE TABLE IF NOT EXISTS `card` (
--   `card_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
--   `card_type` varchar(16) NOT NULL,
--   `card_type_arg` int(11) NOT NULL,
--   `card_location` varchar(16) NOT NULL,
--   `card_location_arg` int(11) NOT NULL,
--   PRIMARY KEY (`card_id`)
-- ) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;


-- Example 2: add a custom field to the standard "player" table
-- ALTER TABLE `player` ADD `player_my_custom_field` INT UNSIGNED NOT NULL DEFAULT '0';

-- Knight Cards!
-- Sidequests!
CREATE TABLE IF NOT EXISTS `sidequests`
(
    `card_id`             SMALLINT UNSIGNED NOT NULL AUTO_INCREMENT,
    `card_type`           VARCHAR(16)       NOT NULL,
    `card_type_arg`       INT(11),
    `card_location`       VARCHAR(16)       NOT NULL,
    `card_location_arg`   INT(11)           NOT NULL,
    `card_location_order` TINYINT,
    PRIMARY KEY (`card_id`)
)
    ENGINE = InnoDB
    DEFAULT CHARSET = utf8
    AUTO_INCREMENT = 1;

-- Events
CREATE TABLE IF NOT EXISTS `events`
(
    `card_id`             SMALLINT UNSIGNED NOT NULL AUTO_INCREMENT,
    `card_type`           VARCHAR(16)       NOT NULL,
    `card_type_arg`       INT(11),
    `card_location`       VARCHAR(16)       NOT NULL,
    `card_location_arg`   INT(11)           NOT NULL,
    `card_location_order` TINYINT,
    PRIMARY KEY (`card_id`)
)
    ENGINE = InnoDB
    DEFAULT CHARSET = utf8
    AUTO_INCREMENT = 1;

-- Treasures
CREATE TABLE IF NOT EXISTS `treasures`
(
    `card_id`             SMALLINT UNSIGNED NOT NULL AUTO_INCREMENT,
    `card_type`           VARCHAR(16)       NOT NULL,
    `card_type_arg`       INT(11),
    `card_location`       VARCHAR(16)       NOT NULL,
    `card_location_arg`   INT(11)           NOT NULL,
    `card_location_order` TINYINT,
    PRIMARY KEY (`card_id`)
)
    ENGINE = InnoDB
    DEFAULT CHARSET = utf8
    AUTO_INCREMENT = 1;

-- Goblin Cards!
-- War cards do not need tracking
-- Monsters
CREATE TABLE IF NOT EXISTS `monsters`
(
    `card_id`             SMALLINT UNSIGNED NOT NULL AUTO_INCREMENT,
    `card_type`           VARCHAR(16)       NOT NULL,
    `card_type_arg`       INT(11),
    `card_location`       VARCHAR(16)       NOT NULL,
    `card_location_arg`   INT(11)           NOT NULL,
    `card_location_order` TINYINT,
    PRIMARY KEY (`card_id`)
)
    ENGINE = InnoDB
    DEFAULT CHARSET = utf8
    AUTO_INCREMENT = 1;

-- Secrets
CREATE TABLE IF NOT EXISTS `secrets`
(
    `card_id`             SMALLINT UNSIGNED NOT NULL AUTO_INCREMENT,
    `card_type`           VARCHAR(16)       NOT NULL,
    `card_type_arg`       INT(11),
    `card_location`       VARCHAR(16)       NOT NULL,
    `card_location_arg`   INT(11)           NOT NULL,
    `card_location_order` TINYINT,
    PRIMARY KEY (`card_id`)
)
    ENGINE = InnoDB
    DEFAULT CHARSET = utf8
    AUTO_INCREMENT = 1;

-- Dragon
-- Powers
CREATE TABLE IF NOT EXISTS `powers`
(
    `card_id`             SMALLINT UNSIGNED NOT NULL AUTO_INCREMENT,
    `card_type`           VARCHAR(16)       NOT NULL,
    `card_type_arg`       INT(11),
    `card_location`       VARCHAR(16)       NOT NULL,
    `card_location_arg`   INT(11)           NOT NULL,
    `card_location_order` TINYINT,
    PRIMARY KEY (`card_id`)
)
    ENGINE = InnoDB
    DEFAULT CHARSET = utf8
    AUTO_INCREMENT = 1;
