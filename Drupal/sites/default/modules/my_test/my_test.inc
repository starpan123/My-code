<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/1/10
 * Time: 13:45
 */
function my_test_form($form,&$form_state){
  $form['name'] = array(
    '#type' => 'textfield',
    '#title' => '姓名',
    '#default_value' => '',
    '#maxlength' => 64,
    '#required' => true,
  );
  $form['sex'] = array(
    '#type' => 'radios',
    '#title' => '性别',
    '#options' => ['男','女'],
  );
  $form['notification'] = array(
    '#theme' => 'table',
    '#header' => array('aa','bb'),
    '#rows' => [],//array(['a','b'],['c','d']),
    '#empty' => t('没有通知信息！'),
  );

  $form['submit'] = array(
    '#type' => 'submit',
    '#value' => '提交',
  );
  return $form;
}

function my_test_form_validate($form,&$form_state){
  if(strlen($form_state['values']['name'])>20){
    form_set_error('name','请输入合法名称');
  }
}

function my_test_form_submit($form,&$form_state){
  //todo
}