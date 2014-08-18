##CatchamonkeyConsoleLoggerBundle [![Build Status](https://travis-ci.org/catchamonkey/CatchamonkeyConsoleLoggerBundle.svg?branch=master)](https://travis-ci.org/catchamonkey/CatchamonkeyConsoleLoggerBundle)

Symfony2 bundles that adds logging of exceptions thrown in console commands

##Installation

Step 1) Download

The recommended method is via composer.  
Add the bundle as a dependency to your composer.json file

```json
{
    "require": {
        "catchamonkey/console-logger-bundle": "dev-master"
    }
}
```

Now tell composer to install this new requirement

```bash
composer update catchamonkey/console-logger-bundle
```

This will be installed into your vendor directory

Step 2) Register the Bundle in your kernel

```php
// app/AppKernel.php

public function registerBundles()
{
    $bundles = array(
        // ...
        new Catchamonkey\Bundle\ConsoleLoggerBundle\CatchamonkeyConsoleLoggerBundle(),
    );
}
```

And your done! You will now see that exceptions from console commands
 are logged at error level via monolog
