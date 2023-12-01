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
