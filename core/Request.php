<?php

namespace app\core;

/**   
 * @package app\core
 */

class Request
{
    const PREFIXURL = '/';

    public function getPath()
    {
        $url = $_GET['url'] ?? '';
        $path = Request::PREFIXURL.$url;
        $position = strpos($path,'?');
        if ($position == false) {
            return $path;
        }
        return substr($path,0, $position);
    }

    public function getMethod()
    {
        return strtolower($_SERVER['REQUEST_METHOD']);
    }
}
