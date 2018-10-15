DROP TABLE IF EXISTS `ReturnToVendor`;
CREATE TABLE ReturnToVendor (
    ReturnToVendorId int NOT NULL AUTO_INCREMENT,
    VendorId int NOT NULL,
    StoreId int NOT NULL,
    DateTimeOfReturn DATE NOT NULL,
    PRIMARY KEY (ReturnToVendorId),
    FOREIGN KEY (VendorId) REFERENCES Vendor(VendorId),
    FOREIGN KEY (StoreId) REFERENCES RetailStore(StoreId)
);