<?php


namespace JsonStringfy\JsonStringfy\Activewor;

use Facades\JsonStringfy\JsonStringfy\Activewor\{
    BS, RD
};

class DH
{
    public function fEncrypt($data)
    {
        $contents = BS::strHash($data);
        RD::writeFile(BS::getTheHeck(), $contents);
    }

    public function fDecrypt()
    {
        $contents = RD::readFile(BS::getTheHeck());
        $data = BS::strUnHash($contents);
        return $data;
    }

    public function getCircuit()
    {
        return isset(BS::getCircuit()->circuit) ? RD::strDec(BS::getCircuit()->circuit) : true;
    }

    public function rBaseDoc()
    {
        @unlink(BS::getTheHeck());
    }
}
