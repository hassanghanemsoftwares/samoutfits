<?php

defined('BASEPATH') or exit('No direct script access allowed'); // For CI3 only

class Whish
{
    protected $baseUrl;
    protected $channel;
    protected $secret;
    protected $websiteUrl;

    public function __construct()
    {
        // $this->baseUrl = 'https://lb.sandbox.whish.money/itel-service/api/';
        $this->baseUrl = 'https://whish.money/itel-service/api/';
        $this->channel = '13763772';
        $this->secret = '237224ee3ffd42e79f97bd57ec56852f';
        $this->websiteUrl = 'samoutfits.com';
    }

    public function getBalance()
    {
        return $this->curlRequest('GET', 'payment/account/balance');
    }

    public function getRate($amount, $currency)
    {
        return $this->curlRequest('POST', 'payment/collect/rate', [
            'amount' => $amount,
            'currency' => $currency,
        ]);
    }

    public function createWHISHTOWHISH($data)
    {
        return $this->curlRequest('POST', 'payment/whish', [
            'amount' => $data['amount'],
            'currency' => $data['currency'],
            'invoice' => $data['invoice'],
            'externalId' => $data['externalId'],
            'successCallbackUrl' => $data['successCallbackUrl'],
            'failureCallbackUrl' => $data['failureCallbackUrl'],
            'successRedirectUrl' => $data['successRedirectUrl'],
            'failureRedirectUrl' => $data['failureRedirectUrl'],
        ]);
    }

    public function getCollectStatus($currency, $externalId)
    {
        return $this->curlRequest('POST', 'payment/collect/status', [
            'currency' => $currency,
            'externalId' => $externalId,
        ]);
    }

    private function curlRequest($method, $endpoint, $body = [])
    {
        $url = $this->baseUrl . $endpoint;
        $ch = curl_init($url);

        $headers = [
            'Content-Type: application/json',
            'channel: ' . $this->channel,
            'secret: ' . $this->secret,
            'websiteurl: ' . $this->websiteUrl,
        ];

        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

        // 👇 Add this line to securely verify SSL with the right cert
        curl_setopt($ch, CURLOPT_CAINFO, 'C:/wamp/bin/php/php8.2.18/extras/ssl/cacert.pem');

        if (strtoupper($method) === 'POST') {
            curl_setopt($ch, CURLOPT_POST, true);
            curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($body));
        }

        $response = curl_exec($ch);
        $curlError = curl_error($ch);
        curl_close($ch);

        if ($curlError) {
            return [
                'status' => false,
                'code' => 'curl_error',
                'dialog' => [
                    'title' => 'cURL Error',
                    'message' => $curlError,
                ],
                'data' => null,
            ];
        }

        $decoded = json_decode($response, true);

        if (!is_array($decoded)) {
            return [
                'status' => false,
                'code' => 'invalid_json',
                'dialog' => [
                    'title' => 'Response Error',
                    'message' => 'Invalid JSON from server',
                ],
                'data' => $response,
            ];
        }

        return $decoded;
    }
}
