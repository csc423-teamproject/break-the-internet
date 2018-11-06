DROP TABLE IF EXISTS `Vendor`;
CREATE TABLE Vendor (
    VendorId int NOT NULL AUTO_INCREMENT,
    VendorCode int NOT NULL,
    VendorName varchar(50) NOT NULL,
    VendorAddress varchar(50) NOT NULL,
    City varchar(50) NOT NULL,
    StateCode varchar(2) NOT NULL,
    ZIP int NOT NULL,
    Phone int NOT NULL,
    ContactPersonName varchar(50) NOT NULL,
    VendorPassword varchar(50) NOT NULL,
    PRIMARY KEY (VendorId),
    UNIQUE (VendorCode)
);