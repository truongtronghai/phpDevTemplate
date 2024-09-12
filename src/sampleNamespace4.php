<?php

use Foo\Bar\foo;

// need to explicit function to load function
use function Foo\Bar\foo;

// need to explicit const to load constant
use const Foo\Bar\FOO;

// default use class

require_once './sampleNamespace2.php';

const FOO4 = 4;
function foo4()
{
    echo FOO4;
}
class Foo4
{
    public static function staticmethod()
    {
        var_dump('This is file4');
    }
}
echo "==========File 4==========\n";
echo 'NS: ' . __NAMESPACE__ . "\n";
// relative qualified name
foo();
echo "\n";
var_dump(FOO);
foo::staticmethod();
echo "\n";
// relative qualified name
foo4();
echo "\n";
var_dump(FOO4);
foo4::staticmethod();
echo "\n";
