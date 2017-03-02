<?php
namespace CrowdProperty\ModulrHmacPhpClient;

use Carbon\Carbon;
use Symfony\Component\HttpFoundation\HeaderBag;

class Request
{
    private $client;
    private $nonce;
    private $date;
    private $headers;

    public function __construct()
    {
    }

    public function addHeaders($headers)
    {
        $this->headers = $headers;
        return $this;
    }

    public function nonce()
    {
        if (is_null($this->nonce)) {
            $this->nonce = uniqid(null, true);
        }
        return $this->nonce;
    }

    public function date()
    {
        if (is_null($this->date)) {
            $this->date = Carbon::now()->format('D, d M Y H:i:s e');
        }

        return $this->date;
    }

    public function hmac()
    {
        $hmacStr = [
            "date: " . $this->date(),
            "x-mod-nonce: " . $this->nonce()
        ];

        $hmacSigniture = implode("\n", $hmacStr);

        return urlencode(base64_encode(hash_hmac('sha1', $hmacSigniture , \Config::get('modulr.hmac_secret'), true)));
    }

    public function authorisationString()
    {
        return [
            'Signiture keyId' => \Config::get('modulr.api_key'),
            'algorithm' => 'hmac-sha1',
            'headers' => 'date x-mod-nonce',
            'signiture' => $this->hmac()
        ];
    }

    public function send()
    {
        $this->addHeaders([
            'x-mod-nonce' => $this->nonce(),
            'Date' => $this->date(),
            'Authorization' => $this->authorisationString()
        ]);
    }
}