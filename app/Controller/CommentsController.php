<?php

class CommentsController extends AppController
{
  // Scaffoldのテンプレ
  // public $scaffold;

  // html, formを用いることを宣言
  // viewの中で$this->Html, $this->Formが使えるようになる
  public $helpers = array('Html', 'Form');

  public function add()
  {
    // リクエストされたデータを表示
    // debug($this->request->data);
    // Postメソッドの場合
    if ($this->request->is('post')) {
      // 保存処理がされた場合
      if ($this->Comment->save($this->request->data)) {
        $this->Session->setFlash('Success!'); // 保存成功
        $this->redirect(array(
          'controller' => 'posts', "action" => "view",
          $this->data['Comment']['post_id']
        )); // indexアクションにリダイレクト
      } else {
        $this->Session->setFlash('failed!'); // 保存失敗
      }
    }
  }

  public function delete($id)
  {
    if ($this->request->is('get')) {
      throw new MethodNotAllowedException();
    } else {
      if ($this->request->is('ajax')) {
        if ($this->Comment->delete($id)) {
          $this->autoRender = false;
          $this->autoLayout = false;
          $response = array('id' => $id);
          $this->header('Content-Type: application/json');
          echo json_encode(($response));
          exit();
        }
      }
      $this->redirect(array('controller' => 'posts', 'action' => 'index'));
    }
  }
}
