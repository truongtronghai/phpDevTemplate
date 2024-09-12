<?php

namespace Foo\Bar;

include './sampleNamespace1.php';

const FOO = 2;
function foo()
{
    echo FOO;
}
class foo
{
    public static function staticmethod()
    {
        var_dump('This is file2');
    }
}
echo "==========File 2==========\n";
echo 'NS: ' . __NAMESPACE__ . "\n";
// relative qualified name
foo();
echo "\n";
var_dump(FOO);
foo::staticmethod();
echo "\n";
// relative qualified name
File1\foo();
var_dump(File1\FOO);
File1\foo::staticmethod();
// global(absolute) qualified name
echo "global(absolute) qualified name\n";
\Foo\Bar\foo();
echo "\n";
var_dump(\Foo\Bar\FOO);
\Foo\Bar\foo::staticmethod();
echo "\n";
