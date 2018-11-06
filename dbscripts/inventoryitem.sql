DROP TABLE IF EXISTS `InventoryItem`;
CREATE TABLE InventoryItem (
    ItemId int NOT NULL AUTO_INCREMENT,
    ItemDescription varchar(200) NOT NULL,
    ItemSize varchar(100) NOT NULL,
    Division varchar(100) NOT NULL,
    Department varchar(100) NOT NULL,
    Category varchar(50) NOT NULL,
    ItemCost float NOT NULL,
    ItemRetail float NOT NULL,
    ImageFileName varchar(50) NOT NULL,
    VendorId int NOT NULL,
    PRIMARY KEY (ItemId),
    FOREIGN KEY (VendorId) REFERENCES Vendor(VendorId)
);