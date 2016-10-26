<?php

namespace Potherca\Examples;

/*

There is a Foo class (as an example) and there is a FooTest class.
The Foo classs implements a FooInterface. The tests should be written against the interface.

The idea is to give developers the interface and ask them to implement the class, including tests.

When they are content, we receive the class and run *our* tests against their class.

This is done by injecting the class into the test.

The simpelest way to do this is to extend the test, locate the developers class,
instantiate it, set it on the TestClass as a property and have everything execute as normal.
*/
class HelloTest extends \PHPUnit_Framework_TestCase
{
    /** @var HelloInterface */
    private $hello;

    final public function setUp()
    {
        $this->hello = new Hello();
    }

    final public function testHelloShouldReturnHelloWorldWhenAskedTo()
    {
        $expected = 'Hello World!';

        $actual = $this->hello->world();

        $this->assertEquals($expected, $actual);
    }
}