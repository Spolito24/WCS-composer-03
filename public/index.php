<?php

require __DIR__ . '/../vendor/autoload.php';

use CowSay\Cow;

$cowcow = new Cow('Hello, farm !');

$cowcow->setTongue('U');

echo $cowcow->say();
