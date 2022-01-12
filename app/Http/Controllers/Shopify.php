<?php

namespace App\Http\Controllers;
use GuzzleHttp\Client;
use Illuminate\Http\Request;

class Shopify extends Controller
{
    protected $api_key;
    protected $password;
    protected $url;
    protected $host;
    protected $secret;
    protected $client;

    public function __construct() {
        $this->api_key = env('SHOPIFY_API_KEY');
        $this->password = env('SHOPIFY_API_PASSWORD');
        $this->secret = env('SHOPIFY_API_SHARED_SECRET');
        $this->host = env('SHOPIFY_API_HOST');

        $this->url = "https://{$this->api_key}:{$this->password}@{$this->host}";
        //https://db90c4e25a9a68fda9dfef731646b553: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@todoku-yo.myshopify.com/admin/orders.json?limit=250
        $this->client = new Client();
    }

    public function __call($method, $args)
    {
        $method = strtoupper($method);
        $allowedMethods = ['POST','GET','PUT','DELETE'];

        if(!in_array($method,$allowedMethods)){
            throw new InvalidMethodRequestException();
        }
        return $this->request($method,trim($args[0]),$args[1] ?? []);
    }

    protected function request(string $method, string $uri, array $payload)
    {
        $response = $this->client->request(
            $method,
            "{$this->url}{$uri}",
            [
                'fulfillment' => json_encode($payload)
            ]
        );

        $data = [];
        $paginate_links = $response->getHeader('Link');
        if($paginate_links){

            $page_link = $paginate_links[0];
            $links_arr = explode(",", $page_link);
    
            if($links_arr){
    
                $tobeReplace = ["<",">",'rel="next"',";",'rel="previous"'];
                $tobeReplaceWith = ["","","",""];
    
                foreach ($links_arr as $link) {
                    $link_type  = strpos($link, 'rel="next') !== false ? "next" : "previous";
                    parse_str(parse_url(str_replace($tobeReplace, $tobeReplaceWith, $link), PHP_URL_QUERY), $op);
                    $data[$link_type] = trim($op['page_info']);
                }
            }
        }

        $data['all_orders'] = (json_decode($response->getBody()));
        return $data;
    }
}
