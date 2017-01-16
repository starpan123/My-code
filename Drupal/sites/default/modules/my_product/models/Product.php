<?php

/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/1/11
 * Time: 17:55
 */
class Product {
  static public function getList() {
    $result = db_select('product', 'p')
      ->fields('p', array('pid', 'product', 'name', 'last_update_time'))
      ->execute();
    return $result;
  }

  static public function getEdit(){

  }
}