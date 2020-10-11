<?php  

namespace Model;

class Post extends \Model
{
  public static function get_results()  // モデルの場合は static をつける
  {
    return 'レコード';
  }
}

