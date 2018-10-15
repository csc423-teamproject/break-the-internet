DROP TABLE IF EXISTS `RetailStore`;
CREATE TABLE RetailStore (
    StoreId int NOT NULL AUTO_INCREMENT,
    StoreCode int NOT NULL,
    StoreName varchar(50) NOT NULL,
    StoreAddress varchar(50) NOT NULL,
    City varchar(50) NOT NULL,
    StateCode varchar(2) NOT NULL,
    ZIP int NOT NULL,
    Phone int NOT NULL,
    ManagerName varchar(50) NOT NULL,
    PRIMARY KEY (StoreId),
    UNIQUE (StoreCode)
);