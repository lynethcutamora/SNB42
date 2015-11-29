-- MySQL Script generated by MySQL Workbench
-- 11/29/15 17:00:10
-- Model: New Model    Version: 1.0
-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

-- -----------------------------------------------------
-- Schema snbDB
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema snbDB
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `snbDB` DEFAULT CHARACTER SET utf8 ;
USE `snbDB` ;

-- -----------------------------------------------------
-- Table `snbDB`.`User_MD`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `snbDB`.`User_MD` (
  `userId` VARCHAR(10) NOT NULL,
  `userType` VARCHAR(8) NULL,
  `dateRegistered` DATETIME NULL,
  `address` VARCHAR(100) NULL,
  `emailAdd` VARCHAR(50) NULL,
  `password` VARCHAR(40) NULL,
  `profilePicId` VARCHAR(10) NULL,
  PRIMARY KEY (`userId`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `snbDB`.`Company_dtl`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `snbDB`.`Company_dtl` (
  `userId` VARCHAR(10) NULL,
  `companyName` VARCHAR(50) NULL,
  `businessType` VARCHAR(20) NULL,
  `ownerName` VARCHAR(50) NULL,
  `yearFounded` DATETIME NULL,
  INDEX `fk_Company_dtl_User_MD_idx` (`userId` ASC),
  CONSTRAINT `fk_Company_dtl_User_MD`
    FOREIGN KEY (`userId`)
    REFERENCES `snbDB`.`User_MD` (`userId`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `snbDB`.`userpost`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `snbDB`.`userpost` (
  `postId` VARCHAR(10) NOT NULL,
  `postContent` VARCHAR(200) NULL,
  `postDate` DATETIME NULL,
  `postType` VARCHAR(1) NULL,
  `postTitle` VARCHAR(45) NULL,
  `userId` VARCHAR(10) NOT NULL,
  PRIMARY KEY (`postId`),
  INDEX `fk_userpost_User_MD1_idx` (`userId` ASC),
  CONSTRAINT `fk_userpost_User_MD1`
    FOREIGN KEY (`userId`)
    REFERENCES `snbDB`.`User_MD` (`userId`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `snbDB`.`comment_dtl`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `snbDB`.`comment_dtl` (
  `commentContent` VARCHAR(100) NULL,
  `commentDate` DATETIME NULL,
  `commentType` VARCHAR(1) NULL,
  `postId` VARCHAR(10) NOT NULL,
  `userId` VARCHAR(10) NOT NULL,
  `commentId` VARCHAR(10) NULL,
  INDEX `fk_comment_dtl_User_MD1_idx` (`userId` ASC),
  CONSTRAINT `fk_comment_dtl_userpost1`
    FOREIGN KEY (`postId`)
    REFERENCES `snbDB`.`userpost` (`postId`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_comment_dtl_User_MD1`
    FOREIGN KEY (`userId`)
    REFERENCES `snbDB`.`User_MD` (`userId`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `snbDB`.`User_dtl`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `snbDB`.`User_dtl` (
  `userId` VARCHAR(10) NULL,
  `lName` VARCHAR(30) NULL,
  `fName` VARCHAR(30) NULL,
  `midInit` VARCHAR(2) NULL,
  `age` VARCHAR(3) NULL,
  `gender` VARCHAR(1) NULL,
  `shortSelfDescription` VARCHAR(100) NULL,
  `nameOfBusiness` VARCHAR(45) NULL,
  `businessType` VARCHAR(15) NULL,
  CONSTRAINT `fk_User_dtl_User_MD1`
    FOREIGN KEY (`userId`)
    REFERENCES `snbDB`.`User_MD` (`userId`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `snbDB`.`userpost_ext`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `snbDB`.`userpost_ext` (
  `extId` VARCHAR(10) NOT NULL,
  `extContent` VARCHAR(45) NULL,
  `extType` VARCHAR(1) NULL,
  `postId` VARCHAR(10) NOT NULL,
  PRIMARY KEY (`extId`),
  INDEX `fk_userpost_ext_userpost1_idx` (`postId` ASC),
  CONSTRAINT `fk_userpost_ext_userpost1`
    FOREIGN KEY (`postId`)
    REFERENCES `snbDB`.`userpost` (`postId`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `snbDB`.`upvote_dtl`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `snbDB`.`upvote_dtl` (
  `voteStat` VARCHAR(1) NOT NULL,
  `voteType` VARCHAR(1) NULL,
  `postId` VARCHAR(10) NOT NULL,
  `userId` VARCHAR(10) NOT NULL,
  `voteId` VARCHAR(45) NOT NULL,
  INDEX `fk_upvote_dtl_userpost1_idx` (`postId` ASC),
  INDEX `fk_upvote_dtl_User_MD1_idx` (`userId` ASC),
  PRIMARY KEY (`voteId`),
  CONSTRAINT `fk_upvote_dtl_userpost1`
    FOREIGN KEY (`postId`)
    REFERENCES `snbDB`.`userpost` (`postId`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_upvote_dtl_User_MD1`
    FOREIGN KEY (`userId`)
    REFERENCES `snbDB`.`User_MD` (`userId`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `snbDB`.`badge_dtl`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `snbDB`.`badge_dtl` (
  `userId` VARCHAR(10) NULL,
  `fromUserId` VARCHAR(10) NULL,
  `voteBadge` VARCHAR(1) NULL,
  INDEX `fk_badge_dtl_User_MD1_idx` (`userId` ASC),
  INDEX `fk_badge_dtl_User_MD2_idx` (`fromUserId` ASC),
  CONSTRAINT `fk_badge_dtl_User_MD1`
    FOREIGN KEY (`userId`)
    REFERENCES `snbDB`.`User_MD` (`userId`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_badge_dtl_User_MD2`
    FOREIGN KEY (`fromUserId`)
    REFERENCES `snbDB`.`User_MD` (`userId`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `snbDB`.`report_dtl`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `snbDB`.`report_dtl` (
  `reportId` VARCHAR(10) NOT NULL,
  `userId` VARCHAR(10) NULL,
  `fromUserId` VARCHAR(10) NULL,
  `reportContent` VARCHAR(200) NULL,
  `reportDate` DATETIME NULL,
  `reportStat` VARCHAR(1) NULL,
  `reportType` VARCHAR(1) NULL,
  PRIMARY KEY (`reportId`),
  INDEX `fk_report_dtl_User_MD1_idx` (`userId` ASC),
  INDEX `fk_report_dtl_User_MD2_idx` (`fromUserId` ASC),
  CONSTRAINT `fk_report_dtl_User_MD1`
    FOREIGN KEY (`userId`)
    REFERENCES `snbDB`.`User_MD` (`userId`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_report_dtl_User_MD2`
    FOREIGN KEY (`fromUserId`)
    REFERENCES `snbDB`.`User_MD` (`userId`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `snbDB`.`conference_md`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `snbDB`.`conference_md` (
  `conId` VARCHAR(10) NOT NULL,
  `userID` VARCHAR(10) NULL,
  `fromUserId` VARCHAR(10) NULL,
  PRIMARY KEY (`conId`),
  INDEX `fk_conference_md_User_MD1_idx` (`userID` ASC),
  INDEX `fk_conference_md_User_MD2_idx` (`fromUserId` ASC),
  CONSTRAINT `fk_conference_md_User_MD1`
    FOREIGN KEY (`userID`)
    REFERENCES `snbDB`.`User_MD` (`userId`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_conference_md_User_MD2`
    FOREIGN KEY (`fromUserId`)
    REFERENCES `snbDB`.`User_MD` (`userId`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `snbDB`.`conference_dtl`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `snbDB`.`conference_dtl` (
  `msgId` VARCHAR(10) NOT NULL,
  `conId` VARCHAR(10) NULL,
  `dateSent` DATETIME NULL,
  PRIMARY KEY (`msgId`),
  INDEX `fk_conference_dtl_conference_md1_idx` (`conId` ASC),
  CONSTRAINT `fk_conference_dtl_conference_md1`
    FOREIGN KEY (`conId`)
    REFERENCES `snbDB`.`conference_md` (`conId`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `snbDB`.`conference_ext`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `snbDB`.`conference_ext` (
  `conExtId` VARCHAR(10) NOT NULL,
  `conId` VARCHAR(10) NULL,
  `timeStarted` DATETIME NULL,
  `timeEnded` DATETIME NULL,
  PRIMARY KEY (`conExtId`),
  INDEX `fk_conference_ext_conference_md1_idx` (`conId` ASC),
  CONSTRAINT `fk_conference_ext_conference_md1`
    FOREIGN KEY (`conId`)
    REFERENCES `snbDB`.`conference_md` (`conId`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `snbDB`.`group_md`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `snbDB`.`group_md` (
  `groupId` VARCHAR(10) NOT NULL,
  `groupname` VARCHAR(30) NULL,
  `groupdescription` VARCHAR(200) NULL,
  `groupCoverPic` VARCHAR(45) NULL,
  `userId` VARCHAR(10) NULL,
  `conId` VARCHAR(10) NULL,
  PRIMARY KEY (`groupId`),
  INDEX `fk_group_md_User_MD1_idx` (`userId` ASC),
  INDEX `fk_group_md_conference_md1_idx` (`conId` ASC),
  CONSTRAINT `fk_group_md_User_MD1`
    FOREIGN KEY (`userId`)
    REFERENCES `snbDB`.`User_MD` (`userId`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_group_md_conference_md1`
    FOREIGN KEY (`conId`)
    REFERENCES `snbDB`.`conference_md` (`conId`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `snbDB`.`picture_dtl`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `snbDB`.`picture_dtl` (
  `userId` VARCHAR(10) NULL,
  `picturename` VARCHAR(45) NULL,
  `pictureId` VARCHAR(10) NOT NULL,
  PRIMARY KEY (`pictureId`),
  INDEX `fk_picture_dtl_User_MD1_idx` (`userId` ASC),
  CONSTRAINT `fk_picture_dtl_User_MD1`
    FOREIGN KEY (`userId`)
    REFERENCES `snbDB`.`User_MD` (`userId`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;