ALTER TABLE `uzytkownicy`
	CHANGE COLUMN `haslo` `haslo` VARCHAR(40) NOT NULL AFTER `login`;