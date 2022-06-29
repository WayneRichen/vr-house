<?php
session_start();
if (!isset($_SESSION['user_name']) || $_SESSION['user_type'] != 'landlord' || !isset($_SESSION['user_id'])) {
    header("location: index.php");
    exit;
}

require('db.php');
$sql = 'SELECT *
        FROM house
        WHERE `id` = :id AND `enable` = 1';
$sth = $conn->prepare($sql, array(PDO::ATTR_CURSOR => PDO::CURSOR_FWDONLY));
$sth->execute(array('id' => $_GET['id']));
$house = $sth->fetch();
if (!$house || $house['landlord'] != $_SESSION['user_id']) {
    header("location: create-house.php");
    exit;
}