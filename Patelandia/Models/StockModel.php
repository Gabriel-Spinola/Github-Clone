<?php

namespace Models;

use DbConnectionI;

class StockModel
{
    public MenuModel $menuModel;

    public function __construct(private DbConnectionI $pdo)
    {
        $this -> menuModel = new MenuModel($pdo);
    }

    public function insertNewItem(
        string $itemName,
        string $description,
        float $price,
        int $amount,
        int $category,
        string $imgFileName,
    ): bool {
        $query = $this->pdo->connect()->prepare(
            "INSERT INTO `menu_item`
             VALUES (null, ?, ?, ?, ?, ?, ?)"
        );

        return $query->execute([
            $itemName, $description, $price,
            $amount, $category, $imgFileName
        ]);
    }

    public function updateItem(
        string $itemName,
        string $description,
        float $price,
        int $amount,
        int $category,
        string $imgFileName,
        int $id,
    ): bool {
        $query = $this->pdo->connect()->prepare(
            "UPDATE `menu_item`
             SET `item_name`=?, `description`=?, `price`=?, `amount`=?, `category`=?, `img_file_name`=?
             WHERE `id` = ?"
        );

        return $query->execute([
            $itemName, $description, $price, $amount, 
            $category, $imgFileName, $id
        ]);
    }

    public function deleteItem(int $id): bool
    {
        $query = $this->pdo->connect()->prepare(
            "DELETE FROM `menu_item` WHERE `id`=?"
        );

        return $query->execute([$id]);
    }
}
