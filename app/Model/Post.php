<?php
// App Modelの継承
class Post extends AppModel
{
  public $hasMany = 'Comment';

  // 入力欄のバリデーションの設定
  public $validate = array(
    'title' => array(
      'rule' => 'notBlank',
      'message' => "空です"
    ),
    'body' => array(
      'rule' => 'notBlank',
      'message' => "空です"
    )
  );
}
