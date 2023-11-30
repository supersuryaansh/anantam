CREATE TABLE users (
    usrId INT AUTO_INCREMENT PRIMARY KEY NOT NULL,
    usrCode VARCHAR(10) NOT NULL,
    usrName VARCHAR(50) NOT NULL,
    usrGender ENUM('Male', 'Female', 'Other') NOT NUll,
    usrEmail VARCHAR(100) NOT NULL,
    usrPhone VARCHAR(20) NOT NULL,
    usrCollegeId MEDIUMBLOB NOT NULL,
    usrGovId MEDIUMBLOB NOT NULL,
    usrPass VARCHAR(100) NOT NULL
);
