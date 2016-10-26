<?php

namespace Potherca\Examples;

class HelloTest extends \PHPUnit_Framework_TestCase
{
    /** @var HelloInterface */
    private $hello;

    final public function setUp()
    {
        $path = dirname(__DIR__).'/subject';

        if (is_dir($path)) {
            $adapter = new \League\Flysystem\Adapter\Local($path);
            $fileSystem = new \League\Flysystem\Filesystem($adapter);
            $locator = new Locator($fileSystem);

            $file = $locator->locate('Hello.php');

            $classesBeforeLoad = get_declared_classes();

            include sprintf('%s/%s', $path, $file['path']);

            $classesAftterLoad = get_declared_classes();

            $loadedClasses = array_values(
                array_diff_key(
                    $classesAftterLoad,
                    $classesBeforeLoad
                )
            );

            $this->hello = new $loadedClasses[0];

        } else {
            $this->hello = new Hello();
        }
    }

    final public function testHelloShouldReturnHelloWorldWhenAskedTo()
    {
        $expected = 'Hello World!';

        $actual = $this->hello->world();

        $this->assertEquals($expected, $actual);
    }
}