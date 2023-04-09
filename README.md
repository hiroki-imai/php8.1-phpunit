# 概要
PHP8.1+PHPUnitのリポジトリテンプレート

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
