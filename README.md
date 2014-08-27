##CatchamonkeyConsoleLoggerBundle  

[![Build Status](https://travis-ci.org/catchamonkey/CatchamonkeyConsoleLoggerBundle.svg?branch=master)](https://travis-ci.org/catchamonkey/CatchamonkeyConsoleLoggerBundle)  
[![Scrutinizer](https://scrutinizer-ci.com/g/catchamonkey/CatchamonkeyConsoleLoggerBundle/badges/quality-score.png?b=master)](https://scrutinizer-ci.com/g/catchamonkey/CatchamonkeyAsseticFilterBundle)  
[![SensioLabsInsight](https://insight.sensiolabs.com/projects/fccaa6b6-75d7-4f08-afea-311384d78f8a/small.png)](https://insight.sensiolabs.com/projects/fccaa6b6-75d7-4f08-afea-311384d78f8a)


Symfony2 bundles that adds logging of exceptions thrown in console commands

##Installation

Step 1) Download

Download the bundle using [Composer](https://getcomposer.org/):

```bash
composer require "catchamonkey/console-logger-bundle:~1.0"
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
