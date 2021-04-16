<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Drink;

class productController extends Controller
{
    public function index()
    {
        return view('shop');
    }
    public function getProduct($id)
    {
        $query = "SELECT FROM products id, products.name, type, price, description, onStock, placeOfOrigin WHERE id = :id";
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
    public function addProduct($name, $price, $type, $onStock, $picture, $description) {

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
            $query = "INSERT INTO products(name, price, type, onStock, picture, description) VALUES (:name,:price,:type,:onStock,:picture,:description)";
            $params = [
                ':name' => $name,
                ':price' => $price,
                ':type' => $type,
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

    public function search(Request $request){
        $PER_PAGE = 15;
        $drinks = Drink::search($request->all());
        $current_page = $request->get("toPage") ?? 0;
        $found = $drinks->count();
        $drinks / $drinks->skip($current_page * $PER_PAGE)->take($PER_PAGE);
        $pages = ceil($found / $PER_PAGE);
        if($current_page < 0){
            $current_page = 0;
        }elseif ($current_page > $pages){
            $current_page = $pages;
        }

    }

}
?>
