<h2>Add post</h2>

<?php
/*
ヘルパーメソッドの入力フォームを作成
*/
echo $this->Form->create('Category');
// Titleのフィールド
echo $this->Form->input('name');

// 送信ボタン
echo $this->Form->end('Save Post');
?>