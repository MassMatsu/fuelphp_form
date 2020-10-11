<?php 
  class Controller_Home extends Controller    // homeコントローラ -> 基本的にモデルとやり取り、変数の値を渡せるように用意してビューに返せるようにする
  {
    public function action_index() // viewsのindexファイルに関するアクション　コントローラ名はviewsのアクションで書くファイルのディレクトリ名をつけることが多い
    {
      // ビューファイルに変数を渡す
      // $data = array();
      // $data['username'] = 'Joe';
      // $data['title'] = 'Home';

      // return View::forge('home/index', $data); //　viewsのindexファイルを返している　第二引数に変数を配列で

      $view = View::forge('home/index');          // viewsファイルをインスタンスにして返すことが多い(配列よりも書きやすい)
      $view->set('title', 'Home');
      $view->set('username', 'Joe');

      return $view;

    }                                     
  }
