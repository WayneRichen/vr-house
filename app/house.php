<?php
if (isset($_GET['id'])) {
    require('db.php');
    $sql = 'SELECT *
            FROM house
            WHERE `id` = :id AND `enable` = 1';
    $sth = $conn->prepare($sql, array(PDO::ATTR_CURSOR => PDO::CURSOR_FWDONLY));
    $sth->execute(array('id' => $_GET['id']));
    $house = $sth->fetch();
    if (!$house) {
        header("location:index.php");
    }
    $house['images'] = json_decode($house['images'], true);
    $house['rent'] = '$' . number_format($house['rent']);
} else {
    header("location:index.php");
}