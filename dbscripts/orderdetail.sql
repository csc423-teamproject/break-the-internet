DROP TABLE IF EXISTS `OrderDetail`;
CREATE TABLE OrderDetail (
    OrderDetailId int NOT NULL AUTO_INCREMENT,
    OrderTableId int NOT NULL,
    ItemId int NOT NULL,
    QuantityOrdered int NOT NULL,
    PRIMARY KEY (OrderDetailId),
    FOREIGN KEY (OrderTableId) REFERENCES OrderTable(OrderTableId),
    FOREIGN KEY (ItemId) REFERENCES InventoryItem(ItemId)
);