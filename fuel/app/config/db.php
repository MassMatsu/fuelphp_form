<?php
/**
 * Fuel is a fast, lightweight, community driven PHP 5.4+ framework.
 *
 * @package    Fuel
 * @version    1.8.2
 * @author     Fuel Development Team
 * @license    MIT License
 * @copyright  2010 - 2019 Fuel Development Team
 * @link       https://fuelphp.com
 */

/**
 * -----------------------------------------------------------------------------
 *  Global database settings
 * -----------------------------------------------------------------------------
 *
 *  Set database configurations here to override environment specific
 *  configurations
 *
 */

return array(
  'active' => 'pdo',     // DBの選択

  'pdo' => array(
      'type'           => 'pdo',
      'connection'     => array(
          'dsn'        => 'mysql:host=localhost;dbname=framework',
          'username'       => 'root',
          'password'       => 'root',
          'persistent'     => false,
          'compress'       => false,
      ),
      'table_prefix' => '',
      'charset'      => 'utf8',
      'caching'      => false,
      'profiling'    => true,
      'identifier'   => '`',        // sql文に予約語と同じワードが使われたときにエラー回避
  ),

  'mysqli' => array(
      'type'           => 'mysqli',
      'connection'     => array(
          'hostname' => 'localhost',  // ココから
          'database' => 'framework',
          'username'       => 'root',
          'password'       => 'root',   // ココまで
          'persistent'     => false,
          'compress'       => false,
      ),
      'table_prefix' => '',
      'charset'      => 'utf8',   // ココ
      'caching'      => false,
      'profiling'    => true,
      'identifier'   => '`',
  ),
);
