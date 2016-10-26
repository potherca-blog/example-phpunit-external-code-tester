# [Example external code tester (with PHPUnit)](https://github.com/Potherca/example-phpunit-external-code-tester)

[![Project Stage Badge: Experimental]][Project Stage Page]

## Introduction

During a discussion at work this week, the question arose how to test code written by another developer against a given Interface.

This repository offers an example of *one way* of how this could be achieved.

## Uhm, say what?

There is a Hello class (as an example) and there is a HelloTest class.

The Hello classs implements a HelloInterface. The tests should be written against the interface.

The idea is to give developers the interface and ask them to implement the class, including tests.

When they are content, we receive the class and run *our* tests against their class.

This is done by locating the the class in a given location and pulling the class into the test.

## Contact

To report bugs, feature requests or other issues: find [me on twitter](https://twitter.com/potherca)

## License

This project has been licensed under [GPL-3.0+ License](LICENSE) (GNU General Public License v3.0 or higher).

[Project Stage Badge: Experimental]: https://img.shields.io/badge/Project%20Stage-Experimental-yellow.svg
[Project Stage Page]: https://bl.ocks.org/potherca/raw/a2ae67caa3863a299ba0/
