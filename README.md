# An interactive shell for Yii 2

[![Latest Stable Version](https://poser.pugx.org/svkurowski/yii2-shell/version)](https://packagist.org/packages/svkurowski/yii2-shell)
[![Total Downloads](https://poser.pugx.org/svkurowski/yii2-shell/downloads)](https://packagist.org/packages/svkurowski/yii2-shell)
[![License](https://poser.pugx.org/svkurowski/yii2-shell/license)](https://packagist.org/packages/svkurowski/yii2-shell)

This extension for [Yii framework 2.0](http://www.yiiframework.com) applications provides access to an interactive shell for development and debugging.
It wraps the awesome [psysh](http://psysh.org/) application for easy access via the Yii console.

The extension is released under the MIT License.

# Installation

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

Either run

```
php composer.phar require --dev --prefer-dist svkurowski/yii2-shell
```

or add

```
"svkurowski/yii2-shell": "~1.0.0"
```

to the `require-dev` section of your `composer.json`.


# Usage

After installation, you will be able to run the interactive shell via command line:

```
# Change path to your application's root directory
cd path/to/myapp

# Start the interactive shell
./yii shell
```

You can access the application object using `$this` or `Yii::$app`. Additionally you have access to all your and your dependencies' classes.

See [psysh's website](http://psysh.org/#features) for a list of available features.
