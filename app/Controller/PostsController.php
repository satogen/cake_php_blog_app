<?php

class PostsController extends AppController
{
  // Scaffoldのテンプレ
  // public $scaffold;

  // html, formを用いることを宣言
  public $helpers = array('Html', 'Form');

  // 記事一覧　blog/posts/
  public function index()
  {
    // find：データを取ってくる
    // sets()の第一引数には変数名が入る。今回は、postsに入れるということになる
    $this->set('posts', $this->Post->find('all'));
    // タイトルの設定
    $this->set('title_for_layout', '記事一覧');
  }
  public function add()
  {
  }
}
