<h2>カテゴリ一覧</h2>

<ul>
  <?php foreach ($categories as $category) : ?>
    <li id='category_<?php echo $category['Category']['id'] ?>'>
      <!-- debug でデータを見ることができる -->
      <?php //debug($post);
      ?>
      <!-- h: HTMLをエスケープする関数 -->
      <?php echo h($category['Category']['name']); ?>

      <!-- コントローラーで定義したヘルパーメソッドを使用し、リンクを作成 -->
      <!-- 第一引数がリンクに表示されるテキスト、第二引数がリンク先 -->
      <?php
      /*
   リンクの設定方法
    */
      // echo $this->Html->link($post['Post']['title'], '/posts/view/' . $post['Post']['id']); // cakephpフォルダからの相対パスでのリンク記述
      // echo $this->Html->link($post['Post']['title'], 'http://localhost/blog/posts/view/' . $post['Post']['id']); // 絶対パスでリンク先を記述
      //echo $this->Html->link($category['Category']['name'], array("controller" => "posts", "action" => 'view', $post['Post']['id'])); // 配列でリンク先を記述

      // echo $this->Html->link('編集', array('action' => 'edit', $post['Post']['id'])); // 編集用リンクを追加
      echo $this->Form->postLink(
        '削除',
        array('action' => 'delete', $category['Category']['id']),
        array('confirm' => 'sure?')
      );

      echo $this->Html->link('削除', '#', array('class' => 'delete', 'data-category-id' => $category['Category']['id'])); // 編集用リンクを追加

      ?>
    </li>
  <?php endforeach; ?>
</ul>

<h2>Add Post</h2>
<!-- addページヘの遷移 -->
<?php echo $this->Html->link('Add post', array("action" => "add"));
?>


<script>
  $(function() {
    $('a.delete').click(function(e) {
      if (confirm('sure?')) {
        $.post('/blog/categories/delete/' + $(this).data('category-id'), {}, function(res) {
          $('#category_' + res.id).fadeOut();
        }, "json");
      }
      return false;
    });
  });
</script>