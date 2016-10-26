<?php

namespace Potherca\Examples;

class Hello implements HelloInterface
{
    final public function world()
    {
        return $this->sayHello(self::WORLD);
    }

    private function sayHello($name)
    {
        return sprintf('Hello %s!', $name);
    }
}

/*EOF*/