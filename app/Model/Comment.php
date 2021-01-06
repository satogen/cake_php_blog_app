<?php
// App Modelの継承
class Comment extends AppModel
{
  public $belongsTo = 'Post';
}
