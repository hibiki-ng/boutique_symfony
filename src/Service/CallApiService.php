<?php

namespace App\Service;

use Symfony\Contracts\HttpClient\HttpClientInterface;

class CallApiService
{
    public function __construct(
      private HttpClientInterface $client
      ) {}

    public function getData(): array
    {
        $response = $this->client->request(
            'GET',
            'https://random-d.uk/api/v2/quack'
        );

        return $response->toArray();
    }
}