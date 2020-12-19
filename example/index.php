<?php
require ('../vendor/autoload.php');

ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

use artbyrab\crumbley\Breadcrumbs;
use artbyrab\crumbley\Crumb;

$breadcrumbs = new Breadcrumbs();

$breadcrumbs->add(
    (new Crumb())->addLabel('Home')
)->add(
    (new Crumb())->addLabel('Blog')->addUrl('blog')
)->addCurrent(
    (new Crumb())->addLabel('Hello World')
);

?>

<!doctype html>

<html lang="en">
<head>
    <meta charset="utf-8">

    <title>Crumbley</title>
    <meta name="description" content="Crumbley">
    <meta name="author" content="artbyrab">

    <style>
        body {
            background:SeaShell;
            color:DarkSlateGrey;
            font-family:Tahoma, Geneva, sans-serif;
        }

        a:link, 
        a:hover,
        a:visited {
            color:SlateBlue;
            text-decoration:none;
        }

        a:hover {
            color:DarkSlateBlue;
            text-decoration:underline;
        }

        h1, h2, h3, h4, h5, h6 {
            color:RosyBrown;
        }

        .content {
            width:800px;
            margin:0px auto;
        }

        .breadcrumbs {
            font-style:italic;
            font-size:14px;
            text-align:center;
        }

        .breadcrumbs ul {
            list-style-type:none;
            padding:0px;
            margin:0px;
        }

        .breadcrumbs li {
            display:inline;
        }

        pre {
            background:LightGreen;
            padding:20px;
            font-family:monospace;
        }
    </style>
</head>
    <body>
        <div class="content">
            <h1>Crumbly</h1>
            <h2>A PHP breadcrumbs library</h2>
            <p>This is an example of Crumbly:</p>
            <br />
            <div class="breadcrumbs">
                <?php foreach ($breadcrumbs->getCrumbs() as $crumb) { ?>
                    <?php if ($crumb->isActive() == true) { ?>
                        <li>
                            <a href="<?=$crumb->getUrl();?>"><?=$crumb->getLabel();?></a>
                            <span class="separator">></span>
                        </li>
                    <?php }; ?>
                    <?php if ($crumb->isActive() == false) { ?>
                        <li>
                            <?=$crumb->getLabel()?>
                        </li>
                    <?php }; ?>
                <?php }; ?>
            </div>
            <br />
            <pre>use artbyrab\crumbley\Breadcrumbs;
use artbyrab\crumbley\Crumb;

$breadcrumbs = new Breadcrumbs();

$breadcrumbs->add(
    (new Crumb())->addLabel('Home')
)->add(
    (new Crumb())->addLabel('Blog')->addUrl('/blog')
)->addCurrent(
    (new Crumb())->addLabel('Hello World')->addUrl('/blog/hello-world')
);</pre>
        </div>
    </body>
</html>