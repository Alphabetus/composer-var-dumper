# Alpha Var Dumper - A basic Var Dumper   
---

This package provides a simple var_dumper that allows you to transcript variables into file.  
It generates the file `/var/alpha-dump/dump.txt` with the contents of given var.  

######  1. Basic Usage 
1. >$ composer install alphabetus/var-dumper
1. The static method `::log()` can be used with 1 or 2 parameters:
    - `::log($var)` - Logs only the **last call of the dump** and deletes older entries.
    - `::log($var, $keep_log_boolean)` - if true, cumulates dumper calls in the same file. 

###### Follow the example below
```
<?php 

namespace App\Module;

use AlphaLogger\Logger as Logger;

class YourClass
{
    public function foo()
    {
        $var = ...
        Logger::log($var, [$cumulate_log]);
    }
}
```
  

