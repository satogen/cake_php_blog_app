<h2>Edit Post</h2>

<?php
echo $this->Form->create('Post', array('url' => 'edit'));
echo $this->Form->input("title");
echo $this->Form->input("body", array('rows' => 3));
// category
echo $this->Form->input('category_id');
echo $this->Form->end("Save!");
?>