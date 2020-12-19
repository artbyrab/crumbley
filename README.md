# Crumbley

Crumbley is a super simple PHP breadcrumb library. You create crumbs, add them to your breadcrumbs then display them in your app.

## Requirements

* PHP 7

## Features

* Breadcrumbs!
    * Just pure fine grained and flexible crumbs of bready goodness!

## Installation

The reccomended way to install is via Composer.

Either install in the project via terminal:

```json
$ composer require artbyrab/crumbly:~1.0
```

or add it to your composer.json file:

```json
"artbyrab/crumbly": "~1.0"
```

## Usage

### 1) Include crumbly into your app:

```php
use artbyrab\crumbley\Breadcrumbs;
use artbyrab\crumbley\Crumb;
```

### 2) Create your breadcrumbs and add your crumbs

```php
$breadcrumbs = new Breadcrumbs();

$breadcrumbs->add(
    (new Crumb())->addLabel('Home')
)->add(
    (new Crumb())->addLabel('Blog')->addUrl('blog')
)->addCurrent(
    (new Crumb())->addLabel('Hello World')
);
```

### 3) Render your breadcrumbs

```php
<?php foreach ($breadcrumbs->getCrumbs() as $crumb) { ?>
    <?php if ($crumb->isActive() == true) { ?>
        <li>
            <a href="http://www.yourwebsite.com<?=$crumb->getUrl();?>"><?=$crumb->getLabel();?></a>
            <span class="separator">></span>
        </li>
    <?php }; ?>
    <?php if ($crumb->isActive() == false) { ?>
        <li>
            <?=$crumb->getLabel()?>
        </li>
    <?php }; ?>
<?php }; ?>
```

# Resources

* [Extending Guide](documents/extending.md)
* [Running Tests](documents/running-tests.md)
* [Code Checks](documents/code-checks.md)