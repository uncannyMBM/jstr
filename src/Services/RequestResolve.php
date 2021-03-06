<?php


namespace Doclab\Doclab\Services;


use Facades\Doclab\Doclab\Services\BasicServices;
use Facades\Doclab\Doclab\Services\Reader;
class RequestResolve
{
    public function getHash()
    {
        $parse_url = parse_url(\request()->url());
        if (isset($parse_url['host']) && !empty($parse_url['host'])) {
            return $parse_url['host'];
        } else {
            return config('setting.STRING');
        }
    }

    public function getResolve($url, $headers)
    {
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        $result = curl_exec($ch);
        curl_close($ch);
        return $result;
    }
}
