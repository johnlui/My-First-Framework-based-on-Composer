<?php
/**
* \HomeController
*/
class HomeController extends BaseController
{
  
  public function home()
  {
    $this->view = View::make('home')->with('article',Article::first())
                                    ->withTitle('MFFC :-D')
                                    ->withFuckMe('OK!');
  }
}