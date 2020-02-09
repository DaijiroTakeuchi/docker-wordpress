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
touch wp-content/themes/$str/sidebar-archives.php
touch wp-content/themes/$str/sidebar-categories.php
touch wp-content/themes/$str/archives.php
touch wp-content/themes/$str/index.php
touch wp-content/themes/$str/home.php
touch wp-content/themes/$str/single.php
touch wp-content/themes/$str/page.php
touch wp-content/themes/$str/front-page.php
touch wp-content/themes/$str/loop-main.php
touch wp-content/themes/$str/search.php
mkdir wp-content/themes/$str/images
mkdir wp-content/themes/$str/images-content
mkdir wp-content/themes/$str/scripts