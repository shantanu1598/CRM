<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request;
use GuzzleHttp\Client;

class ExternalApiCall extends Controller
{
   
        public function fetch()
        {

            $client = new Client(); 
$res = $client->request('GET', 'https://qahf.tcsion.com/CRM/crmrest/clientCom/generateToken', [
    'form_params' => [
    'user_name'=> 'Age3dhEpj5UBVVOImX/ViHfZ7pe3msMeTxyCOL9eMXh4igBVU9/d1pRV/6Af4MWMUo5iVjeVZXaFRVsuUEA11uABTv8vSGShgKRXunA0W0i45DefZlbdzIKm4N4Vu/QrUFbERFiHYieeLFcANlGbSqN3msyhOi5n+ml9mLi4Jyoxwk2UhUquDocaj3FM3DnDl1PZILHzvslc9Qz6ab52Jc4oKSYvCrXlO5BhZ5QwyDsU8Rg4W0HrmxAsUDeMn9XcwpYGemQHH1gzv6slIwvPCFgj0+SFMIe9gKtWHZdBO6KU28IbvDebkRQEU18S2fOmDjFRFJHvFOwa7NzvdqvYKcpKJvPrXQOQG3FKDPFG3n8DQ3k+qi/zFi5HQnB6bC6X9RZImESWVg7yutjfydSmv7NWM/VMmz/Wyg6GZmo9Ue4v4VHTm5fc8p4hne5HI56On73AUmQpX3bhITiYWDCHZGNPbqPEU24UW58kfG1br9v+lnPL+GZhHdce4BQ81SyafW1PyK31p4IvEKUH4uNwYg20zY47Ok5xcFPwqoJ3ZO4GtI47YDfPJ3KID6a27h1tUplzLhzuvH325CAkLaqi1AIjpZmqO6ze4dmKev1+baJU+0gsfEbdDUvvq8UvCD0yGbaptbrj2QBlOCVWC1I28Vkn9fw92xHEGlHDIIWSyTA=',
            
    'password' => 'eAXSNKE0Tijtyute1SmQ/Mo8fPIjGPbejuJLwvUMUAm/Ui2Q+2LYCU/InYt/muaxU6oWIZvBuVFxniqm+1K6Nxc0vvMy9oZJdhJCvS4c/6Np9iZq/22PF6D4vyaF5sj16ZHDh0rp6pbzo0RIVsNXYl7yXFVXq2mg+QrEbk1j8qd/OMBEEKJkZg3nVWTFPPrAp5PmMV0CCqOMe1gcux+rVckcc+hr4xuM9mOBIHd73LK0wtZu0ditiYUC/u7kYX/wBZYIXJ1GM3eFTN3BIwv0M+h25rCMDjYOUy2Jk4ENZdfO8BshVnWvQnhJgtZgcg1Q/kPRoX8RupXknuY6mS03WPN3NLjYpI6O10y/3bT+7W7sRQc+6xeedApt1VUWDL+088XKyAlsKafSk02rT/LJL+JvSuGraRdKQuY/Xt398TnsaNsrgcUw5rrsy6fgbWJTs8edaKA2RBSuIW9ERKxTcs0wi7I9ep35TNzinK3WDxJiyWD4zQS1/6xHx37qEZ9s/SPoYWK3/U+e8zG4D1btXRx2W0tIILgUmWo3O9Ivu+oQdBpVwKnX60fXomdkncRiuP9+vgYCO+Xrt/MtKQC3SlKgBx4OXTDNLIwoNvRotW8vPwvsVoXCnjvWk95sucYhRI9rr6XjiDk6Tk9OhPEmtcG4aDu3SWFs4X5CkvZySGc=',
    'Content-Type' => 'application/json',  
    'identifier'=>'00288113401687'
    ]
]);
 return $res;

}
        }