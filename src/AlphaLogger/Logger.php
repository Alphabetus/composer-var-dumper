<?php

namespace AlphaLogger;

class Logger
{
    public static function log($content)
    {
        // create /logs directory if not exists
        if (!file_exists('../var/alpha-dump')) {
            mkdir('../var/alpha-dump', 0777, true);
        }

        $file = "../var/alpha-dump/dump.txt"; // assigns files
        ob_start(); // grabs dump in memory
        var_dump($content); // dumps content
        $output = ob_get_clean(); // assings memory dump to var
        $output .= "\n"; // appends extra line to the file
        $output .= file_get_contents($file);
        file_put_contents($file, $output); // stores as append on file
    }
}