DROP TABLE IF EXISTS `ReturnToVendorDetail`;
CREATE TABLE ReturnToVendorDetail (
    ReturnToVendorDetailId int NOT NULL AUTO_INCREMENT,
    ReturnToVendorId int NOT NULL,
    ItemId int NOT NULL,
    QuantityReturned int NOT NULL,
    PRIMARY KEY (ReturnToVendorDetailId),
    FOREIGN KEY (ReturnToVendorId) REFERENCES ReturnToVendor(ReturnToVendorId),
    FOREIGN KEY (ItemId) REFERENCES InventoryItem(ItemId)
);