<?php
$root = dirname(__DIR__) . DIRECTORY_SEPARATOR;
define('PARTIAL_PATH', $root . 'partial' . DIRECTORY_SEPARATOR);
?>
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="./static/css/output.css" rel="stylesheet">
  <link href="./static/css/slide.css" rel="stylesheet">
  <script src="./static/js/jquery-3.6.0.min.js"></script>
  <title>看房網</title>
</head>
<?php require PARTIAL_PATH . 'navbar.php'; ?>
<div class="h-24"></div>
<?php if (isset($_GET['region'])): ?>
<div class="max-w-screen-lg mx-auto">
  <span class="font-bold"><?= $_GET['region'] ?></span> 的搜尋結果：
</div>
<?php endif; ?>
<div class="max-w-screen-lg mx-auto flex flex-wrap">
  <div class="p-2">
    <a href="./house.php">
      <div class="max-w-xs rounded overflow-hidden shadow-lg">
        <img class="w-full" src="./static/image/demo.webp" alt="Sunset in the mountains">
        <div class="px-6 py-4">
          <div class="font-bold text-xl mb-2 truncate ">近捷運象山站【北醫商圈】採光佳★垃圾代收</div>
          <p class="text-gray-700 text-base"
            style="display: -webkit-box; -webkit-line-clamp: 3; -webkit-box-orient: vertical; overflow: hidden;">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus quia, nulla! Maiores et perferendis
            eaque, exercitationem praesentium nihil.orem ipsum dolor sit amet, consectetur adipisicing elit.
            Voluptatibus quia, nulla! Maiores et perferendis
            eaque, exercitationem praesentium nihil.
          </p>
        </div>
        <div class="px-6 pt-2 pb-2">
          <span
            class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">#photography</span>
        </div>
      </div>
    </a>
  </div>
  <div class="p-2">
    <a href="./house.php" alt="近捷運象山站【北醫商圈】採光佳★垃圾代收">
      <div class="max-w-xs rounded overflow-hidden shadow-lg">
        <img class="w-full" src="./static/image/demo.webp" alt="近捷運象山站【北醫商圈】採光佳★垃圾代收">
        <div class="px-6 py-4">
          <div class="font-bold text-xl mb-2 truncate ">The Coldest Sunsetsdgsggggggggg</div>
          <p class="text-gray-700 text-base"
            style="display: -webkit-box; -webkit-line-clamp: 3; -webkit-box-orient: vertical; overflow: hidden;">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus quia, nulla! Maiores et perferendis
            eaque, exercitationem praesentium nihil.orem ipsum dolor sit amet, consectetur adipisicing elit.
            Voluptatibus quia, nulla! Maiores et perferendis
            eaque, exercitationem praesentium nihil.
          </p>
        </div>
        <div class="px-6 pt-2 pb-2">
          <span
            class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">#photography</span>
        </div>
      </div>
    </a>
  </div>
  <div class="p-2">
    <a href="./house.php">
      <div class="max-w-xs rounded overflow-hidden shadow-lg">
        <img class="w-full" src="./static/image/demo.webp" alt="Sunset in the mountains">
        <div class="px-6 py-4">
          <div class="font-bold text-xl mb-2 truncate ">The Coldest Sunsetsdgsggggggggg</div>
          <p class="text-gray-700 text-base"
            style="display: -webkit-box; -webkit-line-clamp: 3; -webkit-box-orient: vertical; overflow: hidden;">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus quia, nulla! Maiores et perferendis
            eaque, exercitationem praesentium nihil.orem ipsum dolor sit amet, consectetur adipisicing elit.
            Voluptatibus quia, nulla! Maiores et perferendis
            eaque, exercitationem praesentium nihil.
          </p>
        </div>
        <div class="px-6 pt-2 pb-2">
          <span
            class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">#photography</span>
        </div>
      </div>
    </a>
  </div>
  <div class="p-2">
    <a href="./house.php">
      <div class="max-w-xs rounded overflow-hidden shadow-lg">
        <img class="w-full" src="./static/image/demo.webp" alt="Sunset in the mountains">
        <div class="px-6 py-4">
          <div class="font-bold text-xl mb-2 truncate ">The Coldest Sunsetsdgsggggggggg</div>
          <p class="text-gray-700 text-base"
            style="display: -webkit-box; -webkit-line-clamp: 3; -webkit-box-orient: vertical; overflow: hidden;">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus quia, nulla! Maiores et perferendis
            eaque, exercitationem praesentium nihil.orem ipsum dolor sit amet, consectetur adipisicing elit.
            Voluptatibus quia, nulla! Maiores et perferendis
            eaque, exercitationem praesentium nihil.
          </p>
        </div>
        <div class="px-6 pt-2 pb-2">
          <span
            class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">#photography</span>
        </div>
      </div>
    </a>
  </div>
  <div class="p-2">
    <a href="./house.php">
      <div class="max-w-xs rounded overflow-hidden shadow-lg">
        <img class="w-full" src="./static/image/demo.webp" alt="Sunset in the mountains">
        <div class="px-6 py-4">
          <div class="font-bold text-xl mb-2 truncate ">The Coldest Sunsetsdgsggggggggg</div>
          <p class="text-gray-700 text-base"
            style="display: -webkit-box; -webkit-line-clamp: 3; -webkit-box-orient: vertical; overflow: hidden;">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus quia, nulla! Maiores et perferendis
            eaque, exercitationem praesentium nihil.orem ipsum dolor sit amet, consectetur adipisicing elit.
            Voluptatibus quia, nulla! Maiores et perferendis
            eaque, exercitationem praesentium nihil.
          </p>
        </div>
        <div class="px-6 pt-2 pb-2">
          <span
            class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">#photography</span>
        </div>
      </div>
    </a>
  </div>
</div>

<script>
  $('#region').on('change', function () {
    this.form.submit();
  });
</script>