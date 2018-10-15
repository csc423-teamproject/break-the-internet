DROP TABLE IF EXISTS `Inventory`;
CREATE TABLE Inventory (
    InventoryId int NOT NULL AUTO_INCREMENT,
    StoreId int NOT NULL,
    ItemId int NOT NULL,
    QuantityInStock int NOT NULL,
    PRIMARY KEY (InventoryId),
    FOREIGN KEY (StoreId) REFERENCES RetailStore(StoreId),
    FOREIGN KEY (ItemId) REFERENCES InventoryItem(ItemId)
);