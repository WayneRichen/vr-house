<?php
$root = dirname(__DIR__) . DIRECTORY_SEPARATOR;
define('PARTIAL_PATH', $root . 'partial' . DIRECTORY_SEPARATOR);
?>
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="./static/css/output.css" rel="stylesheet">
  <title>新增房屋｜看房網</title>
</head>
<body>
  <div class="min-h-screen flex">
  <?php require PARTIAL_PATH . 'sidebar.php'; ?>
  <div class="w-full px-4">
      <div class="w-full flex justify-between items-center mt-4">
        <span class="text-gray-600 font-bold text-2xl">新增房屋</span>
      </div>
      <form action="./create-house.php" method="POST">
        <div>
          <label class="text-gray-800 font-semibold block my-3 text-md" for="title">標題</label>
          <input class="w-full bg-gray-100 px-4 py-2 rounded-lg focus:outline-none" type="text" name="title"
            id="title" />
        </div>
        <div>
          <label class="text-gray-800 font-semibold block my-3 text-md" for="subtitle">副標題</label>
          <input class="w-full bg-gray-100 px-4 py-2 rounded-lg focus:outline-none" type="text" name="subtitle"
            id="subtitle" />
        </div>
        <div>
          <label class="text-gray-800 font-semibold block my-3 text-md" for="region">地區</label>
          <input class="w-full bg-gray-100 px-4 py-2 rounded-lg focus:outline-none" type="text" name="region"
            id="region" />
        </div>
        <div>
          <label class="text-gray-800 font-semibold block my-3 text-md" for="rent">租金</label>
          <input class="w-full bg-gray-100 px-4 py-2 rounded-lg focus:outline-none" type="text" name="rent" id="rent" />
        </div>
        <div>
          <label class="text-gray-800 font-semibold block my-3 text-md" for="vr_url">VR 看房網址</label>
          <input class="w-full bg-gray-100 px-4 py-2 rounded-lg focus:outline-none" type="text" name="vr_url" id="vr_url" />
        </div>
        <div>
          <label class="text-gray-800 font-semibold block my-3 text-md" for="description">房屋描述</label>
          <textarea class="w-full bg-gray-100 px-4 py-2 rounded-lg focus:outline-none" type="text" name="description"
            id="description"></textarea>
        </div>
        <div>
          <label class="text-gray-800 font-semibold block my-3 text-md" for="house_img">圖片</label>
          <input type="file" class="form-control-file" id="house_img" name="house_img" accept="image/*" multiple>
        </div>
        <div>
          <button type="submit" class="w-full my-3 text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-base px-5 py-2.5 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">新增房屋</button>
        </div>
      </form>
    </div>
  </div>
</body>