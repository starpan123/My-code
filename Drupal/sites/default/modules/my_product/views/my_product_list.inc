<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/1/10
 * Time: 17:24
 */

function my_product_form($form,&$form_state) {
  $form['add'] =array(
    '#type' => 'link',
    '#title' => '添加新的product',
    '#href' => 'my/add',
  );
  $form['table'] = ProductListController::getProductListTable();
  return $form;
}
?>