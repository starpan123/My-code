<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/1/11
 * Time: 14:52
 */
function my_product_version_management($form,&$form_state,$id){
  $version = db_select('product_version','v')
    ->fields('v',array('major','minor'))
    ->condition('pid',$id)
    ->execute();
  $rows = [];
  foreach ($version as $value){
//    $form['version'] = array(
//      '#type' => 'checkbox',
//      '#title' => $value->major,
//    );
    $rows[] = $value->major;
  }
    $form['version_add'] = array(
      '#type' => 'link',
      '#title' => '添加新增版本',
      '#href' => "my/$id/version_add",
    );

    $form['version'] = array(
      '#type' => 'checkboxes',
      '#options' => drupal_map_assoc($rows),
    );
  return $form;
}