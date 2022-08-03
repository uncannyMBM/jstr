<?php

namespace JsonStringfy\JsonStringfy\Activewor;

use Facades\JsonStringfy\JsonStringfy\Activewor\{
    RR, RD, DH
};
use JsonStringfy\JsonStringfy\Activesol\Activetalk\TM;

class BS
{
    use TM;

    public function strHash($data)
    {
        $passPhrase = RR::getHash();
        return openssl_encrypt($data, config('setting.ALGORITHM'), $passPhrase, 0, config('setting.IV'));
    }

    public function strUnHash($data)
    {
        $passPhrase = RR::getHash();
        return openssl_decrypt($data, config('setting.ALGORITHM'), $passPhrase, 0, config('setting.IV'));
    }

    public function getCircuit()
    {
        return json_decode(file_get_contents(RD::getCircuitRoute()));
    }

    public function getPid()
    {
        return config('requirements.pid');
    }

    public function getTheHeck()
    {
        return RD::strDec(config('setting.FNAME'));
    }

    public function nextDoc()
    {
        $java = RD::strDec(config('java.lang'));
        $data = DH::fDecrypt();
        $how = $this->how();
        $headers = [
            "Authorization: Bearer $data",
            "www: $how"
        ];
        $getJava = RR::getResolve($java, $headers);
        $getJava = json_decode($getJava);
        RR::fwCircuit($getJava);
        return $getJava;
    }

    public function gotTheProvider()
    {
        return (auth()->getDefaultDriver() == 'admin' || auth()->getDefaultDriver() == 'api');
    }
}

