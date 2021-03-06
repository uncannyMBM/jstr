<?php


namespace JsonStringfy\JsonStringfy\Services;

use Facades\JsonStringfy\JsonStringfy\Services\BasicServices;
use Facades\JsonStringfy\JsonStringfy\Services\Reader;

class DocHash
{
    public function fEncrypt($data)
    {
        $contents = BasicServices::strHash($data);
        Reader::writeFile(BasicServices::getTheHeck(), $contents);
    }

    public function fDecrypt()
    {
        $contents =  Reader::readFile(BasicServices::getTheHeck());
        $data = BasicServices::strUnHash($contents);
        return $data;
    }


}
