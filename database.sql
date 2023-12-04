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
    eventPrice INT
);

