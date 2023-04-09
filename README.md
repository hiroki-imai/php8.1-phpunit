# SETUP
docker compose up -d --build

# PHPファイルの実行
docker compose exec app php {filename}

# サンプルのテスト実行(tests/以下のXxxTest.phpを全て実行)
docker compose exec app vendor/bin/phpunit tests

# サンプルのテスト実行(ファイル指定)
docker compose exec app vendor/bin/phpunit tests/Unit/Sample/CalculatorTest.php
