<?php
if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['add'])) {
    $postData = [
        'name' => $_POST['name'],
        'type' => $_POST['type'],
        'price' => $_POST['price'],
        'description' => $_POST['description'],
        'onStock' => $_POST['onStock'],
        'placeOfOrigin' => $_POST['placeOfOrigin'],
        'picture' => $_POST['picture']
    ];

    $picture = $_FILES['picture'];

    if (empty($postData['name']) || $picture['error'] > 0 || empty($postData['type']) || empty($postData['price']) || empty($postData['descripton']) || empty($postData['onStock']) || empty($postData['placeOfOrigin'])) {
        echo '<p id="alert">Hiányzó adat!</p>';
    }
    else {
        echo addProduct($postData['name'], $postData['type'], $postData['price'], $postData['price'], $postData['descripton'], $picture, $postData['onStock'], $postData['placeOfOrigin']);

    }
}
?>
