# laravel skelton

## 概要

Laravel でローカル開発を始めるのに必要な土台環境です。  
参照先のリポジトリを教材向けに編集しています。

[laravel-skeleton](https://github.com/empty-canvas/laravel-skeleton)

## 構築される環境の構成・特色

* 構成
    * php 7.4
    * nginx
    * mysql 5.7

## 使い方

### 初回

```
(local)$ cd docker
(local)$ docker-compose up -d
(local)$ docker-compose exec php bash
(docker)$ composer create-project "laravel/laravel=8.*" .
```

### 二回目以降

```
(local)$ cd docker
(local)$ docker-compose up -d
```
