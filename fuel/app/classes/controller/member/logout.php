<?php 
class Controller_Member_logout extends Controller
{
  public function action_index()
  {
    // ログイン認証チェック
    if(!Auth::check()){
      Response::redirect('signup/index');
    }


  // if ($user = Auth::validate_user(Session::get('username'), Session::get('password')))
  // {
  //   // $name と $pass との組み合わせが検証されたならユーザーの表示名を印字
  //   echo $user['username'].'is here!';
  // }
    // ログアウト！！
    Auth::logout();
    
    // if(Auth::logout()){
    //   Response::redirect('signup/index');
    // }else{
      //Response::redirect('member/mypage');
    //   echo 'ログアウトできません';
    // }

    // ログイン認証再確認でリダイレクト
    if(!Auth::check()){
      //Session::destroy();
      Session::set_flash('sucMsg', 'ログアウトしました');
      Response::redirect('login/index');
    }

    // $view = View::forge('temp/index');

    // $view->set('head', View::forge('temp/head'));
    // $view->set('header', View::forge('member/header'));
    // $view->set('content', View::forge('content/mypage'));
    // $view->set('footer', View::forge('temp/footer'));

    // $view->set_global('title', 'logout');

    // return $view;
  }


}
?>