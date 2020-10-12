<?php  

class Controller_Member_Mypage extends Controller
{
  public function action_index()
  {
    $view = View::forge('temp/index');

    $view->set('head', View::forge('temp/head'));
    $view->set('header', View::forge('member/header'));
    $view->set('content', View::forge('content/mypage'));
    $view->set('footer', View::forge('temp/footer'));

    $view->set_global('title', 'mypage');

    return $view;
  }

  




}

?>