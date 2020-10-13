<?php  

//use \Model\Post;

class Controller_Member_Mypage extends Controller
{
  public function action_index()
  {

    if(!Auth::check()){
      //Response::redirect(('welcome/index'));
      Response::redirect(('signup/index'));
    }

    $view = View::forge('temp/index');

    $view->set('head', View::forge('temp/head'));
    $view->set('header', View::forge('member/header'));
    $view->set('content', View::forge('content/mypage'));
    $view->set('footer', View::forge('temp/footer'));

    $view->set_global('title', 'mypage');
    //$view->set_global('total_member', Post::get_results());

    return $view;
  }
}

?>