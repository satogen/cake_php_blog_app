<?php
/*
個別投稿ページ
*/
?>
<?php //debug($post); 
?>
<h2><?php echo h($post['Post']['title']); ?></h2>
<p><?php echo h($post['Post']['body']); ?></p>