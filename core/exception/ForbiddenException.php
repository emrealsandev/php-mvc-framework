<?php

namespace app\core\exception;

class ForbiddenException extends \Exception
{
    protected $message = 'Bu sayfaya erişmek için yetkiniz yok!';
    protected $code = 403;
}
