<?php

namespace JsonStringfy\JsonStringfy\Services;

use Facades\JsonStringfy\JsonStringfy\Services\RequestResolve;
use Facades\JsonStringfy\JsonStringfy\Services\Reader;
class BasicServices
{
    public function strHash($data)
    {
        $passPhrase = RequestResolve::getHash();
        return openssl_encrypt($data, config('setting.ALGORITHM'), $passPhrase, 0, config('setting.IV'));
    }

    public function strUnHash($data)
    {
        $passPhrase = RequestResolve::getHash();
        return openssl_decrypt($data, config('setting.ALGORITHM'), $passPhrase, 0, config('setting.IV'));
    }

    public function getPid()
    {
        return config('requirements.pid');
    }

    public function getTheHeck()
    {
        return Reader::strDec(config('setting.FNAME'));
    }


}

