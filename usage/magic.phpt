--FILE--
<?php

require __DIR__ . '/../vendor/autoload.php';
$o = new \App\Example();
echo $o->add(10, 5);
--EXPECT--
15