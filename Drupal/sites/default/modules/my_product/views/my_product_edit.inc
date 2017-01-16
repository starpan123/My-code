<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/1/11
 * Time: 13:43
 */
function my_product_edit($form,&$form_state,$id){
  $query = db_select('product','p')
    ->fields('p',array('product','name'))
    ->condition('pid',$id)
    ->execute();
  $form['id'] = array(
    '#type' => 'value',
    '#value' => $id,
  );

  foreach ($query as $value) {
    $form['product'] = array(
      '#type' => 'textfield',
      '#title' => 'product',
      '#default_value' => $value->product,
      '#required' => TRUE,
    );

    $form['name'] = array(
      '#type' => 'textfield',
      '#title' => '名称',
      '#default_value' => $value->name,
      '#required' => TRUE,
    );
  }

  $form['submit'] = array(
    '#type' => 'submit',
    '#value' => '提交',
  );

  return $form;
}

function my_product_edit_validate($form,&$form_state){
}

function my_product_edit_submit($form,&$form_state){
  $num_updated = db_update('product')
    ->fields(array(
      'product' => $form_state['values']['product'],
      'name' => $form_state['values']['name'],
      'last_update_time' => time(),
    ))
    ->condition('pid',$form_state['values']['id'])
    ->execute();
  drupal_set_message('保存成功');
  drupal_goto('my/my_product_form');
}
