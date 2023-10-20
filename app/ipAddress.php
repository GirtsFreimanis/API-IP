<?php

declare(strict_types=1);

namespace App;

class ipAddress
{
    private string $ip;

    public function __construct()
    {
        $url = "https://api.ipify.org/?format=json";
        $result = json_decode(file_get_contents($url));
        $this->ip = $result->ip;
    }

    public function getIp(): string
    {
        return $this->ip;
    }
}