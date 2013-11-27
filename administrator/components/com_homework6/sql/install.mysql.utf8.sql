CREATE TABLE IF NOT EXISTS `#__homework6_liststudent` (
`id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT,

`ordering` INT(11)  NOT NULL ,
`state` TINYINT(1)  NOT NULL ,
`checked_out` INT(11)  NOT NULL ,
`checked_out_time` DATETIME NOT NULL DEFAULT '0000-00-00 00:00:00',
`created_by` INT(11)  NOT NULL ,
`namy` VARCHAR(255)  NOT NULL ,
`info` TEXT NOT NULL ,
`age` VARCHAR(255)  NOT NULL ,
`floor` VARCHAR(255)  NOT NULL ,
`group` VARCHAR(255)  NOT NULL ,
`ball` VARCHAR(255)  NOT NULL ,
`number` VARCHAR(255)  NOT NULL ,
`foto` VARCHAR(255)  NOT NULL ,
PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT COLLATE=utf8_general_ci;

