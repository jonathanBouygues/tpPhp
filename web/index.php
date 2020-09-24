<?php

require_once __DIR__.'/../vendor/autoload.php';

require_once __DIR__.'/../src/BlogBundle/Repository/ArticleRepository.php';

$ar = new ArticleRepository();
$articles = $ar->findAll();

require_once '../src/BlogBundle/Resources/views/home.php';
