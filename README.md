# 日記投稿アプリケーション

毎日の生活を日記にしてまとめ，投稿できるアプリケーション．  
投稿するときはタイトル，内容，カテゴリーを入力する．  
投稿は10件ごとにページネーションされている．  
カテゴリーごとの投稿を閲覧することができる．  

# DEMO
[こちら]()で試すことができます．  

ログインする際には，  
email : test@test.com  
PW : testdemo

# Features

以下にwebアプリの画面を一部紹介する．

投稿一覧画面.  
<img width="800" alt="スクリーンショット 2022-10-28 10 28 09" src="https://user-images.githubusercontent.com/82089820/198439872-5458c005-dcc0-4c72-a91b-0ebd4b0e6d98.png">

投稿作成画面.  
<img width="800" alt="スクリーンショット 2022-10-28 10 30 54" src="https://user-images.githubusercontent.com/82089820/198440243-76709df7-4f2e-4b06-8934-1ff8edc91fa0.png">

カテゴリーごとの投稿一覧画面.  
<img width="800" alt="スクリーンショット 2022-10-28 10 32 02" src="https://user-images.githubusercontent.com/82089820/198440711-9d01ef85-88d4-4d2d-8c2e-226708132f19.png">

# Future Features
- [ ] ユーザごとの投稿ページ
- [ ] いいね機能
- [ ] Twitter連携

# Requirement
(コメント：composer.jsonのrequireを書けばOK！)  
* "php": "^7.2.5|^8.0"
* "fideloper/proxy": "^4.4"
* "laravel/framework": "^6.20.26"
* "laravel/tinker": "^2.5"
* "league/flysystem-aws-s3-v3": "~1.0"

# Installation
(cloud9の~/environmentフォルダに実際にやってみる，serveが起動すればOK！)  
インストールと初期設定
```bash
git clone
cd laravel6-blog
composer install
npm install
npm run dev
cp .env.example .env
php artisan key:generate
```  

.envの中身を設定
```.env
DB_DATABASE={db_name}
DB_USERNAME={db_username}
DB_PASSWORD={db_password}
```

マイグレーションを実行して，サーバを起動
```bash
php artisan migrate:fresh --seed
php artisan serve --port=8080
```

# Note
作成中のアプリのためバグがあった場合には，下記まで連絡をお願いします

# Author
- 作成者：難波洸也
- 所属：九州大学システム情報科学府
- E-mail：namba.koya@arakawa-lab.com

# license
"日記投稿アプリケーション" is under MIT license.