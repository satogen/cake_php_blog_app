<h2>記事一覧</h2>
<ul>
  <?php foreach ($posts as $post) : ?>
    <li id='post_<?php echo $post['Post']['id'] ?>'>
      <!-- debug でデータを見ることができる -->
      <?php //debug($post);
      ?>
      <!-- h: HTMLをエスケープする関数 -->
      <!-- <li><?php// echo h($post['Post']['title']); ?></li> -->

      <!-- コントローラーで定義したヘルパーメソッドを使用し、リンクを作成 -->
      <!-- 第一引数がリンクに表示されるテキスト、第二引数がリンク先 -->
      <?php
      /*
   リンクの設定方法
    */
      // echo $this->Html->link($post['Post']['title'], '/posts/view/' . $post['Post']['id']); // cakephpフォルダからの相対パスでのリンク記述
      // echo $this->Html->link($post['Post']['title'], 'http://localhost/blog/posts/view/' . $post['Post']['id']); // 絶対パスでリンク先を記述
      echo $this->Html->link($post['Post']['title'], array("controller" => "posts", "action" => 'view', $post['Post']['id'])); // 配列でリンク先を記述

      echo $this->Html->link('編集', array('action' => 'edit', $post['Post']['id'])); // 編集用リンクを追加
      // echo $this->Form->postLink(
      //   '削除',
      //   array('action' => 'delete', $post['Post']['id']),
      //   array('confirm' => 'sure?')
      // );

      echo $this->Html->link('削除', '#', array('class' => 'delete', 'data-post-id' => $post['Post']['id'])); // 編集用リンクを追加

      ?>
    </li>
  <?php endforeach; ?>
</ul>

<h2>Add Post</h2>
<!-- addページヘの遷移 -->
<?php echo $this->Html->link('Add post', array("controller" => "posts", "action" => "add")); ?>


<script>
  $(function() {
    $('a.delete').click(function(e) {
      if (confirm('sure?')) {
        $.post('/blog/posts/delete/' + $(this).data('post-id'), {}, function(res) {
          $('#post_' + res.id).fadeOut();
        }, "json");
      }
      return false;
    });
  });
</script>