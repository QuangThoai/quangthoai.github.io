<?php
Class Database
{
  private static $connect;
  /**
   * Method to connect MySQL with PDO
   * @return object
   */
  public static function getInstance()
  {
    $dsn = 'mysql:host='.DB_HOST.'; dbname='.DB_DATABASE.'; charset='.DB_CHARSET;
    $options = [
      PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
      PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
    ];
    if (!isset(self::$connect)) {
      self::$connect = new PDO($dsn, DB_USERNAME, DB_PASSWORD, $options);
    }
    if (self::$connect == false) {die('Connect was failed..');}
    return self::$connect;
  }
}
