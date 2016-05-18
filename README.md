
这是自己在学习 PHP 的 mongodb 扩展中的一些笔记。它包括了 CRUD 等最常见的操作的使用方法。每一个 demo 都是对每一种操作的详细介绍。

## 如何使用

首先，安装 PHP 的 mongodb 驱动。可以从官网下载 [mongodb-1.1.6.tgz](http://pecl.php.net/package/mongodb)。

    phpize
    ./configure

然后，下载 PHP 官方提供的基于该驱动的高级封装库 [mongo-php-library](https://github.com/mongodb/mongo-php-library)

    composer require mongodb/mongodb

在浏览器中直接访问每一个 demo 就可以了。

## 介绍

在学习 mongodb 过程中，建议还是先学习它自身提供的 shell 操作，然后再使用 PHP 或其他语言对 mongodb 进行操作。这样子可以对照了来学习，也利于理解。

## MongoDB\Client

demo1 / demo2

## Methods of selecting Collection

demo03

## InsertOne and InsertMany

demo04

## Find/FindOne/Count/Distinct

demo05

## Delete/DeleteMany

demo06

## Aggregate

demo07

## UpdateOne/UpdateMany/replaceOne

demo08

## FindOneAndReplace/FindOneAndUpdate/FindOneAndDelete

demo09

## CreateIndex/ListIndexes/DropIndex

demo10

## BulkWrite

demo11

## BSON Conversion (Type Maps)

demo12

## UserFul Links

- [MongoDB PHP Library Document](http://mongodb.github.io/mongo-php-library/)
- [the-little-mongodb-book](https://github.com/ilivebox/the-little-mongodb-book)
- [Driver Architecture and Internals](http://au1.php.net/manual/zh/mongodb.overview.php)