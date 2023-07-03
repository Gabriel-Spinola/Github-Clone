<?php

namespace Models;

class OrderRegisterModel
{
    // private StockModel $stockModel;

    // public function __construct(private DbConnectionI $pdo)
    // {
    //     $this->stockModel = new StockModel($pdo);
    // }

    public static function ReceiveData(): array
    {
        if (isset($_POST['info'])) {
            $select_id = json_decode(stripslashes($_POST['info']));
            $dataArray = [];

            foreach ($select_id as $data) {
                echo $data . ' ';
                array_push($dataArray, $data);
            }

            return $dataArray;
        }

        return [];
    }

    public function DisplayReceivedData(): array | string
    {
        $data = @OrderRegisterModel::ReceiveData();

        return !empty($data) ? $data : "empty";
    }

    // private function ExistsInMenu(string $name): bool
    // {
    //     $query = $query = $this->pdo->connect()->prepare(
    //         "SELECT * from `menu_item` WHERE `item_name` LIKE ?"
    //     );

    //     $query->execute([$name]);
    //     return $query->rowCount() > 0;
    // }

    public function AtLeastUpdate() {
        
    }

    // public function InsertNewOrder()
    // {
    //     $data = $this->DisplayReceivedData();
    //     echo "a";
    //     if ($data != "empty") {
    //         echo "a";
    //         try {
    //             for ($i = 0; $i < count($data); $i++) {
    //                 if ($this->ExistsInMenu($data[$i])) {
    //                     $exist = $this->pdo->connect()->prepare(
    //                         "SELECT * from `menu_item` WHERE `item_name` LIKE ?"
    //                     );

    //                     $exist->execute([$data[$i]]);

    //                     $search = $exist->fetchAll();

    //                     $query = $this->pdo->connect()->prepare(
    //                         "INSERT INTO `order_menu_item`
    //                         VALUES (null, ?, ?)"
    //                     );

    //                     $query->execute([$search['id'], $data[$i + 1]]);
    //                 }
    //             }
    //         } catch (Exception $e) {
    //             echo $e->getMessage();
    //         }
    //     }
    //     else {
    //         echo "b";
    //     }
    // }
}

OrderRegisterModel::ReceiveData();

