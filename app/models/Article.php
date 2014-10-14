<?php
/**
* Article Model
*/
class Article
{
  public static function first()
  {
    $connection = mysql_connect("localhost","root","C4F075C4");
    if (!$connection) {
      die('Could not connect: ' . mysql_error());
    }

    mysql_set_charset("UTF8", $connection);

    mysql_select_db("mffc", $connection);

    $result = mysql_query("SELECT * FROM articles limit 0,1");

    if ($row = mysql_fetch_array($result)) {
      return $row;
    }

    mysql_close($connection);
  }
}