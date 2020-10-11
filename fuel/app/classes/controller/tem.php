<?php 
  class Controller_Tem extends Controller
  {
    public function action_index()
    {
      $view = View::forge('tem/index');

      $view->set('head', View::forge('tem/head'));
      $view->set('header', View::forge('tem/header'));
      //$view->set('content', View::forge('tem/content'));
      $view->set('footer', View::forge('tem/footer'));

      $view->set_global('title', 'FuelPHP form');
      $view->set_global('world', 'world!!');

      return $view;
    }
  }

?>