# ベースイメージ
FROM php:8.2-fpm

# 必要な拡張機能のインストール
RUN apt-get update && apt-get install -y \
    libzip-dev \
    unzip \
    && docker-php-ext-install zip pdo_mysql

# Composerのインストール
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Node.jsとyarnのインストール
RUN curl -sL https://deb.nodesource.com/setup_18.x | bash - && \
    apt-get install -y nodejs && \
    npm install -g yarn

# 作業ディレクトリの設定
WORKDIR /var/www

# アプリケーションコードのコピー
COPY . .

# Composerの依存関係をインストール
RUN composer install --no-dev --optimize-autoloader

# フロントエンドの依存関係をインストール
RUN yarn install && yarn build

# Laravelのストレージとキャッシュの権限設定
RUN chown -R www-data:www-data /var/www/storage /var/www/bootstrap/cache

# エントリーポイントの設定
CMD ["php-fpm"]
