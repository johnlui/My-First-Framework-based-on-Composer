<?php
/**
* \HomeController
*/
class HomeController extends BaseController
{
  
  public function home()
  {
    $article = Article::first();
    require dirname(__FILE__).'/../views/home.php';
  }
}