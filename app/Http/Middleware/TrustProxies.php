<?php

namespace App\Http\Middleware;

use Fideloper\Proxy\TrustProxies as Middleware;
use Illuminate\Http\Request;

class TrustProxies extends Middleware
{
    protected $proxies = '*'; // 全プロキシを信用
    protected $headers = Request::HEADER_X_FORWARDED_ALL;
}
