#!/bin/bash

echo -n "フォルダ名を入力してください": 
read str 
echo $str+"フォルダにwordpress環境ファイルを生成しました"

mkdir wp-content/themes/$str/

touch wp-content/themes/$str/style.css
touch wp-content/themes/$str/functions.php
touch wp-content/themes/$str/header.php
touch wp-content/themes/$str/footer.php
touch wp-content/themes/$str/sidebar.php
touch wp-content/themes/$str/index.php
touch wp-content/themes/$str/home.php
touch wp-content/themes/$str/single.php
touch wp-content/themes/$str/page.php