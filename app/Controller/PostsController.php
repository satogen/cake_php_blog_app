<?php

class PostsController extends AppController
{
  // Scaffoldのテンプレ
  // public $scaffold;

  // html, formを用いることを宣言
  // viewの中で$this->Html, $this->Formが使えるようになる
  public $helpers = array('Html', 'Form');

  /*
  記事一覧　
  URL: blog/posts/
  View: app/View/posts/index.ctp
  */
  public function index()
  {
    // // 詳細に絞り込むための引数
    // // https://api.cakephp.org/2.10/class-Model.html#_find
    // $params = array(
    //   'order' => 'modified desc',
    //   'limit' => 2
    // );
    // $this->set('posts', $this->Post->find('all', $params));

    // find：データを取ってくる
    // sets()の第一引数には変数名が入る。今回は、postsに入れるということになる
    $this->set('posts', $this->Post->find('all'));

    // タイトルの設定
    $this->set('title_for_layout', '記事一覧');
  }

  /*
  個別投稿ページ
  URL: blog/posts/view/<pk>
  View: app/View/posts/view.ctp
  */
  public function view($id = null)
  {
    // 受け取ったID
    $this->Post->id = $id;
    // 読み込み先を取得
    $this->set('post', $this->Post->read());
  }

  public function add()
  {
    // リクエストされたデータを表示
    // debug($this->request->data);
    // Postメソッドの場合
    if ($this->request->is('post')) {
      // 保存処理がされた場合
      if ($this->Post->save($this->request->data)) {
        $this->Session->setFlash('Success!'); // 保存成功
        $this->redirect(array("action" => "index")); // indexアクションにリダイレクト
      } else {
        $this->Session->setFlash('failed!'); // 保存失敗
      }
    }
  }
}
