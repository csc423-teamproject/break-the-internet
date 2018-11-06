DROP TABLE IF EXISTS `CustomerPurchase`;
CREATE TABLE CustomerPurchase (
    CustomerPurchaseId int NOT NULL AUTO_INCREMENT,
    CustomerId int NOT NULL,
    ItemId int NOT NULL,
    StoreId int NOT NULL,
    QuantityPurchased int NOT NULL,
    DateTimeOfPurchase DATE NOT NULL,
    PRIMARY KEY (CustomerPurchaseId),
    FOREIGN KEY (CustomerId) REFERENCES Customer(CustomerId),
    FOREIGN KEY (ItemId) REFERENCES InventoryItem(ItemId),
    FOREIGN KEY (StoreId) REFERENCES RetailStore(StoreId)
);