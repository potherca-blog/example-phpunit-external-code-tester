<?php

namespace Potherca\Examples;

use League\Flysystem\FilesystemInterface;

/**
 *
 */
class Locator
{
    ////////////////////////////// CLASS PROPERTIES \\\\\\\\\\\\\\\\\\\\\\\\\\\\
    /** @var FilesystemInterface */
    private $fileSystem;

    //////////////////////////////// PUBLIC API \\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\
    /**
     * @param FilesystemInterface $fileSystem
     */
    final public function __construct(FilesystemInterface $fileSystem)
    {
        $this->fileSystem = $fileSystem;
    }

    /**
     * @return array
     */
    final public function locate($filename)
    {
        $file = null;

        $fileList = $this->fileSystem->listContents('./', true);

        foreach ($fileList as $file) {
            if ($file['basename'] === $filename) {
                return $file;
            }
        }

        throw new \Exception(sprintf('Could not find file "%s"', $filename));
    }
}

/*EOF*/
