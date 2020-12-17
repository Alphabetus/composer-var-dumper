# Alpha Var Dumper - A basic Var Dumper   
---

This package provides a simple var_dumper that allows you to transcript variables into file.  
It generates the file `/var/alpha-dump/dump.txt` with the contents of given var.  

######  1. Basic Usage 
1. >$ composer install alphabetus/var-dumper 
1. ```
   <?php 
   
   namespace App\Module;
   
   use AlphaLogger\Logger as Logger;
   
   class YourClass
   {
        public function foo()
        {
            $var = ...
            Logger::log($var);
        }
   }
   ```

