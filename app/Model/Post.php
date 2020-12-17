<?php
// App Modelの継承
class Post extends AppModel
{
  // 入力欄のバリデーションの設定
  public $validate = array(
    'title' => array(
      'rule' => 'notEmpty',
      'message' => "空です"
    ),
    'body' => array(
      'rule' => 'notEmpty',
      'message' => "空です"
    )
  );
}
