<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/1/16
 * Time: 10:27
 */
function my_product_add($form,&$form_state){
  $form['product'] = array(
    '#type' => 'textfield',
    '#title' => 'product',
    '#default_value' => '',
    '#required' => TRUE,
  );

  $form['name'] = array(
    '#type' => 'textfield',
    '#title' => '名称',
    '#default_value' => '',
    '#required' => TRUE,
  );

  $form['submit'] = array(
    '#type' => 'submit',
    '#value' => '提交',
  );

  return $form;
}

function my_product_add_submit($form,&$form_state){
  $pid = db_insert('product')
    ->fields(array(
      'product' => $form_state['values']['product'],
      'name' => $form_state['values']['name'],
      'last_update_time' => time(),
      //'created' => REQUEST_TIME,
    ))
    ->execute();
  drupal_set_message('保存成功');
  drupal_goto('my/my_product_form');
}