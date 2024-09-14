<?php

class Route
{
    public function handleRoute($url)
    {
        global $routes;
        unset($routes['defaultController']);

        $url = trim($url, '/');
        if (empty($url)) {
            $url = '/';
        }
        $handle_url = $url;
        if (!empty($routes)) {
            foreach ($routes as $key => $val) {
                if (preg_match("~{$key}~is", $url)) {
                    $handle_url = preg_replace("~{$key}~is", $val, $url);
                }
            }
        }

        return $handle_url;
    }
}
