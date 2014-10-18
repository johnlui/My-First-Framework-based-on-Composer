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
    // $this->mail = Mail::to(['ooxx@gmail.com', 'ooxx@qq.com'])
    //                     ->from('MotherFucker <ooxx@163.com>')
    //                     ->title('Fuck Me!')
    //                     ->content('<h1>Hello~~</h1>');

    Redis::set('key','value',3000,'ms');
    echo Redis::get('key');
  }
}