## Memo

## model

モデル内のファイルは、テーブル名の単数形のファイル名  
ex)Posts テーブル -> app/Model/Post.php

下記を継承する

```
extends AppModel
```

## controller

テーブル名のままのファイル名を用いる
下記を継承する

```
extends AppController
```

## view

テーブルに対する単数形のフォルダ内に、コントローラーのメソッドと同一のファイルを作成する。
Ex) posts テーブル・Index メソッドの場合, app/View/Post/index.ctp

となる。

## route

```
app/Config/routes.php
```

上記の記述を変更することで、URL も変更することができる

## view のテンプレート

app/View/default.php
が共通しょりが　入っている。
