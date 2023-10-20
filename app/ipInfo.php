<?php

declare(strict_types=1);

namespace App;

class ipInfo
{
    private string $ip;
    private string $city;
    private string $country;
    private string $timezone;

    public function __construct(ipAddress $ip)
    {
        $url = "https://ipinfo.io/{$ip->getIp()}/geo";
        $result = json_decode(file_get_contents($url));
        $this->ip = $result->ip;
        $this->city = $result->city;
        $this->country = $result->country;
        $this->timezone = $result->timezone;
    }

    public function getIp(): string
    {
        return $this->ip;
    }

    public function getCity(): string
    {
        return $this->city;
    }

    public function getCountry(): string
    {
        return $this->country;
    }

    public function getTimezone(): string
    {
        return $this->timezone;
    }
}