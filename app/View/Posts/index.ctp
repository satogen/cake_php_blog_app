<h2>記事一覧</h2>
<ul>
  <?php foreach ($posts as $post) : ?>
    <!-- debug でデータを見ることができる -->
    <?php //debug($post); 
    ?>
    <!-- h: HTMLをエスケープする関数 -->
    <li><?php echo h($post['Post']['title']); ?></li>
  <?php endforeach; ?>
</ul>