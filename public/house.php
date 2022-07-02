<?php
$root = dirname(__DIR__) . DIRECTORY_SEPARATOR;
define('PARTIAL_PATH', $root . 'partial' . DIRECTORY_SEPARATOR);
define('APP_PATH', $root . 'app' . DIRECTORY_SEPARATOR);
session_start();
require APP_PATH . 'house.php'
?>
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="./static/css/output.css" rel="stylesheet">
  <script src="./static/js/jquery-3.6.0.min.js"></script>
  <title><?= $house['title'] ?> | 看房網</title>
</head>
<div class="w-full h-screen">
  <?php require PARTIAL_PATH . 'navbar.php'; ?>
  <div class="max-w-screen-lg mx-auto mb-4 py-24">
    <div class="min-w-max overflow-hidden mx-auto my-2">
      <img src="<?= $house['images'][0] ?>" class="w-1/2 mx-auto">
    </div>
    <span class="text-3xl font-bold text-gray-700"><?= $house['title'] ?></span>
    <p class="text-xl text-gray-700"><?= $house['subtitle'] ?>
    <p class="mt-2 whitespace-pre"><?= $house['description'] ?></p>
  </div>
  <div class="fixed bottom-0 w-full h-16 bg-white shadow-inner">
    <div class="max-w-screen-lg mx-auto h-full flex justify-end items-center">
      <span class="text-lg font-bold mr-4 text-red-600"><?= $house['rent'] ?>&nbsp;&frasl;&nbsp;一個月</span>
      <a href="<?= $house['vr_url'] ?>"><button type="button" class="text-white bg-gradient-to-br from-purple-600 to-blue-500 hover:bg-gradient-to-bl focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800 font-bold text-lg rounded-lg px-5 py-2.5 text-center mr-2">VR 線上看房</button></a>
    </div>
  </div>
</div>