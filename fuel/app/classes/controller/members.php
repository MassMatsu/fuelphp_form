<?php  

class Controller_Members extends Controller
{
  public function before()
  {
    if(!Auth::check()){
      //Response::redirect(('welcome/index'));
      Response::redirect(('signup/index'));
    }
  }
}