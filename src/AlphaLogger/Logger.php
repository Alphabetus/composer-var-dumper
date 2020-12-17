<?php

namespace AlphaLogger;

class Logger
{
    public static function log($content, $keep_log = false)
    {
        $i = new Logger();
        $i->createDirIfNotExists();
        file_put_contents($i->getFile(), $i->generateOutput($content, $keep_log));
    }

    /**
     * @return string
     * Returns files path
     */
    protected function getFile()
    {
        return "../var/alpha-dump/dump.txt";
    }

    /**
     * @return void
     * If the logs folder is not created, creates it.
     */
    protected function createDirIfNotExists()
    {
        if (!file_exists('../var/alpha-dump')) {
            mkdir('../var/alpha-dump', 0777, true);
        }
    }

    /**
     * @param $content
     * @return false|string
     * Generates and outputs the dump
     */
    protected function outputAndRecord($content)
    {
        ob_start();
        var_dump($content);
        $output = ob_get_clean();
        return $output;
    }

    /**
     * @param $content
     * @param $keep_log
     * @return string
     * Generate the text output
     * Enables / Disables look keeping
     */
    protected function generateOutput($content, $keep_log)
    {
        $o = $this->outputAndRecord($content);
        $o .= "--------------------------------------\n";
        if ($keep_log) { $o .= $this->getFileContents($this->getFile()); }
        return $o;
    }

    /**
     * @param $file
     * @return false|string
     * Reads file if exists, returns false if file is not there
     */
    protected function getFileContents($file)
    {
        if (file_exists($file)) { return file_get_contents($file); }
        else {  return false; }
    }
}