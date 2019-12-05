<?php

require_once 'vendor/autoload.php';

use Dotenv\Dotenv;

if(file_exists('.env')){
  $dotenv = Dotenv::createImmutable(__DIR__);
  $dotenv->load();
}

echo "<pre>"; print_r($_ENV); echo "</pre>"; exit;
