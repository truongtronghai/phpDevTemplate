<?php

namespace Foo\Bar; // same namespace with sampleNamespace2

require_once './sampleNamespace2.php';

const FOO3 = 3;
function foo3()
{
    echo FOO3;
}
class foo3
{
    public static function staticmethod()
    {
        var_dump('This is file3');
    }
}
echo "==========File 3==========\n";
echo 'NS: ' . __NAMESPACE__ . "\n";
// relative qualified name
foo();
echo "\n";
var_dump(FOO);
foo::staticmethod();
echo "\n";
// relative qualified name
foo3();
echo "\n";
var_dump(FOO3);
foo3::staticmethod();
echo "\n";
