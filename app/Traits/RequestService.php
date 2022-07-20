<?php

declare(strict_types=1);

namespace App\Traits;

use GuzzleHttp\Client;
use GuzzleHttp\Exception\BadResponseException;

trait RequestService
{
    /**
     * @param       $method
     * @param       $requestUrl
     * @param array $formParams
     * @param array $headers
     *
     * @return string
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function request($method, $requestUrl, $formParams = [], $headers = []): string
    {
        try {
            $client = new Client([
                'base_uri' => $this->base_uri
            ]);
            $response = $client->request(
                $method,
                $requestUrl,
                [
                    'form_params' => $formParams,
                    'headers' => $headers
                ]
            );

            return $response->getBody()->getContents();
        } catch (BadResponseException $e) {
            return null;
        }
    }

    public function requestLocal($method, $requestUrl, $formParams = [])
    {
        try {
            $client = new Client();
            $response = $client->request(
                $method,
                $requestUrl,
                [
                    'form_params' => $formParams
                ]
            );

            return $response->getBody()->getContents();
        } catch (BadResponseException $e) {
            return null;
        }
    }
}
