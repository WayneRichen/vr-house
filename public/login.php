<?php
$root = dirname(__DIR__) . DIRECTORY_SEPARATOR;
define('PARTIAL_PATH', $root . 'partial' . DIRECTORY_SEPARATOR);
?>
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="./static/css/output.css" rel="stylesheet">
  <title>帳號登入｜看房網</title>
</head>
<body>
  <nav class="min-w-screen-lg mx-auto flex justify-between items-center fixed z-10">
    <a href="./index.php" class="logo">
      <img src="./static/image/logo.png" class="h-28" height="100%">
    </a>
  </nav>
  <div class="min-h-full flex items-center justify-center py-12 px-4 sm:px-6 lg:px-8">
    <div class="max-w-md w-full space-y-8">
      <h2 class="mt-6 text-center text-3xl font-extrabold text-gray-900">帳戶登入</h2>
      <form class="mt-8 space-y-6" action="./login.php" method="POST">
        <div class="max-w-screen-lg mx-auto text-center flex justify-center items-center">
          <input type="radio" id="type1" name="type" value="tenant" required>
          <label for="type1" class="text-gray-600 font-bold">房客登入</label>
          <input type="radio" id="type2" name="type" value="landlord" class="ml-8">
          <label for="type2" class="text-gray-600 font-bold">房東登入</label>
        </div>
        <div class="rounded-md shadow-sm -space-y-px">
          <div>
            <input id="email-address" name="email" type="email" autocomplete="email" required
              class="appearance-none rounded-none relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 rounded-t-md focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm"
              placeholder="電子郵件地址">
          </div>
          <div>
            <input id="password" name="password" type="password" autocomplete="current-password" required
              class="appearance-none rounded-none relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 rounded-b-md focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm"
              placeholder="密碼">
          </div>
        </div>
        <div>
          <button type="submit"
            class="group relative w-full flex justify-center py-2 px-4 border border-transparent text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
            登入
          </button>
        </div>
      </form>
    </div>
  </div>
</body>