<h2>Add post</h2>

<?php
/*
ヘルパーメソッドの入力フォームを作成
*/
echo $this->Form->create('Post');
// Titleのフィールド
echo $this->Form->input('title');
// Bodyのタイトル
echo $this->Form->input('body', array('rows' => 3));
// 送信ボタン
echo $this->Form->end('Save Post');
?>