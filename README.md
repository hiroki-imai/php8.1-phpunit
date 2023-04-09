# 概要
PHP8.1+PHPUnitのリポジトリテンプレート

## テンプレートを利用して自分用のリポジトリを作成
1. Use this template > Create a new repository
2. Repository name入力 -> privateを選択 -> Create repository from template
3. `{アカウントID}/{Repository name}` が作成されるのでgit clone

# SETUP
1. docker compose up -d --build
2. docker compose exec app composer install

# PHPファイルの実行
- docker compose exec app php {filename}

# サンプルのテストを実行
## tests/以下の全てのXxxTest.php
- docker compose exec app vendor/bin/phpunit tests

## ファイルを指定
- docker compose exec app vendor/bin/phpunit tests/Unit/Sample/CalculatorTest.php
