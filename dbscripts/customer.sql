DROP TABLE IF EXISTS `Customer`;
CREATE TABLE Customer (
    CustomerId int NOT NULL AUTO_INCREMENT,
    CustomerName varchar(50) NOT NULL,
    CustomerAddress varchar(50) NOT NULL,
    City varchar(50) NOT NULL,
    StateCode varchar(2) NOT NULL,
    ZIP int NOT NULL,
    Phone int NOT NULL,
    email varchar(50) NOT NULL,
    PRIMARY KEY (CustomerId)
);
