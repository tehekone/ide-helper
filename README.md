# Open Swoole IDE Helper

[![Latest Stable Version](https://img.shields.io/packagist/v/openswoole/ide-helper.svg)](https://packagist.org/packages/openswoole/ide-helper)
[![License](https://poser.pugx.org/openswoole/ide-helper/license)](LICENSE)
[![GitHub stars](https://img.shields.io/github/stars/openswoole/swoole-src)](https://github.com/openswoole/swoole-src/stargazers)
[![Twitter](https://img.shields.io/twitter/url/https/twitter.com/openswoole.svg?style=social&label=Follow%20%40OpenSwoole)](https://twitter.com/openswoole)


This package contains IDE help files for [Open Swoole](https://github.com/openswoole/swoole-src). You may use it in your IDE to provide accurate autocompletion.

<img width="800" alt="openswoole-ide-helper" src="https://user-images.githubusercontent.com/313478/145558998-eecf96c7-08a1-4119-a1eb-2141436d4521.png">

## Install

You can add this package to your project using [Composer](https://getcomposer.org):

```bash
composer require openswoole/ide-helper:@dev
# or you can install a specific version, like:
composer require openswoole/ide-helper:~4.8.1
```

It's better to install this package on only development systems by adding the `--dev` flag to your Composer commands:

```bash
composer require --dev openswoole/ide-helper:@dev
# or you can install a specific version, like:
composer require --dev openswoole/ide-helper:~4.8.1
```

## Fix code style before commit

```bash
./vendor/bin/php-cs-fixer fix
```

## Notes

There are two types of worker processes in use when starting a Swoole server:

1. `event worker`. All requests (HTTP, WebSocket, TCP, UDP, etc.) are handled by this type of processes. It supports coroutine by default; many I/O operations can run asynchronously in it.
2. `task worker`. This type of processes was introduced to handle blocking I/O operations in PHP. Ideally, it should always work synchronously, although it also supports coroutine and allows asynchronous processing (since Swoole v4.2.12+).

## Credits

* [Demin](https://github.com/deminy)
