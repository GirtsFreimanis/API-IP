<?php

declare(strict_types=1);

require_once "vendor/autoload.php";

use App\ipAddress;
use App\ipInfo;
use Carbon\Carbon;

$ip = new ipAddress();
$ipInfo = new ipInfo($ip);

echo "IP: {$ipInfo->getIp()}\n";
echo "Country: {$ipInfo->getCountry()}\n";
echo "City: {$ipInfo->getCity()}\n";
echo "Timezone: {$ipInfo->getTimezone()}\n";
echo "Current time: " . Carbon::now($ipInfo->getTimezone());