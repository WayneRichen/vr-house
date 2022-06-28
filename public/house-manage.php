<?php
$root = dirname(__DIR__) . DIRECTORY_SEPARATOR;
define('PARTIAL_PATH', $root . 'partial' . DIRECTORY_SEPARATOR);
session_start();
?>
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="./static/css/output.css" rel="stylesheet">
  <title>房屋管理｜看房網</title>
</head>
<body>
  <div class="min-h-screen flex">
    <?php require PARTIAL_PATH . 'sidebar.php'; ?>
    <div class="w-full px-4">
      <div class="w-full flex justify-between items-center">
        <span class="text-gray-600 font-bold text-2xl">我刊登的房屋</span>
        <a href="./create-house.php"><button type="button"
          class="mt-2 first-line:text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-base px-5 py-2.5 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">新增房屋</button>
        </a>
      </div>
      <div class="h-screen flex flex-col gap-4 ">
        <a href="#" class="w-full border-2 border-b-4 border-gray-200 rounded-xl hover:bg-gray-50 overflow-hidden">
          <div class="flex flex-row">
            <div class="flex-none w-44 h-36">
              <img src="https://picsum.photos/seed/2/200/200" class="w-full h-full" />
            </div>
            <div class="ml-2 mt-2">
              <p class="text-gray-600 font-bold">帶輕便行李.便可入住！可影片看屋</p>
              <p class="text-gray-400">3房2廳2衛45坪3F/7F電梯大樓</p>
              <p class="text-gray-400">55,000元/月 押金二個月</p>
              <p class="text-gray-400"
                style="display: -webkit-box; -webkit-line-clamp: 2; -webkit-box-orient: vertical; overflow: hidden;">
                溫馨家居家俱齊全.乾淨舒服.生活機能優旁廣闊前港公園.綠地休閒處.福中公園<br>對面有-家樂福.全聯.郵局幼兒園托嬰中心.<br>.樓下有YouBike.百齡國小國中.陽明高中.北士商.公車站｛車位另租&nbsp;}:<br>【屋主出租】:0936-169457李小姐<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Line
                iD:&nbsp;hua3037
                附近有便利商店、傳統市場、百貨公司、公園綠地、學校、醫療機構、夜市。
                本房屋近近劍潭捷運站..公車站、士林夜市公車站、士林運動中心捷運站。</p>
            </div>
          </div>
        </a>
        <a href="#" class="w-full border-2 border-b-4 border-gray-200 rounded-xl hover:bg-gray-50 overflow-hidden">
          <div class="flex flex-row">
            <div class="flex-none w-44 h-36">
              <img src="https://picsum.photos/seed/2/200/200" class="w-full h-full" />
            </div>
            <div class="ml-2 mt-2">
              <p class="text-gray-600 font-bold">帶輕便行李.便可入住！可影片看屋</p>
              <p class="text-gray-400">3房2廳2衛45坪3F/7F電梯大樓</p>
              <p class="text-gray-400">55,000元/月 押金二個月</p>
              <p class="text-gray-400"
                style="display: -webkit-box; -webkit-line-clamp: 2; -webkit-box-orient: vertical; overflow: hidden;">
                溫馨家居家俱齊全.乾淨舒服.生活機能優旁廣闊前港公園.綠地休閒處.福中公園<br>對面有-家樂福.全聯.郵局幼兒園托嬰中心.<br>.樓下有YouBike.百齡國小國中.陽明高中.北士商.公車站｛車位另租&nbsp;}:<br>【屋主出租】:0936-169457李小姐<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Line
                iD:&nbsp;hua3037
                附近有便利商店、傳統市場、百貨公司、公園綠地、學校、醫療機構、夜市。
                本房屋近近劍潭捷運站..公車站、士林夜市公車站、士林運動中心捷運站。</p>
            </div>
          </div>
        </a>
      </div>
    </div>  
  </div>
</body>