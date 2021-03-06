<?php


namespace Doclab\Doclab\Services;

use Facades\Doclab\Doclab\Services\BasicServices;
use Facades\Doclab\Doclab\Services\Reader;

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
