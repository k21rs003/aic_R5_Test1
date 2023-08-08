<?php
session_start();
include('src/header.html');
$action = 'index'; //ホームページ (eps_home)をデフォルト機能とする
if (isset($_GET['do'])) {//index.php?do=に続くパラメータで実行する機能を指定
  $action = $_GET['do'];
}
include('src/' . $action . '.html'); //指定されたファイルを読み込む
include('src/footer.html');  
?>