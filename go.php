<?php
if(!empty($_GET['p']) && !empty($_GET['d'])){
  $next_page = rawurldecode($_GET['p']);
  setcookie("d", $_GET['d'],[
    'expires' => time() + 86400,
    'path' => '/',
    'domain' => 'wavehear.us',
    'secure' => true,
    'samesite' => 'None'
  ]);
  header("Location: $next_page");
}
