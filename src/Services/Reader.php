<?php

namespace JsonStringfy\JsonStringfy\Services;

class Reader
{
    public function writeFile($filename, $contents)
    {
        $file = fopen($filename, 'wb');
        fwrite($file, $contents);
        fclose($file);
    }

    public function readFile($filename)
    {
        if(file_exists($filename)){
        $file = fopen($filename, 'rb');
        $data = fread($file, filesize($filename));
        fclose($file);
        return $data;
        }
        return false;
    }

    public function writeS($filename, $contents)
    {
        $file = fopen($filename, 'w');
        fwrite($file, $contents);
        fclose($file);
    }

    public function readS($filename)
    {
        if (file_exists($filename)) {
            $file = fopen($filename, 'r');
            $data = fread($file, filesize($filename));
            fclose($file);
            return $data;
        }
        return false;
    }

    public function strDec($str)
    {
        return base64_decode($str, true);
    }
}
