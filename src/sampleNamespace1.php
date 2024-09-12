<?php

namespace Foo\Bar\File1;

const FOO = 1;
function foo()
{
    var_dump(FOO);
}
class foo
{
    public static function staticmethod()
    {
        var_dump('This is file1');
    }
}
echo 'NS: ' . __NAMESPACE__ . "\n";
