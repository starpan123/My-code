<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/1/16
 * Time: 16:00
 */

function my_product_version_add($form,&$form_state,$id){
  $form['id'] = array(
    '#type' => 'value',
    '#value' => $id,
  );

  $form['major'] = array(
    '#type' => 'textfield',
    '#title' => 'major',
    '#defalut' => '',
    '#required' => TRUE,
  );

  $form['minor'] = array(
    '#type' => 'textfield',
    '#title' => 'minor',
    'defalut' => '',
    '#required' => TRUE,
  );

  $form['submit'] = array(
    '#type' => 'submit',
    '#value' => '提交',
  );

  return $form;
}

function my_product_version_add_submit($form,&$form_state){
  $vid = db_insert('product_version')
    ->fields(array(
      'pid' => $form_state['values']['id'],
      'major' => $form_state['values']['major'],
      'minor' => $form_state['values']['minor'],
    ))
    ->execute();

  $update_time = db_update('product')
    ->fields(array(
      'last_update_time' => time(),
    ))
    ->condition('pid',$form_state['values']['id'])
    ->execute();

  drupal_set_message('新增成功');
  drupal_goto("my/my_product_form");
}