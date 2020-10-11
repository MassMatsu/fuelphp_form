<?php 
  class Controller_Signup extends Controller
  {
    public function action_index()
    {
      $view = View::forge('temp/index');

      $view->set('head', View::forge('temp/head'));
      $view->set('header', View::forge('temp/header'));
      //$view->set('content', View::forge('tem/content'));
      $view->set('footer', View::forge('temp/footer'));

      $view->set_global('title', 'signup form');
      
      return $view;
    }
  }

?>