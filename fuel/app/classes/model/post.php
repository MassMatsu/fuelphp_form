<?php  

namespace Model;
use \DB;

class Post extends \Model
{
  public static function get_results()  // モデルの場合は static をつける
  {
    $query = DB::query('SELECT count(*) FROM users', DB::SELECT);
    $query->execute()->as_array();
    //var_dump($query);
    return $query;
  }
}

