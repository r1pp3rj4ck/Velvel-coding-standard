Symfony2 PHP CodeSniffer Coding Standard
========================================

A code standard to check against the Velvel coding standards.

Installation
------------

1. Install phpcs:

        pear install PHP_CodeSniffer

2. Find your PEAR directory:

        pear config-show | grep php_dir

3. Copy, symlink or check out this repo to a folder called Symfony2 inside the
   phpcs `Standards` directory:

        cd /path/to/pear/PHP/CodeSniffer/Standards
        git clone git://github.com/r1pp3rj4ck/Velvel-coding-standard Velvel

4. Set Symfony2 as your default coding standard:

        phpcs --config-set default_standard Velvel

5. ...

6. Profit!

        cd /path/to/my/project
        phpcs
        phpcs path/to/my/file.php
