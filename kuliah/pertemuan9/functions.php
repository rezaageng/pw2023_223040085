<?php
define('BASE_URL', '/pw2023_223040085/kuliah/pertemuan9/');

function dd($data)
{
  echo '<pre>';
  die(var_dump($data));
  echo '</pre>';
  die();
}

function uriIs($uri)
{
  return $_SERVER['REQUEST_URI'] === BASE_URL . $uri ? 'active' : '';
}
