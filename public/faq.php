<?php
$root = dirname(__DIR__) . DIRECTORY_SEPARATOR;
define('PARTIAL_PATH', $root . 'partial' . DIRECTORY_SEPARATOR);
define('APP_PATH', $root . 'app' . DIRECTORY_SEPARATOR);
session_start();
?>
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="./static/css/output.css" rel="stylesheet">
  <script src="./static/js/jquery-3.6.0.min.js"></script>
  <title>常見問題 | 看房網</title>
</head>
<div class="w-full h-screen">
  <?php require PARTIAL_PATH . 'navbar.php'; ?>
  <div class="max-w-screen-lg mx-auto mb-4 py-24">
    <div class="w-full text-center">
      <span class="text-4xl">常見問題</sapn>
    </div>
    <div class="w-full space-y-4">
      <span class="text-2xl">如何上傳 VR 環景相片？</span>
      <div>
        1. 首先前往 <a class="text-blue-700" href="https://momento360.com/">momento360</a> 網站
        <img src="./static/image/進入momento 360網站.png">
      </div>
      <div>
        2. 點選中間的 SIGN UP 註冊帳號
        <img src="./static/image/登入.png">
      </div>
      <div>
        3. 使用 Google 帳戶登入
        <img src="./static/image/使用GOOGLE帳戶登入.png">
      </div>
      <div>
        4. 點選「我的媒體」
        <img src="./static/image/點選我的媒體.png">
      </div>
      <div>
        5. 點選「上傳照片」
        <img src="./static/image/上傳照片.png">
      </div>
    </div>
  </div>
</div>