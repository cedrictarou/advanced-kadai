# お問い合わせ検索アプリ

お客様が問い合わせをすることができ、それを検索できる機能を持っています。

## 作成した目的

-   問い合わせをしやすくまた、ミスがないようにするため
-   お客様の問い合わせを検索しやすくするため

## 機能一覧

### お問い合わせページ（'/form'）

-   入力に不具合があるとエラーメッセージを表示する
-   確認ページから問い合わせページに戻っても値を保持している
-   郵便番号を入力したときに自動で住所が入力される
-   ハイフン(-)を自動で入力する
-   英数字を半角にする

### 検索ページ（'/admin'）

-   名前、登録日、性別、メールアドレスで検索することができる
-   複数条件で検索できる
-   検索結果を保持する
-   検索結果が多い時はページを分けている
-   リセットボタンで検索結果をリセットできる

## 使用技術

laravel8
tailwind3

## テーブル設計

contacts テーブル
id:bigint unsigned PRIMARY KEY
fullname:varchar(255) NOT NULL
gender:tinyint NOT NULL (1:男性 2:女性)
email:varchar(255) NOT NULL
postcode:char(8) NOT NULL
address:varchar(255) NOT NULL
building_name:varchar(255)
opinion:text NOT NULL
created_at:timestamp
updated_at:timestamp

## ER 図

index.drawio.png を参照
