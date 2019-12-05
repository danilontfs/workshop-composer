<?php

require_once 'vendor/autoload.php';

use Dotenv\Dotenv;
use Cocur\Slugify\Slugify;

//DONT ENV
if(file_exists('.env')){
  $dotenv = Dotenv::createImmutable(__DIR__);
  $dotenv->load();
}

//SLUG IFY
$slugify = new Slugify();
echo $slugify->slugify('Hello World!');
