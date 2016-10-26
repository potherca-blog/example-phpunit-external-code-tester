<?php

namespace Acme\Example;

class Hello implements \Potherca\Examples\HelloInterface
{
    final public function world()
    {
        return 'Hello World!';
    }
}

/*EOF*/