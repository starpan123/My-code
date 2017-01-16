<?php

/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/1/11
 * Time: 17:53
 */
class ProductListController {
  static public function getProductListTable() {
    $header = array('id', 'product', '名称', '修改时间', '操作');
    $result = Product::getList();
    $rows = [];
    foreach ($result as $product) {
//      $operation = array(
//        'data' => array(
//          '#type' => 'link',
//          '#title' => t('edit'),
//          '#href' => "my/$product->pid/edit"
//        )
//      );
      //其中一个链接
      $operations['modify']=array(
        'title'=>'编辑',
        'href'=>"my/$product->pid/edit",
      );
      $operations['version_management']=array(
        'title' =>'版本管理',
        'href'  =>"my/$product->pid/version_management",
      );
      //链接组
      $form['operations'] = array (
        'data' => array (
          '#theme'=>'links',
          '#links' => $operations,
        )
//      $management = array(
//          'data' => array(
//            '#type' => 'link',
//            '#title' => t('版本管理'),
//            '#href' => "my/$product->pid/version_management"
//          )
      );
      $rows[] = array(
        $product->pid,
        $product->product,
        $product->name,
        date('Y-m-d H:i:s',$product->last_update_time),
        $form['operations'],
      );
    }

    return array(
      '#theme' => 'table',
      '#header' => $header,
      '#rows' => $rows,
      //'#empty' => t('没有通知信息!'),
      '#empty' => '没有通知信息！',
    );
  }
}