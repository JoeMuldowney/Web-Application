<?php
require_once __DIR__ . '/../app/controller/authenticate.php';
class Router
{
    public function run()
    {
        
        $uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

        
        if ($uri === '/login') {
            (new AuthController)->showLogin();
        } elseif ($uri === '/') {
            (new AuthController)->showLogin();
        } elseif ($uri === '/logout') {
            (new AuthController)->logout(); 
        } elseif ($uri === '/redirect') {
            (new AuthController)->showLogout();       
        } elseif ($uri === '/login/submit' && $_SERVER['REQUEST_METHOD'] === 'POST') {
            (new AuthController)->login();
        } elseif ($uri === '/portal') {
            (new AuthController)->portal();
        } elseif ($uri === '/errs') {
            (new AuthController)->showErrs();
        }else {
            http_response_code(404);
            echo '404 - Not Found';
        }
    }
}