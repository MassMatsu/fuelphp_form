<?php 

  //use \Model\Post;

  class Controller_Signup extends Controller
  {
    const PASS_LENGTH_MIN = 6;
    const PASS_LENGTH_MAX = 20;

    public function action_index()
    {
      $error = '';
      $formData = '';

      $form = Fieldset::forge('signupform');  // Fieldsetクラス - formの生成（formクラス）やバリデーション（validationクラス）をしてくれる。 バリデーションだけやって欲しい場合は validationクラスだけ使う

      $form->add('username', 'ユーザー名', array('type' => 'text', 'placeholder' => 'username', 'autocomplete' => 'off'))    // name属性, label, type属性, placeholder あとは ->add_rule() でバリデーションを付けていく
          ->add_rule('required')
          ->add_rule('min_length', 1)
          ->add_rule('max_length', 255);

      $form->add('email', 'Email', array('type' => 'text', 'placeholder' => 'email'))
          ->add_rule('required')
          ->add_rule('min_length', 1)
          ->add_rule('max_length', 255)
          ->add_rule('valid_email');
          
      $form->add('password', 'Password', array('type' => 'password', 'placeholder' => 'password'))
          ->add_rule('required')
          ->add_rule('min_length', self::PASS_LENGTH_MIN)   // クラス定数を使う場合は self::
          ->add_rule('max_length', self::PASS_LENGTH_MAX);

      $form->add('password_re', 'Password（再入力）', array('type' => 'password', 'placeholder' => 'password（再入力）'))
          ->add_rule('match_field', 'password')     // ->add_rule(match_field, ) は使うときは必ず最初につける
          ->add_rule('required')
          ->add_rule('min_length', self::PASS_LENGTH_MIN)
          ->add_rule('max_length', self::PASS_LENGTH_MAX);

      $form->add('submit', '', array('type' => 'submit', 'value' => 'sign up', 'class' => 'signup__btn'));

      // Input::method() でHTTPメソッドが返ってくるので、POSTかどうかを確認
      if(Input::method() === 'POST'){

        $val = $form->validation();   // $formインスタンスのvalidation()メソッドでバリデーションインスタンスを取得
        if($val->run()){
          $formData = $val->validated();  // validatedメソッドで、バリデーションされた入力情報を変数$formDataに格納

          $auth = Auth::instance();
          if($auth->create_user($formData['username'], $formData['password'], $formData['email'])){
            // メッセージ格納
            Session::set_flash('sucMsg', 'ユーザー登録が完了しました');
            // ログイン認証用のユーザー情報を格納
            Session::set('username', $formData['username']);
            Session::set('email', $formData['email']);
            //Session::set('password', $formData['password']);

            if(Auth::login($formData['username'], $formData['password'])){
             
              // リダイレクト
              Response::redirect('member/mypage');
            }else{
              // エラー格納
              $error = $val->error();   // エラー内容を変数に格納
              // メッセージ格納
              Session::set_flash('errMsg', 'ユーザー登録に失敗しました。時間を置いてから再度やり直してください');    
            }
              
          }else{
            // エラー格納
            $error = $val->error();   // エラー内容を変数に格納
            // メッセージ格納
            Session::set_flash('errMsg', 'ユーザー登録に失敗しました。時間を置いてから再度やり直してください');  
          }
        }else{
          // エラー格納
          $error = $val->error();   // エラー内容を変数に格納
          // メッセージ格納
          Session::set_flash('errMsg', 'ユーザー登録に失敗しました。時間を置いてから再度やり直してください');
        }
        // フォームにPOSTされた値をセット
        $form->repopulate();
      }

      $view = View::forge('temp/index');

      $view->set('head', View::forge('temp/head'));   // temp/index上の変数$headに Viewメソッドで生成したオブジェクト temp/head を渡している
      $view->set('header', View::forge('temp/header'));
      $view->set('content', View::forge('content/sign')); // temp/index上の変数$contentに Viewメソッドで生成したオブジェクト content/sign を渡している
      $view->set('footer', View::forge('temp/footer'));

      $view->set_global('title', 'signup form');

      $view->set_global('signupform', $form->build(''), false); // $form->build('')で入力フォームのHTML生成（引数は空文字）、それが変数$signupformに入る。第三引数は false HTMLのタグのサニタイズ防止
      $view->set_global('error', $error);

      // $view->set_global('formData', $formData);
      
      //$result = Post::get_results();
      //$view->set_global('data', Post::get_results()); // 変数$content(content/sign)上にある、変数$data に Postモデルのget_results()メソッドで取得した値を渡している
      
      return $view;
    }
  }

?>