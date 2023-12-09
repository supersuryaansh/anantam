CREATE TABLE users (
    usrId INT AUTO_INCREMENT PRIMARY KEY NOT NULL,
    usrCode VARCHAR(9) NOT NULL,
    usrAccountCode VARCHAR(50) NOT NULL,
    usrName VARCHAR(50) NOT NULL,
    usrGender ENUM('Male', 'Female', 'Other') NOT NUll,
    usrEmail VARCHAR(100) NOT NULL,
    usrPhone VARCHAR(20) NOT NULL,
    usrCollegeId VARCHAR(200) NOT NULL,
    usrPass VARCHAR(100) NOT NULL
);


CREATE TABLE events (
    eventId INT  PRIMARY KEY UNIQUE,
    eventName VARCHAR(30) NOT NULL,
    eventDescription VARCHAR(200),
    eventPicture VARCHAR(200),
    eventPrice INT,
    eventAction VARCHAR(100)
);

CREATE TABLE teams (
    teamID INT AUTO_INCREMENT,
    teamCode CHAR(9),
    teamName VARCHAR(100),
    teamLeader VARCHAR(100),
    member1 VARCHAR(100),
    member2 VARCHAR(100),
    member3 VARCHAR(100),
    presentation VARCHAR(100),
    PRIMARY KEY (teamID)
);

ALTER TABLE `teams` ADD `problemStatement` INT(10) NOT NULL AFTER `presentation`;
RENAME TABLE `teams` TO hackathon_teams;
ALTER TABLE `users` ADD COLUMN `ANANT HACKATHON` ENUM('Yes','No') AFTER usrPass;