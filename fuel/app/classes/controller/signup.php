<?php 

  use \Model\Post;

  class Controller_Signup extends Controller
  {
    public function action_index()
    {
      $view = View::forge('temp/index');

      $view->set('head', View::forge('temp/head'));   // temp/index上の変数$headに Viewメソッドで生成したオブジェクト temp/head を渡している
      $view->set('header', View::forge('temp/header'));
      $view->set('content', View::forge('content/sign')); // temp/index上の変数$contentに Viewメソッドで生成したオブジェクト content/sign を渡している
      $view->set('footer', View::forge('temp/footer'));

      $view->set_global('title', 'signup form');

      //$result = Post::get_results();
      $view->set_global('data', Post::get_results()); // 変数$content(content/sign)上にある、変数$data に　Postモデルのget_results()メソッドで取得した値を渡している
      
      return $view;
    }
  }

?>