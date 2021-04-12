<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class productContoller extends Controller
{
    function getProduct($id)
    {
        $query = "SELECT id, products.name, price, description, onStock, placeOfOrigin FROM products WHERE id = :id";
        $params = [
            'id' => $id
        ];

        $record = getRecord($query, $params);

        if(empty($record)){
            return false;
        }
        else{
            return $record;
        }

    }
    function addProduct($name, $price, $onStock, $picture, $description) {

        $pictureTargetFile = image.basename($picture['name']);
        $pictureFileType = strtolower(pathinfo($pictureTargetFile,PATHINFO_EXTENSION));

        if (!getimagesize($picture["tmp_name"])) {
            return '<p id="alert"> A fájl nem kép!</p>';
        }
        else if (file_exists($pictureTargetFile)) {
            return '<p id="alert">A fálj már létezik!</p>';
        }
        else if ($picture["size"] > 500000) {
            return '<p id="alert">A file túl nagy!</p>';
        }
        else if ($pictureFileType != "jpg" && $pictureFileType != "png" && $pictureFileType != "jpeg") {
            return '<p id="alert">Nem megfelelő fájl formátum!</p>';
        }
        else if (move_uploaded_file($picture["tmp_name"], $pictureTargetFile)) {
            $query = "INSERT INTO products(name, price, onStock, picture, description) VALUES (:name,:price,:onStock,:picture,:description)";
            $params = [
                ':name' => $name,
                ':price' => $price,
                ':onStock' => $onStock,
                ':picture' => basename($picture['name']),
                ':description' => $description
            ];

            if(executeDML($query, $params)) {
                return '<p id="info">A termék hozzáadva!</p>';

            }
            return '<p id="alert">Hiba a termék hozzáadása közben!';
        }
        else {
            return '<p id="alert">Hiba a fájlfeltöltés során!';
        }
    }

}
?>
