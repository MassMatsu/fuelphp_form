<?php 

//use \Model\Post;

class Controller_login extends Controller
{
  const PASS_LENGTH_MIN = 6;
  const PASS_LENGTH_MAX = 20;

  public function action_index()
  {
    $error = '';
    $formData = '';

    $form = Fieldset::forge('loginform');

    $form->add('email', 'Email', array('type' => 'text', 'placeholder' => 'email'))
        ->add_rule('required')
        ->add_rule('min_length', 1)
        ->add_rule('max_length', 255)
        ->add_rule('valid_email');
    
    $form->add('password', 'Password', array('type' => 'password', 'placeholder' => 'password'))
        ->add_rule('required')
        ->add_rule('min_length', self::PASS_LENGTH_MIN)   // クラス定数を使う場合は self::
        ->add_rule('max_length', self::PASS_LENGTH_MAX);

    $form->add('submit', '', array('type' => 'submit', 'value' => 'log in', 'class' => 'login__btn'));


    if(Input::method() === 'POST'){

      $val = $form->validation();

      if($val->run()){
        $formData = $val->validated(); // バリデーションされた入力値を全て返す

        if(Auth::login($formData['email'], $formData['password'])){
          Session::set_flash('sucMsg', 'ログインしました');
          Response::redirect('member/mypage');
        }else{
           // エラー格納
           $error = $val->error();   // エラー内容を変数に格納
           // メッセージ格納
           Session::set_flash('errMsg', 'ログインに失敗しました。時間を置いてから再度やり直してください');    
        } 
      }else{
         // エラー格納
         $error = $val->error();   // エラー内容を変数に格納
         // メッセージ格納
         Session::set_flash('errMsg', 'ログインに失敗しました。時間を置いてから再度やり直してください');    
      }
      //
      $form->repopulate();
    }

    $view = View::forge('temp/index');

    $view->set('head', View::forge('temp/head'));
    $view->set('header', View::forge('temp/header'));
    $view->set('content', View::forge('content/login'));
    $view->set('footer', View::forge('temp/footer'));

    $view->set_global('title', 'login form');
    $view->set_global('loginform', $form->build(''), false);
    $view->set_global('error', $error);

    return $view;

  }
}