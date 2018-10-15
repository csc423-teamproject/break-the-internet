DROP TABLE IF EXISTS `OrderTable`;
CREATE TABLE OrderTable (
    OrderTableId int NOT NULL AUTO_INCREMENT,
    VendorId int NOT NULL,
    StoreId int NOT NULL,
    DateTimeOfOrder DATE NOT NULL,
    OrderStatus varchar(20) NOT NULL,
    DateTimeOfFulfilment DATE NOT NULL, 
    PRIMARY KEY (OrderTableId),
    FOREIGN KEY (StoreId) REFERENCES RetailStore(StoreId),
    FOREIGN KEY (VendorId) REFERENCES Vendor(VendorId)
);