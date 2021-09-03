<?php

namespace App\Http\Middleware;
use Closure;

class ResponseMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $response = $next($request);
        $last_time = microtime(true);
        $total_time = $last_time - RequestMiddleware::$req_time;
        $req_time = date('Y-m-d h:i:s',RequestMiddleware::$req_time);
        $data = json_decode($response->content(),true);
        $result["header"]["process_time"] = $total_time;
        $result["header"]["memory_usage"] = (memory_get_peak_usage(false)/(1024*1024));
        $result["header"]["size_request"] = (int)$request->header('content-length', 0);
        $result["header"]["size_response"] = (strlen($response->content())/1024);
        if (isset($data['content'])) {
            $result["content"] = $data["content"]["data"];
            if($data["content"]["header"]["status_code"]==""){
                $result["header"]["status_code"] = 500;
                $result["content"] = "INTERNAL SERVER ERROR";
            }else{
                $result["header"]["status_code"] = $data["content"]["header"]["status_code"];
                if(isset($data["content"]["header"]["pesan"])) {
                    $result["header"]["pesan"] = $data["content"]["header"]["pesan"];
                }
            }
        } else {
            $result["header"]["status_code"] = 500;
            $result["content"] = "INTERNAL SERVER ERROR";
        }
        return response(json_encode($result), $result["header"]["status_code"], ["Content-Type" => "application/json"])->header('Content-Type', "application/json");
    }
}
