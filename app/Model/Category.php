<?php
// App Modelの継承
class Category extends AppModel
{
  // public $hasMany = "Post";
  // 
  public $hasAndBelongsToMany = 'Post';
  public $validate = array(
    'name' => array(
      'rule' => 'notBlank',
      'message' => "空です"
    ),
  );
}
