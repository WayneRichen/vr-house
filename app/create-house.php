<?php
session_start();
if (!isset($_SESSION['user_name']) || $_SESSION['user_type'] != 'landlord' || !isset($_SESSION['user_id'])) {
    header("location: index.php");
    exit;
}

require('db.php');
if (isset($_POST['title'])) {
    try {
        $sql = "INSERT INTO `house` (`landlord`, `title`, `subtitle`, `city`, `region`, `rent`, `vr_url`, `description`, `images`, `enable`) VALUES
                    (:landlord, :title, :subtitle, :city, :region, :rent, :vr_url, :description, :images, :enable)";
        $stmt = $conn->prepare($sql);
        $stmt->execute(['landlord' => $_SESSION['user_id'],
            'title' => $_POST['title'],
            'subtitle' => $_POST['subtitle'],
            'city' => '',
            'region' => $_POST['region'],
            'rent' => $_POST['rent'],
            'vr_url' => $_POST['vr_url'],
            'description' => $_POST['description'],
            'images' => json_encode([1], true),
            'enable' => 1]);
        header("Refresh: 0; url=house-manage.php");
        exit;
    } catch (PDOException $e) {
        
    }
}